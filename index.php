<?php
session_start();
require('connect.php');
//lấy danh sách sản phẩm tiêu biểu
$tieubieu=$model->selectall('sanpham',7,'',true);
$smarty->assign('tieubieu',$tieubieu);
//Lấy biến controller trên URL (nếu có)
if(isset($_GET['controller']))$controller=$_GET['controller']; else $controller='home';
//Kiểm tra sự tồn tại của file có tên trùng với giá trị  của biến $prog
if(file_exists('controller/'.$controller.'.php'))
{
	require('controller/'.$controller.'.php');
	$smarty->assign('temp',$controller.'.html');
}

$smarty->assign('config',$config);//Truyền biến config ra tầng View
$smarty->display('index.html');
?>