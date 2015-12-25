<?php 
$title='Quản lý nhân viên'; 
$link=$config['url'].'admin/index.php?controller=nhanvien';
//xoa
if($action=='xoa' && isset($_GET['id']))
{
	$model->delete('nhanvien',$_GET['id']);
	header('Location: '.$link);
}
//lấy page hiện tại để dùng cho viewpage class active
if(isset($_GET['page'])) $page=$_GET['page']; else $page=1;
$smarty->assign('page',$page);
//danhsach
$danhsach=$model->selectall('nhanvien',10);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('link',$link);
?>