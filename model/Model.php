<?php
//Tầng Model: dùng chung cho cả trang admin và trang người dùng
class Model
{
	public $pdo;//Thuộc tính sẽ chứa tham chiếu đối tượng PDO
	protected $config;
	//PT tự động chạy khi đối tượng khởi tạo
	function __construct($cf)
	{
		//Lệnh try catch: bắt lỗi (nếu có)
		try{
			$this->config=$cf;
			//Biến dsn: chứa tên host và tên CSDL
			$dsn=$cf['server'].':host='.$cf['host'].';dbname='.$cf['db'];
			//Chạy lệnh khởi tạo đối tượng PDO
			$this->pdo= new PDO($dsn,$cf['user'],$cf['pass']);//Tham chiếu đối tượng lên $pdo
			$this->pdo->exec("SET NAMES 'utf8'");//Chạy lệnh xác định CSDL là utf8
		}catch(Exception $ex)
		{
			//Khi hàm chạy sẽ dừng toàn bộ chương trình và in ra  "Error Connection"
			die('Error Connection');
		}
	}
	
	private $totalpage=0;//Thuộc tính chứa giá trị là tổng số trang
	
	//PT sellectall : lấy dữ liệu từ 1 bảng và trả về mảng 2 chiều 
	
	function selectall($table,$p=0,$where='',$m=false)
	{	//$p: Số phần tử quy định trên 1 trang
		
		//B1: Xậy dựng câu lệnh SQL: lấy dữ liệu từ bảng ra
		$sqldata="SELECT * FROM $table ";
		if($where!='')$sqldata.=" WHERE $where ";
		$sqldata.=" ORDER BY id DESC";
		//B2: Chạy lệnh truy vấn trên
		$re=$this->pdo->query($sqldata);
		//B3: TRả về dữ liệu là mảng 2 chiều
		if($p>0)
		{//Lập trình phân trang ở đây
			$total=$re->rowCount();//Lấy ra tổng số dữ liệu có dc từ câu truy vấn bên trên
			$this->totalpage=ceil($total/$p);//Tính ra tổng số trang
			//Lấy biến phân trang trên URL xuống (nếu có)
			if(isset($_GET['page']))$page=$_GET['page']; else $page=1;
			if($m==true)$page=1;
			$thutu=($page-1)*$p;//Công thức tính thứ tự bản ghi sẽ lấy
			$sqldata.=" LIMIT $thutu,$p";//Xây dựng câu lênh mới có nối thêm LIMIT
			$re=$this->pdo->query($sqldata);//Chạy câu lệnh mới bên trên
		}
		if(!$re) die('Error Query: '.$sqldata);
		else return $re->fetchAll(PDO::FETCH_ASSOC);//PT trả về mảng 2 chiều
		//PDO::FETCH_ASSOC: Cấu hình mảng dạng theo tên
	}
	
	function selectone($table,$where='')
	{
		$sqldata="SELECT * FROM $table ";
		if($where!='')$sqldata.=" WHERE $where ";
		$sqldata.=" ORDER BY id DESC";
		$re=$this->pdo->query($sqldata);
		if($re->rowCount()>0) return $re->fetch(PDO::FETCH_ASSOC);
		else return false;
	}
	
	function viewpage($link,$pagehientai)
	{
		echo '<ul class="pagination">';
		echo '<li> <a href="'.$link.'&page=1" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';	
		for($i=1;$i<= $this->totalpage; $i++)
		{
			if($pagehientai==$i) $active=" class='active' "; else $active='';
			echo ' <li'.$active.'><a href="'.$link.'&page='.$i.'">'.$i.'</a></li>';
		}
		echo '<li> <a href="'.$link.'&page='.$this->totalpage.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';	
		echo '</ul>';
	}
	//Phương thức thêm mới dữ liệu vào 1 bảng
	function insert($table,$data,$dir='../upload/')
	{//$table: Bảng dc thêm dữ liệu, $data: dữ liệu thêm
		$result=$this->uploadfile($dir);
		if(is_array($result))$data=array_merge($data,$result);
		///
		$dscot='';
		$dsgiatri='';
		//Vòng lặp lấy ra các cột trong bảng và dữ liệu sẽ thêm
		foreach($data as $key=>$val)
		{
			if($dscot=='')$dscot=$key;
			else $dscot.=','.$key;
			if($dsgiatri=='')$dsgiatri="'$val'";
			else $dsgiatri.=",'$val'";
		}
		//Xây dựng câu lệnh thêm mới 
		$strAdd="INSERT INTO $table ($dscot) VALUES ($dsgiatri)";
		//Chạy lệnh thêm mới
		$this->pdo->exec($strAdd);
		//Trả về ID mới dc thêm của bảng
		return  $this->pdo->lastInsertId();
	}
	
	
	function update($table,$data,$id,$dir='../upload/')
	{
		//$table: Bảng dc thêm dữ liệu, $data: dữ liệu thêm
		$result=$this->uploadfile($dir);
		if(is_array($result))$data=array_merge($data,$result);
		$dscot='';
		//Vòng lặp lấy ra các cột trong bảng và dữ liệu sẽ thêm
		foreach($data as $key=>$val)
		{
			if($dscot=='')$dscot=$key."='$val'";
			else $dscot.=','.$key."='$val'";
		}
		//Xây dựng câu lệnh thêm mới 
		$strEdit="UPDATE  $table SET $dscot WHERE id=$id ";
		//Chạy lệnh thêm mới
		return $this->pdo->exec($strEdit);
	}

