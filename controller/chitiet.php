<?php

//Lấy ID của sản phẩm trên URL
if(isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id']>0)
{
	$id=$_GET['id'];
	$chitiet=$model->selectone('sanpham'," id='$id'");
	$title=$chitiet['tenSP'];
	$smarty->assign('chitiet',$chitiet);
	$smarty->assign('title',$title);	
	//get mo ta để lấy hình ảnh
	$mota=$chitiet['moTa'];
	$hinhanh = array();
	preg_match_all('!http://[a-z0-9\-\.\/]+\.(?:jpe?g|png|gif)!Ui' , $mota , $hinhanh);
	$smarty->assign('hinhanh',$hinhanh);	
}
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$smarty->assign('url',$url);
$spmoi=$model->selectall('sanpham',6,'');
$smarty->assign('spmoi',$spmoi);
?>