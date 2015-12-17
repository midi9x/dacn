<?php
$title = "Khách hàng đăng nhập";
$smarty->assign('title',$title);
if(isset($_POST['tenDN'])  && isset($_POST['matKhau']))
{
	$tenDN = $_POST['tenDN'];
	$matKhau = md5($_POST['matKhau']);
	$kq=$model->khlogin($tenDN,$matKhau);
	if(is_array($kq)) {
		$_SESSION["khachhanglogin"]=$kq;
		echo '<script>window.history.back();window.history.back();</script>';
		//header('location: '.$config["url"]);
	}
	else $smarty->assign('error','Tên đăng nhập hoặc mật khẩu không chính xác');
}