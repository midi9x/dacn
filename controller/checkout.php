<?php
if(isset($_POST['btncheckout'])){
	unset($_POST['btncheckout']);
	//unset tong tiền vì ko có trong database nhưng gán = $ để hiển thị
	$tongtien = $_POST['tongtien'];
	unset($_POST['tongtien']);
	$ghichu = $_POST['ghiChu'];
	unset($_POST['ghiChu']);
	if(isset($_POST['tenDN'])){
		//đăng ký tk
		$_POST['tenKH'] = $_POST['hoTen'];
		unset($_POST['rematKhau']);
		unset($_POST['hoTen']);
		$_POST['matKhau'] = md5($_POST['matKhau']);
		$idkh = $model->insert('khachhang',$_POST);
		$_SESSION["khachhanglogin"] = $model->selectone('khachhang'," id='$idkh'");
		unset($_POST['tenDN']);
		unset($_POST['matKhau']);
		$_POST['hoTen'] = $_POST['tenKH'];
		unset($_POST['tenKH']);
		unset($_POST['ngaySinh']);
		unset($_POST['gioiTinh']);
	}
	$khachhang=$_SESSION["khachhanglogin"];
	$_POST['id_kh']=$khachhang['id'];
	$_POST['ngayDat']=date('Y-m-d H:i:s');
	$_POST['ghiChu'] = $ghichu ;
	$iddh=$model->insert('donhang',$_POST);
	//Sử dụng vòng lặp giỏ hàng để lấy ra các sản phẩm và só lượng đặt mua
	if($iddh>0)
	{
		$hoadon ['id_dh'] = $iddh;
		$hoadon ['ngayLap']  =  date('Y-m-d H:i:s');
		$idhoadon = $model->insert('hoadon',$hoadon);
		foreach($_SESSION['cart'] as $id=>$sl)
		{
			$detail=$model->selectone('sanpham'," id=$id");//Lấy thông tin sản phẩm
			//Xây dựng mảng dữ liệu để lưu vào bảng chi tiết hóa đơn
			$add['id_sp']=$id;
			$add['id_dh']=$iddh;
			$add['soLuong']=$sl;
			//$add['giaban']=$detail['price'];
			$hd['id_sp']=$id;
			$hd['id_hd']=$idhoadon;
			$hd['soLuong']=$sl;
			$model->insert('ctdonhang',$add);//Chạy lệnh lưu dữ liệu vào bảng chi tiết đơn hàng
			$model->insert('cthoadon',$hd);//Chạy lệnh lưu dữ liệu vào bảng chi tiết hóa đơn
		}

		$_SESSION['cartold'] = $_SESSION['cart'];
		unset($_SESSION['cart']);
		$_POST['id']=$iddh;
		$smarty->assign('tongtien',$tongtien);
		$smarty->assign('chitiet',$_POST);
		$smarty->assign('cartold',$_SESSION['cartold']);
		$smarty->assign('khachhang',$khachhang);
		
	}
}

?>