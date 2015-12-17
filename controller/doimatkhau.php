<?php
$smarty->assign('title','Đổi mật khẩu');
if(isset($_SESSION["khachhanglogin"])) 
{
	$khachhang = $_SESSION["khachhanglogin"];
	$smarty->assign('khachhang',$khachhang);
}

if(isset($_POST['btnDoiMK'])){
	$id=$khachhang['id'];
	$tk = $model->selectone('khachhang',"id = '$id'");
	$mk = $tk['matKhau'];
	$nmkcu = $_POST['matKhaucu'];
	$matKhau = $_POST['matKhau'];
	$rematKhau = $_POST['rematKhau'];
	$nmkcu = md5($nmkcu);
	if($nmkcu != $mk ){
		echo "<script>alert('Mật khẩu cũ không chính xác')</script>";
	}
	else {
		if($matKhau !=$rematKhau){
			echo "<script>alert('Mật khẩu mới không trùng khớp')</script>";
		}else{
			
			if($nmkcu == $mk && $matKhau ==$rematKhau){
				// code doi mk
				unset($_POST['matKhaucu']);
				unset($_POST['rematKhau']);
				unset($_POST['btnDoiMK']);
				$_POST['matKhau'] =md5($_POST['matKhau']);
				$model->update('khachhang',$_POST,$id);
				echo "<script>alert('Đổi mật khẩu thành công')</script>";
				echo "
				<script type=\"text/javascript\">
				  window.location.href='taikhoan.html';
				</script>
				";
				//echo "<script>window.location.href=</script>";
				//header('location: );
			}
		}

	}
}

