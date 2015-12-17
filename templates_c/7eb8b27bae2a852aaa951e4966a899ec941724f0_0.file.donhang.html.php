<?php /* Smarty version 3.1.27, created on 2015-12-09 21:43:58
         compiled from "C:\xampp\htdocs\dacn\templates\admin\donhang.html" */ ?>
<?php
/*%%SmartyHeaderCode:1729556683e2ea3a380_35737248%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eb8b27bae2a852aaa951e4966a899ec941724f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dacn\\templates\\admin\\donhang.html',
      1 => 1449671693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1729556683e2ea3a380_35737248',
  'variables' => 
  array (
    'config' => 0,
    'danhsach' => 0,
    'dh' => 0,
    'model' => 0,
    'tt' => 0,
    'link' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56683e2eabb224_78674902',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56683e2eabb224_78674902')) {
function content_56683e2eabb224_78674902 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1729556683e2ea3a380_35737248';
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
                        <i class="fa fa-shopping-cart"></i> Quản lý đơn hàng
                    </li>
                </ol>
            </h3>
        </div>
        
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <form class="form-inline">
            <div class="form-group">
            <label>Tìm kiếm theo </label>
                <select class="form-control">
                    <option selected>Số đơn hàng</option>
                    <option>Tên khách hàng</option>
                    <option>Ngày đặt</option>
                </select>
                <input type="text" class="form-control" placeholder="Nhập từ khóa" size="60" >
            </div>
            <button class="btn btn-primary" type="button"><i class="glyphicon glyphicon-search"></i>  Tìm</button>
            <button class="btn btn-info" type="button"><i class="glyphicon glyphicon-off"></i>  Tất cả đơn hàng</button>
        </form>

    </div>
</div>
</br />
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        
                        <th>#</th>
                        <th>Tên khách hàng</th>
                        <th>Ngày đặt</th>
                        <th>Địa chỉ</th>
                        <th>Điện thoại</th>
                        <th>Tổng tiền</th>
                        <th>Tình trạng</th>
                        <th style="width:200px;">Thao tác</th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['dh']->value['diaChi'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dh']->value['dienThoai'];?>
</td>
                        <td><?php $_smarty_tpl->tpl_vars['tt'] = new Smarty_Variable($_smarty_tpl->tpl_vars['model']->value->tongtien($_smarty_tpl->tpl_vars['dh']->value['id']), null, 0);?>
                            <?php echo number_format($_smarty_tpl->tpl_vars['tt']->value['tongtien']);?>

                        </td>
                        <td><?php if ($_smarty_tpl->tpl_vars['dh']->value['tinhTrang'] == 1) {?>Đã xử lý<?php } else { ?> Chưa xử lý <?php }?></td>
                        <td colspan="2">
                             <a <?php if ($_smarty_tpl->tpl_vars['dh']->value['tinhTrang'] == 1) {?>style="pointer-events: none; cursor: default;"<?php }?> 
                             href="index.php?controller=donhang&action=xacnhan&id=<?php echo $_smarty_tpl->tpl_vars['dh']->value['id'];?>
" 
                             onclick="return confirm('Xác nhận đã xử lý đơn hàng?');" 
                             <?php if ($_smarty_tpl->tpl_vars['dh']->value['tinhTrang'] == 1) {?>  class="btn btn-success" 
                             <?php } else { ?>
                                class="btn btn-warning" 
                             <?php }?>
                             
                             >
                             <?php if ($_smarty_tpl->tpl_vars['dh']->value['tinhTrang'] == 1) {?>  <i class="glyphicon glyphicon-ok"></i> 
                             <?php } else { ?>
                                <i class="glyphicon glyphicon-pencil"></i> 
                             <?php }?>
                             Xác nhận</a>
                            <a 
                            <?php if ($_smarty_tpl->tpl_vars['dh']->value['tinhTrang'] == 1) {?>style="pointer-events: none; cursor: default;"<?php }?> 
                            href="index.php?controller=donhang&action=huy&id=<?php echo $_smarty_tpl->tpl_vars['dh']->value['id'];?>
" onclick="return confirm('Bạn có chắc chắn muốn hủy đơn hàng?');"  class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Hủy</a>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['dh'] = $foreach_dh_Sav;
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