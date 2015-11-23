<?php 
$title='Quản lý sản phẩm'; 
$link=$config['url'].'admin/index.php?controller=sanpham';
//thêm
if(isset($_POST['btnThem']))
{
	unset($_POST['btnThem']);
	$_POST['ngayTao']=date('Y-m-d H:i:s');
	$model->insert('sanpham',$_POST,'../upload/');
	header('Location: '.$link);
}
//sua
if(isset($_GET['action'])) $action = $_GET['action'];
//hiện thông tin sản phẩm sửa
if($action =='sua' && isset($_GET['id']))
{
	$id=$_GET['id'];
	$sua = $model->selectone('sanpham'," id='$id'");
	$smarty->assign('sua',$sua);
}
if(isset($_POST['btnSua']))
{
	unset($_POST['btnSua']);
	$model->update('sanpham',$_POST,$_POST['id'],'../upload/');
	header('Location: '.$link);
}
//xoa
if($action=='xoa' && isset($_GET['id']))
{
	$model->delete('sanpham',$_GET['id']);
	header('Location: '.$link);
}
//xoa chon
if(isset($_POST['cbitem']) && is_array($_POST['cbitem']))
{
	foreach($_POST['cbitem'] as $id)
	$model->delete('sanpham',$id);
}
//lấy page hiện tại để dùng cho viewpage class active
if(isset($_GET['page'])) $page=$_GET['page']; else $page=1;
$smarty->assign('page',$page);
//danhsach
$danhsach=$model->selectall('sanpham',10);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('link',$link);
?>