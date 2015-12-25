<?php /* Smarty version 3.1.27, created on 2015-12-20 20:01:11
         compiled from "C:\xampp\htdocs\dacn\templates\admin\tongquan.html" */ ?>
<?php
/*%%SmartyHeaderCode:280985676a697bc1264_24224845%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0657676c3c64a40e162c954ea556526919c263a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dacn\\templates\\admin\\tongquan.html',
      1 => 1450616470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280985676a697bc1264_24224845',
  'variables' => 
  array (
    'config' => 0,
    'danhsach2' => 0,
    'item' => 0,
    'danhsach' => 0,
    'dh' => 0,
    'model' => 0,
    'tt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5676a697c49e06_60510323',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5676a697c49e06_60510323')) {
function content_5676a697c49e06_60510323 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '280985676a697bc1264_24224845';
?>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-dashboard"></i> Tổng quan
                </li>
            </ol>
        </h3>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="fa fa-info-circle"></i>   
            Chào mừng bạn đến với trang quản trị. Trước tiên hãy <strong><u><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=cauhinh">thiết lập cấu hình</u></a></strong> cho website.
            
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">26</div>
                        <div>Góp ý mới!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=gopy">Xem chi tiết</a></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">124</div>
                        <div>Đơn hàng mới!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=donhang">Xem chi tiết</a></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">1300</div>
                        <div>Sản phẩm</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Xem chi tiết</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-file fa-fw"></i>Sản phẩm mới</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Đơn giá</th>
                                <th>Trang thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->tpl_vars['danhsach2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                            <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['tenSP'];?>
</td>
                                <td><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['hinhAnh'];?>
" width="46" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['tenSP'];?>
" class="img-circle" /></td>
                                <td><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['donGia']);?>
 VND</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['item']->value['trangThai'] == 1) {?>Hiển thị <?php } else { ?>Không hiển thị <?php }?></td>
                            </tr>
                            <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>      
                   
                        </tbody>
                    </table>
                </div>
                 <div class="text-right">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=sanpham">Xem tất cả sản phẩm <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-shopping-cart fa-fw"></i> Đơn đặt hàng gần nhất</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên KH</th>
                                <th>Ngày đặt</th>
                                <th>Tổng tiền</th>
                                <th>Tình trạng</th>
                            </tr>
                        </thead>
                        <tbody>
                         <?php
$_from = $_smarty_tpl->tpl_vars['danhsach']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['dh'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['dh']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dh']->value) {
$_smarty_tpl->tpl_vars['dh']->_loop = true;
$foreach_dh_Sav = $_smarty_tpl->tpl_vars['dh'];
?>
                         <tr style="height:60px;">
                            <td><a href="index.php?controller=ctdonhang&id=<?php echo $_smarty_tpl->tpl_vars['dh']->value['id'];?>
">#<?php echo $_smarty_tpl->tpl_vars['dh']->value['id'];?>
</a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['dh']->value['hoTen'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['dh']->value['ngayDat'];?>
</td>
                            <td><?php $_smarty_tpl->tpl_vars['tt'] = new Smarty_Variable($_smarty_tpl->tpl_vars['model']->value->tongtien($_smarty_tpl->tpl_vars['dh']->value['id']), null, 0);?>
                                <?php echo number_format($_smarty_tpl->tpl_vars['tt']->value['tongtien']);?>

                            </td>
                            <td><?php if ($_smarty_tpl->tpl_vars['dh']->value['tinhTrang'] == 1) {?>Đã xử lý<?php } else { ?> Chưa xử lý <?php }?></td>
                       </tr>
                       <?php
$_smarty_tpl->tpl_vars['dh'] = $foreach_dh_Sav;
}
?>
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=donhang">Xem tất cả đơn đặt hàng <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row --><?php }
}
?>