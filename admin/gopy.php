<?php 
$title='Quản lý góp ý'; 
$link=$config['url'].'admin/index.php?controller=gopy';

if(isset($_GET['action'])) $action = $_GET['action'];
//xoa
if($action=='xoa' && isset($_GET['id']))
{
	$model->delete('gopy',$_GET['id']);
	header('Location: '.$link);
}
//xoa chon
if(isset($_POST['cbitem']) && is_array($_POST['cbitem']))
{
	foreach($_POST['cbitem'] as $id)
	$model->delete('gopy',$id);
}
//lấy page hiện tại để dùng cho viewpage class active
if(isset($_GET['page'])) $page=$_GET['page']; else $page=1;
$smarty->assign('page',$page);
//danhsach
$danhsach=$model->selectall('gopy',5);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('link',$link);
?>