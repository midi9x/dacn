<?php
$title="Giỏ hàng";
if(!isset($_SESSION['cart']))$_SESSION['cart']=array();
if(isset($_GET['id'])&& is_numeric($_GET['id']) && $_GET['id']>0  )
{
	$id=$_GET['id'];
	if(!isset($_GET['sl'])) $sl=1;
	else $sl=$_GET['sl'];
	$model->shopping($id,$sl);//Gọi hàm thêm sản phẩm và giỏ hàng
	header('Location:'.$config['url'].'order.html');
}
if(count($_POST)>0)
{
	foreach($_POST as $key=>$val)
	{
		$id=str_replace('sl','',$key);//Lọc lấy ra id sản phẩm
		$model->shopping($id,$val,true);
	}
	header('Location:'.$config['url'].'order.html');
	
}
if(isset($_SESSION["khachhanglogin"])) 
{
	$khachhang = $_SESSION["khachhanglogin"];
	$smarty->assign('khachhang',$khachhang);
}
$smarty->assign('giohang',$_SESSION['cart']);
$danhsach=$model->selectall('sanpham',4,'');
$smarty->assign('danhsach',$danhsach);
$smarty->assign('title',$title);
