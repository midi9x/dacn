<?php
$link=$config['url'].'index.php?controller=loaisp';
$where='';

if(isset($_GET['cat']))
{
	$idcat=$_GET['cat'];
	$smarty->assign('idcat',$idcat);
	//title
	$cat = $model->selectone('loaisp',"id = '$idcat'");
    $title =  $cat['tenLoai'];
    $smarty->assign('title',$title);
	$list= $model->findid($idcat);
	$where.="id_loai IN ($list) ";
	$link.="&cat=$idcat";
}
if(isset($_GET['page'])) $page=$_GET['page']; else $page=1;
$smarty->assign('page',$page);
$danhsach=$model->selectall('sanpham',18,$where);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('link',$link);
?>