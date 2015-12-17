<?php 
$title='Quản lý nhân viên'; 
$link=$config['url'].'admin/index.php?controller=khachhang';
//thêm
if(isset($_POST['btnThem']))
{
	unset($_POST['btnThem']);
	$_POST['matKhau']=md5($_POST['matKhau']);
	$model->insert('khachhang',$_POST,'');
	header('Location: '.$link);
}
//sua
if(isset($_GET['action'])) $action = $_GET['action'];
//hiện thông tin sản phẩm sửa
if($action =='sua' && isset($_GET['id']))
{
	$id=$_GET['id'];
	$sua = $model->selectone('khachhang'," id='$id'");
	$smarty->assign('sua',$sua);
}
if(isset($_POST['btnSua']))
{
	unset($_POST['btnSua']);
	$model->update('khachhang',$_POST,$_POST['id'],'../upload/');
	header('Location: '.$link);
}
//xoa
if($action=='xoa' && isset($_GET['id']))
{
	$model->delete('khachhang',$_GET['id']);
	header('Location: '.$link);
}
//xoa chon
if(isset($_POST['cbitem']) && is_array($_POST['cbitem']))
{
	foreach($_POST['cbitem'] as $id)
	$model->delete('khachhang',$id);
}
//lấy page hiện tại để dùng cho viewpage class active
if(isset($_GET['page'])) $page=$_GET['page']; else $page=1;
$smarty->assign('page',$page);
//danhsach
$danhsach=$model->selectall('khachhang',5);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('link',$link);
?>