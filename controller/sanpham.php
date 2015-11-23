<?php
$link=$config['url'].'index.php?controller=sanpham';
//Chạy lệnh lấy về sản phẩm 
//$where='status=1';
$where='';
if(isset($_GET['k']))
{
	$k=$_GET['k'];
	$where.=" AND (title LIKE '%$k%' OR xuatxu LIKE '%$k%' ) ";
	$link.="&k=$k";
}
if(isset($_GET['idcate']))
{
	$idcate=$_GET['idcate'];
	$mylist= $model->findid($idcate);
	$where.=" AND idcate IN ($mylist) ";
	$link.="&idcate=$idcate";
}
$danhsach=$model->selectall('sanpham',6,$where);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('link',$link);

?>