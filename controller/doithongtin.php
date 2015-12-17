<?php
$smarty->assign('title','Đổi thông tin ');
if(isset($_SESSION["khachhanglogin"])) 
{
	$khachhang = $_SESSION["khachhanglogin"];
	$smarty->assign('khachhang',$khachhang);
}

if(isset($_POST['btnDoiMK'])){
	$id=$khachhang['id'];
	$tk = $model->selectone('khachhang',"id = '$id'");
}

