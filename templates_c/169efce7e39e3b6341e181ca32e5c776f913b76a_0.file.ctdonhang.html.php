<?php /* Smarty version 3.1.27, created on 2015-12-09 21:22:47
         compiled from "C:\xampp\htdocs\dacn\templates\admin\ctdonhang.html" */ ?>
<?php
/*%%SmartyHeaderCode:27758566839379b2ad8_52103549%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '169efce7e39e3b6341e181ca32e5c776f913b76a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dacn\\templates\\admin\\ctdonhang.html',
      1 => 1449670967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27758566839379b2ad8_52103549',
  'variables' => 
  array (
    'config' => 0,
    'id' => 0,
    'danhsach' => 0,
    'ct' => 0,
    'model' => 0,
    'sp' => 0,
    'tien' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56683937a200f7_14555851',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56683937a200f7_14555851')) {
function content_56683937a200f7_14555851 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27758566839379b2ad8_52103549';
?>
<div class="row">
    <div class="col-lg-8">
        <div class="page-header">
            <h3>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php">Home</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-shopping-cart"></i> Chi tiết đơn hàng #<?php echo $_smarty_tpl->tpl_vars['id']->value;?>

                    </li>
                </ol>
            </h3>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="page-header" style="padding-top: 7px;">
             <a class="btn btn-info" href="index.php?controller=donhang"><i class="glyphicon glyphicon-off"></i>  Quay lại</a>
        </div>

    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        
                        <th>Mã SP</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>

                <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['danhsach']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ct'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ct']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->value) {
$_smarty_tpl->tpl_vars['ct']->_loop = true;
$foreach_ct_Sav = $_smarty_tpl->tpl_vars['ct'];
?>
                <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable($_smarty_tpl->tpl_vars['ct']->value['id_sp'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable($_smarty_tpl->tpl_vars['model']->value->selectone('sanpham'," id = '".((string)$_smarty_tpl->tpl_vars['id']->value)."'"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['tien'] = new Smarty_Variable($_smarty_tpl->tpl_vars['sp']->value['donGia']*$_smarty_tpl->tpl_vars['ct']->value['soLuong'], null, 0);?>
                    <tr style="height:60px;">
                        <td><a>#<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['tenSP'];?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['donGia']);?>
 VND</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['ct']->value['soLuong'];?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['tien']->value);?>
 VND</td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['ct'] = $foreach_ct_Sav;
}
?>
                </tbody>
            </table>
        </div>
    </div>
</div>    <?php }
}
?>