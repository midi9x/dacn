<?php
	date_default_timezone_set('Asia/Saigon');
	$title='Trang quản trị';
	//Nhúng thư viện smarty
	include('../libs/Smarty.class.php');
	include('../model/Model.php');
	$smarty= new Smarty;
	//Cấu hình lại đường dẫn đến thư mục templates,templates_c
	$smarty->template_dir='../templates/admin/';//Trỏ lại đường dẫn templates
	$smarty->compile_dir='../templates_c/';//Trỏ lại dường dẫn templates_c
	$smarty->config_dir='../configs/';//Trỏ lại đường dẫn configs
	//Đọc nội dung file cấu hình
	$smarty->configLoad('setting.dat');
	$config=$smarty->getConfigVars();//Lệnh lấy ra các biến trong file cấu hình
	//Khởi tạo đối tượng Model và truyền vào mảng cấu hình
	$model= new Model($config);
	//Lấy dữ liệu biến controller trên URL xuống
	if(isset($_GET['controller']))
			$controller=$_GET['controller']; 
	else 	$controller='tongquan';
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