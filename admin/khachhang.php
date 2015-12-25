<?php 
$title='Quản lý khách hàng'; 
$link=$config['url'].'admin/index.php?controller=khachhang';


if($action=='xoa' && isset($_GET['id']))
{
	$model->delete('khachhang',$_GET['id']);
	header('Location: '.$link);
}

//lấy page hiện tại để dùng cho viewpage class active
if(isset($_GET['page'])) $page=$_GET['page']; else $page=1;
$smarty->assign('page',$page);
//danhsach
$danhsach=$model->selectall('khachhang',5);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('link',$link);
?>