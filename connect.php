<?php
require('libs/Smarty.class.php');
require('model/Model.php');
$smarty= new Smarty;//Khởi tạo Smarty
$smarty->configLoad('setting.dat');//Đọc file cấu hình 
$config=$smarty->getConfigVars();//Lấy ra mảng danh sách các biến cấu hình
$smarty->template_dir=$config['dirtemp'];//Khai báo đường dẫn chứa tầng View
//Khởi tạo đối tượng 
$model= new Model($config);//Khởi tạo đối tượng LIB và truyền vào mảng cấu hình
$smarty->assign('model',$model);//Truyền biến lib ra tầng View
?>