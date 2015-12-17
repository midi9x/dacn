<?php /* Smarty version 3.1.27, created on 2015-12-08 12:46:02
         compiled from "C:\xampp\htdocs\dacn\templates\admin\nhanvien.html" */ ?>
<?php
/*%%SmartyHeaderCode:883956666e9a143bd6_90801587%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20bed5bc1b618897ab809d1542881d8aee3b4fa6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dacn\\templates\\admin\\nhanvien.html',
      1 => 1447331742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '883956666e9a143bd6_90801587',
  'variables' => 
  array (
    'config' => 0,
    'danhsach' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56666e9a328249_16802429',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56666e9a328249_16802429')) {
function content_56666e9a328249_16802429 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '883956666e9a143bd6_90801587';
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
                        <i class="fa fa-users"></i> Quản lý nhân viên
                    </li>
                </ol>
            </h3>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="page-header">
            <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=nhanvien&action=them" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Thêm mới </a> 
            <button onclick="return confirm('Bạn có muốn xóa');" type="button" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Khóa mục chọn</button>
        </div>
    </div>

</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-9">
            <div class="input-group">
                <span class="input-group-addon " id="basic-addon1">Tìm kiếm nhân viên</span>
                <input type="text" class="form-control" placeholder="Ví dụ: Nguyễn Minh Định" aria-describedby="basic-addon1" >
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="button"><i class="glyphicon glyphicon-search"></i>  Tìm</button>
                </span>
            </div>
        
    </div>
     <div class="col-lg-3">
            <div class="input-group">
                <button class="btn btn-info" type="button"><i class="glyphicon glyphicon-off"></i>  Tất cả nhân viên</button>
            </div>
        
    </div>

</div>
</br />
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th><input type="checkbox" /></th>
                        <th>Tên nhân viên</th>
                        <th>Tên đăng nhập</th>
                        <th>Địa chỉ</th>
                        <th>Điện thoại</th>
                        <th>Email</th>
                        <th>Quyền</th>
                        <th>Tình trạng</th>
                        <th colspan="2">Thao tác</th>
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
                        <td><input type="checkbox" /></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['tenNV'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['tenDN'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['diaChi'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['dienThoai'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['quyen'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['tinhTrang'];?>
</td>
                        <td colspan="2">
                            <a href="#" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Sửa </a>
                            <a href="#" onclick="return confirm('Bạn có muốn xóa');" type="button" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Khóa</a>
                        </td>
                    </tr>

                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </tbody>
            </table>
        </div>
    </div>
</div>    <?php }
}
?>