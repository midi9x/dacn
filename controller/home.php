<?php
$smarty->assign('title','Đồ gỗ nội thất');
//Chạy lệnh lấy về sản phẩm có type=1 (bán chạy)
$banchay=$model->selectall('sanpham',6,'');
$smarty->assign('banchay',$banchay);
//sp mới
$spmoi=$model->selectall('sanpham',6,'');
$smarty->assign('spmoi',$spmoi);
//sp tieu bieu
$tieubieu=$model->selectall('sanpham',8,'');
$smarty->assign('tieubieu',$tieubieu);
//sp giam gia
$giamgia=$model->selectall('sanpham',8,'');
$smarty->assign('giamgia',$giamgia);

?>