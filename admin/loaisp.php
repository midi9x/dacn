<?php 
$title='Quản lý loại sản phẩm'; 
$link=$config['url'].'admin/index.php?controller=loaisp';
//thêm
if(isset($_POST['btnThem']))
{
	unset($_POST['btnThem']);
	$model->insert('loaisp',$_POST);
	header('Location: '.$link);
}
//sua
// if(isset($_GET['action'])) $action = $_GET['action'];
// //hiện thông tin sản phẩm sửa
// if($action =='sua' && isset($_GET['id']))
// {
// 	$id=$_GET['id'];
// 	$sua = $model->selectone('loaisp'," id='$id'");
// 	$smarty->assign('sua',$sua);
// }

if(isset($_POST['btnSua']))
{
	unset($_POST['btnSua']);
	$model->update('loaisp',$_POST,$_POST['id'],'');
	header('Location: '.$link);
}
//xoa
if($action=='xoa' && isset($_GET['id']))
{
	$model->delete('loaisp',$_GET['id']);
	header('Location: '.$link);
}
//xoa chon
if(isset($_POST['btnXoachon']) && isset ($_POST['cbitem']) && is_array($_POST['cbitem']))
{
	foreach($_POST['cbitem'] as $id)
	$model->delete('loaisp',$id);
}
//lấy page hiện tại để dùng cho viewpage class active
if(isset($_GET['page'])) $page=$_GET['page']; else $page=1;
$smarty->assign('page',$page);
//danhsach
$danhsach=$model->selectall('loaisp',4);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('link',$link);
?>