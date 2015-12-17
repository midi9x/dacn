<?php

	require 'connect.php';
	//Lấy dữ liệu biến controller trên URL xuống
	if(isset($_GET['controller']))
			$controller=$_GET['controller']; 
	else 	$controller='tongquan';
	//login 
	if(!isset($_SESSION["adminlogin"])) $controller = 'login';
	else 
	{
		$adminlogin=$_SESSION["adminlogin"];
		$smarty->assign('adminlogin',$adminlogin);
	}

	//Lấy dữ liệu biến action trên URL xuống
	if(isset($_GET['action']))
			$action=$_GET['action']; 
		else $action='';
	//include controller
	if(file_exists($controller.'.php'))	require($controller.'.php');
	//view
	$inc = $action.$controller;
	$smarty->assign('model',$model);
	$smarty->assign('controller',$controller);
	$smarty->assign('inc',$inc);
	$smarty->assign('title',$title);
	$smarty->assign('config',$config);//Khai báo biến config cho tầng View
	//Gọi tầng View 
	if($controller=='login')
	{
			$smarty->display('login.html');
	}
	else	$smarty->display('index.html');
?>