	function updatesl($id,$sl)
	{
		$strEdit="UPDATE  sanpham SET soLuong=soLuong-$sl WHERE id=$id ";
		//Chạy lệnh thêm mới
		return $this->pdo->exec($strEdit);
	}

	//Phương thức Xóa dữ liệu
	function delete($table,$id)
	{
		$strdel="DELETE FROM $table WHERE id=$id";
		return $this->pdo->exec($strdel);
	}
	
	function uploadfile($dir)
	{
		$result=array();
		$error='';
		foreach($_FILES as $key=>$file)
		{
			$name=$file['name'];//Lấy tên File đc Upload
			$type=$file['type'];//Kiểu file đc upload: MIME
			$temp=$file['tmp_name'];//Đường dẫn đến file tạm 
			//$error=$file['error'];//Phần tử lưu mã lỗi (nếu có): 0: ko có lỗi
			$size=$file['size'];//Dung lượng file (byte)
			if(strpos($type,'image')===false) $error.=' Loại file không được phép, ';
			else
			{
				if($size<=1024*2048)
				{
					if(move_uploaded_file($temp,$dir.$name))
					{
						if(!getimagesize($dir.$name)){
							 unlink($dir.$name);//Xóa file
							 $error.= 'É é, không được hack, ';
						}else{
							//UPLOAD file đã thành công
							$result[$key]=$dir.$name;
						}
					}else $error.= 'Upload không thành công, ';
				}else $error.= 'Dung lượng file phải nhỏ hơn 200kb, ';
			}
		}
		if(count($result)) return $result;
		else $error;
	}
	
	function viewcate($parent=0)
	{
		$strlay="SELECT * FROM loaisp WHERE loaiCha=$parent ";
		$re=$this->pdo->query($strlay);
		if(!$re)die($strlay);//Kiểm tra lỗi nếu có
		$str='';
		if($re->rowCount()>0)
		{
			if($parent!=0)$str=' <ul class="level1">';
			foreach($re->fetchAll() as $item)
			{
				if($parent==0)
						$str.='<li class="level0 parent drop-menu">';
				else 	$str.='<li class="level1 parent">';
				$str.='<a href="'.$this->config['url'].$this->alias($item['tenLoai']).'-'.$item['id'].'.html">';
				$str.='<span>'.$item['tenLoai'].'</span></a>';
				$str.=$this->viewcate($item['id']);
				$str.='</li>';
			}
			$str.= '</ul>';
		}
		return $str;
	}
	
	//Phương thức: tìm tất cả các ID con trong 1 cây đa cấp
	function findid($loaiCha)
	{
		$list=$loaiCha;
		$strlay="SELECT * FROM loaisp WHERE loaiCha=$loaiCha";
		$re=$this->pdo->query($strlay);
		if(!$re)die($strlay);//Kiểm tra lỗi nếu có
		foreach($re->fetchAll() as $item)
			$list.=','.$this->findid($item['id']);
		return $list;
	}
	//$id: id của sản phẩm, $sl: số lượng mua, $type: kiểu update (false: Cộng thêm, true: thay thế)
	//Phương thức shopping : Quản lý giỏ hàng
	function shopping($id,$sl=1,$type=false)
	{
		if(!is_numeric($sl))$sl=0;//Tránh việc số lượng là chữ cái
		$sl= ceil(abs($sl));//Số âm, hoặc thập phân -> chuyển thành nguyên dương
		//Nếu session Cart chưa có thì khởi tạo
		if(!isset($_SESSION['cart']))$_SESSION['cart']=array();
		//Nếu id sản phẩm có trong giỏ hàng thì: sửa, xóa
		if(isset($_SESSION['cart'][$id]))
		{
			if($sl==0) unset($_SESSION['cart'][$id]);//Xóa sản phẩm khỏi giỏ hàng
			elseif($type) $_SESSION['cart'][$id]=$sl;//Sửa số lượng sản phẩm (thay thế số lượng mới)
			else $_SESSION['cart'][$id]=$_SESSION['cart'][$id]+$sl;//Sửa số lượng sản phẩm (cộng thêm số lượng)
		}elseif($sl>0) $_SESSION['cart'][$id]=$sl;//Thêm mới 1 sản phẩm vs số lượng của nó
	}

