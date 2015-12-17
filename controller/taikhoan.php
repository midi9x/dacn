<?php
$smarty->assign('title','Tài khoản khách hàng');
if(isset($_SESSION["khachhanglogin"])) 
{
	$khachhang = $_SESSION["khachhanglogin"];
	$smarty->assign('khachhang',$khachhang);
	$idkh = $khachhang['id'];
	$donhang = $model->selectall('donhang',5,"id_kh = '$idkh' ");
	$smarty->assign('donhang',$donhang);
}
