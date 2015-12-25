<?php 
$title='Quản lý hóa đơn'; 
$link=$config['url'].'admin/index.php?controller=hoadon';

if(isset($_GET['action'])) $action = $_GET['action'];
//xac nhạn
if($action =='xacnhan' && isset($_GET['id']))
{
	$id=$_GET['id'];
	$_POST['tinhTrang']=1;
	$nhanvien  = $_SESSION["adminlogin"];
	$_POST['id_nv']=$nhanvien['id'];
	$sua = $model->update('hoadon',$_POST,$id);
	header('Location: '.$link);
}

//xoa
if($action=='huy' && isset($_GET['id']))
{
	$model->delete('hoadon',$_GET['id']);
	header('Location: '.$link);
}

//lấy page hiện tại để dùng cho viewpage class active
if(isset($_GET['page'])) $page=$_GET['page']; else $page=1;
$smarty->assign('page',$page);
//danhsach
$danhsach=$model->selectall('hoadon',10);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('link',$link);
?>