<?php /* Smarty version 3.1.27, created on 2015-12-11 19:39:27
         compiled from "C:\xampp\htdocs\dacn\templates\admin\gopy.html" */ ?>
<?php
/*%%SmartyHeaderCode:29318566ac3ff4437d1_83324860%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82b330e9131440beec6c87d5b88f0626f387a032' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dacn\\templates\\admin\\gopy.html',
      1 => 1449837566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29318566ac3ff4437d1_83324860',
  'variables' => 
  array (
    'config' => 0,
    'danhsach' => 0,
    'item' => 0,
    'model' => 0,
    'kh' => 0,
    'link' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566ac3ff4d7ef9_02774869',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566ac3ff4d7ef9_02774869')) {
function content_566ac3ff4d7ef9_02774869 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29318566ac3ff4437d1_83324860';
?>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h3>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php">Home</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-fw fa-reply"></i> Quản lý góp ý
                    </li>
                </ol>
            </h3>
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
                        <th>#</th>
                        <th>Họ tên khách hàng</th>
                        <th width="150">Địa chỉ</th>
                        <th>Điện thoại</th>
                        <th>Email</th>
                        <th>Ngày góp ý</th>
                        <th colspan="3" width="500">Nội dụng</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['danhsach']->value;
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
                        <td>
                        <?php $_smarty_tpl->tpl_vars['idkh'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['id_kh'], null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['kh'] = new Smarty_Variable($_smarty_tpl->tpl_vars['model']->value->selectone('khachhang',"id='".((string)$_smarty_tpl->tpl_vars['idkh']->value)."'"), null, 0);?>
                        <?php echo $_smarty_tpl->tpl_vars['kh']->value['tenKH'];?>

                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kh']->value['diaChi'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kh']->value['dienThoai'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['kh']->value['email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ngayGopY'];?>
</td>
                        <td colspan="3">
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['noiDung'];?>

                        </td>
                        <td> <a href="index.php?controller=gopy&action=xoa&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" onclick="return confirm('Bạn có muốn xóa');" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Xóa</a>
                        </td>
                    </tr>
                    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </tbody>
            </table>
            <center> <?php echo $_smarty_tpl->tpl_vars['model']->value->viewpage($_smarty_tpl->tpl_vars['link']->value,$_smarty_tpl->tpl_vars['page']->value);?>
</center>
        </div>
    </div>
</div>    <?php }
}
?>