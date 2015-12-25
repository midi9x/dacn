<?php /* Smarty version 3.1.27, created on 2015-12-20 12:13:54
         compiled from "C:\xampp\htdocs\dacn\templates\admin\xoasanpham.html" */ ?>
<?php
/*%%SmartyHeaderCode:2886956763912692858_39647366%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd351cb35153ef431cd37f3224ec3f9e23fb5a8a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dacn\\templates\\admin\\xoasanpham.html',
      1 => 1446735729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2886956763912692858_39647366',
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567639126ffe65_26157823',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567639126ffe65_26157823')) {
function content_567639126ffe65_26157823 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2886956763912692858_39647366';
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
                        <i class="fa fa-users"></i> Quản lý khách hàng
                    </li>
                </ol>
            </h3>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="page-header">
            <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=sanpham&action=them" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Thêm mới </a> 
            <button onclick="return confirm('Bạn có muốn xóa');" type="button" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Khóa mục chọn</button>
        </div>
    </div>

</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-9">
            <div class="input-group">
                <span class="input-group-addon " id="basic-addon1">Tìm kiếm khách hàng</span>
                <input type="text" class="form-control" placeholder="Ví dụ: Nguyễn Minh Định" aria-describedby="basic-addon1" >
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="button"><i class="glyphicon glyphicon-search"></i>  Tìm</button>
                </span>
            </div>
        
    </div>
     <div class="col-lg-3">
            <div class="input-group">
                <button class="btn btn-info" type="button"><i class="glyphicon glyphicon-off"></i>  Tất cả khách hàng</button>
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
                        <th>Tên khách hàng</th>
                        <th>Tên đăng nhập</th>
                        <th>Địa chỉ</th>
                        <th>Điện thoại</th>
                        <th>Email</th>
                        <th>Phân loại</th>
                        <th>Tình trạng</th>
                        <th colspan="2">Thao tác</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Tên khách hàng</td>
                        <td>Tên đăng nhập</td>
                        <td>Địa chỉ</td>
                        <td>Điện thoại</td>
                        <td>Email</td>
                        <td>Phân loại</td>
                        <td>Tình trạng</td>
                        <td colspan="2">
                            <a href="#" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Sửa </a>
                            <button onclick="return confirm('Bạn có muốn xóa');" type="button" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Khóa</button>
                        </td>
                    </tr>

                    
                </tbody>
            </table>
        </div>
    </div>
</div>    <?php }
}
?>