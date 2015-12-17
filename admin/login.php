<?php
if(isset($_POST['tenDN'])  && isset($_POST['matKhau']))
{
	$tenDN = $_POST['tenDN'];
	$matKhau = md5($_POST['matKhau']);
	$kq=$model->login($tenDN,$matKhau);
	if(is_array($kq)) {
		$_SESSION["adminlogin"]=$kq;
		header('location: '.$config["url"].'admin');
	}
	else $smarty->assign('error','Tên đăng nhập hoặc mật khẩu không chính xác');
}