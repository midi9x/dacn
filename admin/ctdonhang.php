<?php 
$title='Chi tiết đơn hàng'; 
$link=$config['url'].'admin/index.php?controller=ctdonhang';
//danhsach
$id=$_GET['id'];
$danhsach=$model->selectall('ctdonhang',0," id_dh ='$id'");
$smarty->assign('danhsach',$danhsach);
$smarty->assign('id',$id);
$smarty->assign('link',$link);
