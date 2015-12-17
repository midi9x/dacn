<?php
$link=$config['url'].'index.php?controller=timkiem';

//Chạy lệnh lấy về sản phẩm 
$where='';
$key='';
if(isset($_GET['key']))
{
	$key=$_GET['key'];
	$where.=" tenSP LIKE '%$key%' ";
	$link.="&key=$key";
}
if(isset($_GET['idcat']) && $_GET['idcat']>0)
{
	$idcat=$_GET['idcat'];
	$list= $model->findid($idcat);
	$where.=" AND id_loai IN ($list) ";
	$link.="&idcat=$idcat";
}
if(isset($_GET['page'])) $page=$_GET['page']; else $page=1;
$smarty->assign('page',$page);
$smarty->assign('title','Tìm kiếm: '.$key);
$smarty->assign('key',$key);
$danhsach=$model->selectall('sanpham',6,$where);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('link',$link);

?>