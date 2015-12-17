<?php
$smarty->assign('title','Chi tiết đơn đặt hàng');
if(isset($_SESSION["khachhanglogin"])) 
{
	$khachhang = $_SESSION["khachhanglogin"];
	$smarty->assign('khachhang',$khachhang);
	//$idkh = $khachhang['id'];
	$iddh = $_GET['id'];
	//don hang
	$donhang = $model->selectone('donhang',"id = '$iddh'");
	$smarty->assign('donhang',$donhang);
	// ct don hang
	$ctdh = $model->selectall('ctdonhang',0,"id_dh = '$iddh'");
	$smarty->assign('ctdh',$ctdh);
	

}
