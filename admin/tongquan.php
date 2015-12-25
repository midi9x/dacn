<?php
$danhsach=$model->selectall('donhang',5);
$smarty->assign('danhsach',$danhsach);

$danhsach2=$model->selectall('sanpham',5);
$smarty->assign('danhsach2',$danhsach2);