    function GetCat($parentid , $space = "", $trees = array()) {
        if (!$trees) {
            $trees = array();
        }
        $sql = "SELECT * FROM loaisp WHERE loaiCha = $parentid";
        $re=$this->pdo->query($sql);
        while ($row = $re->fetch(PDO::FETCH_ASSOC)) {
            $trees[] = array(
                'id' => $row['id'],
                'tenLoai' => $space . $row['tenLoai'],
            );
            $trees = $this->GetCat($row['id'], $space . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', $trees);
        }
        return $trees;
    }

    function GetCatCha($catid) {
        $sql = "SELECT * FROM loaisp WHERE id = $catid";
        $re=$this->pdo->query($sql);
		if($re->rowCount()>0) 
		{
			$r = $re->fetch(PDO::FETCH_ASSOC);
			return $r['tenLoai'];
		}
		else return '===>Không<===';
    }

	function  alias($text)
	{
		$text = html_entity_decode(trim($text), ENT_QUOTES, 'UTF-8');
		$text=str_replace(" ","-", $text);$text=str_replace("--","-", $text);
		$text=str_replace("@","-",$text);$text=str_replace("/","-",$text);
		$text=str_replace("\\","-",$text);$text=str_replace(":","",$text);
		$text=str_replace("\"","",$text);$text=str_replace("'","",$text);
		$text=str_replace("<","",$text);$text=str_replace(">","",$text);
		$text=str_replace(",","",$text);$text=str_replace("?","",$text);
		$text=str_replace(";","",$text);$text=str_replace(".","",$text);
		$text=str_replace("[","",$text);$text=str_replace("]","",$text);
		$text=str_replace("(","",$text);$text=str_replace(")","",$text);
		$text=str_replace("́","", $text);
		$text=str_replace("̀","", $text);
		$text=str_replace("̃","", $text);
		$text=str_replace("̣","", $text);
		$text=str_replace("̉","", $text);
		$text=str_replace("*","",$text);$text=str_replace("!","",$text);
		$text=str_replace("$","-",$text);$text=str_replace("&","-and-",$text);
		$text=str_replace("%","",$text);$text=str_replace("#","",$text);
		$text=str_replace("^","",$text);$text=str_replace("=","",$text);
		$text=str_replace("+","",$text);$text=str_replace("~","",$text);
		$text=str_replace("`","",$text);$text=str_replace("--","-",$text);
		$text = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $text);
		$text = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $text);
		$text = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $text);
		$text = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $text);
		$text = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $text);
		$text = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $text);
		$text = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $text);
		$text = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $text);
		$text = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $text);
		$text = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $text);
		$text = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $text);
		$text = preg_replace("/(đ)/", 'd', $text);
		$text = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $text);
		$text = preg_replace("/(đ)/", 'd', $text);
		$text = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $text);
		$text = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $text);
		$text = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $text);
		$text = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $text);
		$text = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $text);
		$text = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $text);
		$text = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $text);
		$text = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $text);
		$text = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $text);
		$text = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $text);
		$text = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $text);
		$text = preg_replace("/(Đ)/", 'D', $text);
		$text = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $text);
		$text = preg_replace("/(Đ)/", 'D', $text);
		$text=strtolower($text);
		return $text;
	}

	function login($user,$pass)
	{
		$sql = "select * from nhanvien where tenDN = ? and matKhau = ? ";
		$re=$this->pdo->prepare($sql);
		$re->execute(array($user,$pass));
		if($re->rowCount()>0) return $re->fetch(PDO::FETCH_ASSOC);
		else return false;
	}
	function khlogin($user,$pass)
	{
		$sql = "select * from khachhang where tenDN = ? and matKhau = ? ";
		$re=$this->pdo->prepare($sql);
		$re->execute(array($user,$pass));
		if($re->rowCount()>0) return $re->fetch(PDO::FETCH_ASSOC);
		else return false;
	}
	function sendmail()
	{
		require('class.phpmailer.php');
		// cấu hình đến smtp gmail
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Host='smtp.gmail.com';
		$mail->Port=465;
		$mail->SMTPAuth=true;
		$mail->Username='php0715e@gmail.com';
		$mail->Password='php0715ee123!@#';
		$mail->SMTPSecure='ssl';
		$mail->AddAddress('midi9x@gmail.com');
		$mail->FromName='MinhDinh';
		$mail->Subject='test';
		$mail->Body='noi dung';
		$mail->IsHtml(true);
		$mail->ChartSet='utf8';
		$mail->Send();
		return $mail->ErrorInfo;

	}
	//tong tien theo id don hang
	function tongtien($id)
	{
		$sqldata="SELECT SUM(donGia*ctdonhang.soLuong) as tongtien FROM ctdonhang,sanpham  WHERE ctdonhang.id_sp = sanpham.id AND ctdonhang.id_dh='$id'";
		$re=$this->pdo->query($sqldata);
		if($re->rowCount()>0) return $re->fetch(PDO::FETCH_ASSOC);
		else return false;
	}
	function tongtienhd($id)
	{
		$sqldata="SELECT SUM(donGia*cthoadon.soLuong) as tongtien FROM cthoadon,sanpham  WHERE cthoadon.id_sp = sanpham.id AND cthoadon.id_hd='$id'";
		$re=$this->pdo->query($sqldata);
		if($re->rowCount()>0) return $re->fetch(PDO::FETCH_ASSOC);
		else return false;
	}

}

