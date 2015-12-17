<?php /* Smarty version 3.1.27, created on 2015-12-09 21:46:46
         compiled from "C:\xampp\htdocs\dacn\templates\admin\hoadon.html" */ ?>
<?php
/*%%SmartyHeaderCode:3218856683ed645c9b4_27885579%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb69d3bc8dc0588589eb3dc47ff8ec6ad3dc84c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dacn\\templates\\admin\\hoadon.html',
      1 => 1449672405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3218856683ed645c9b4_27885579',
  'variables' => 
  array (
    'config' => 0,
    'danhsach' => 0,
    'hd' => 0,
    'model' => 0,
    'nv' => 0,
    'tt' => 0,
    'link' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56683ed64e5554_92977015',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56683ed64e5554_92977015')) {
function content_56683ed64e5554_92977015 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3218856683ed645c9b4_27885579';
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
                        <i class="fa fa-shopping-cart"></i> Quản lý hóa đơn
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
                    <option selected>Số hóa đơn</option>
                    <option>Số đơn hàng</option>
                    <option>Ngày lập</option>
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
                        <th>Người xác nhận</th>
                        <th>Ngày lập</th>
                        <th>Số đơn hàng</th>
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
$_smarty_tpl->tpl_vars['hd'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['hd']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['hd']->value) {
$_smarty_tpl->tpl_vars['hd']->_loop = true;
$foreach_hd_Sav = $_smarty_tpl->tpl_vars['hd'];
?>
                    <tr style="height:60px;">
                        <td>#<?php echo $_smarty_tpl->tpl_vars['hd']->value['id'];?>
</td>
                        <td>
                        <?php if ($_smarty_tpl->tpl_vars['hd']->value['id_nv'] == 0) {?>
                         NULL
                        <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars['id_nv'] = new Smarty_Variable($_smarty_tpl->tpl_vars['hd']->value['id_nv'], null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['nv'] = new Smarty_Variable($_smarty_tpl->tpl_vars['model']->value->selectone('nhanvien'," id= '".((string)$_smarty_tpl->tpl_vars['id_nv']->value)."'"), null, 0);?>
                        <?php echo $_smarty_tpl->tpl_vars['nv']->value['tenNV'];?>

                        <?php }?>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['hd']->value['ngayLap'];?>
</td>
                        <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=ctdonhang&id=<?php echo $_smarty_tpl->tpl_vars['hd']->value['id_dh'];?>
">
                        #<?php echo $_smarty_tpl->tpl_vars['hd']->value['id_dh'];?>

                        </a>
                        
                        </td>
                        <td>
                            <?php $_smarty_tpl->tpl_vars['tt'] = new Smarty_Variable($_smarty_tpl->tpl_vars['model']->value->tongtienhd($_smarty_tpl->tpl_vars['hd']->value['id']), null, 0);?>
                            <?php echo number_format($_smarty_tpl->tpl_vars['tt']->value['tongtien']);?>
 VND
                        </td>
                        <td><?php if ($_smarty_tpl->tpl_vars['hd']->value['tinhTrang'] == 1) {?>Hoàn thành<?php } else { ?> Đang xử lý <?php }?></td>
                        <td colspan="2">
                             <a <?php if ($_smarty_tpl->tpl_vars['hd']->value['tinhTrang'] == 1) {?>style="pointer-events: none; cursor: default;"<?php }?> 
                             href="index.php?controller=hoadon&action=xacnhan&id=<?php echo $_smarty_tpl->tpl_vars['hd']->value['id'];?>
" 
                             onclick="return confirm('Xác nhận đã xử lý đơn hàng?');" 
                             <?php if ($_smarty_tpl->tpl_vars['hd']->value['tinhTrang'] == 1) {?>  class="btn btn-success" 
                             <?php } else { ?>
                                class="btn btn-warning" 
                             <?php }?>
                             
                             >
                             <?php if ($_smarty_tpl->tpl_vars['hd']->value['tinhTrang'] == 1) {?>  <i class="glyphicon glyphicon-ok"></i> 
                             <?php } else { ?>
                                <i class="glyphicon glyphicon-pencil"></i> 
                             <?php }?>
                             Xác nhận</a>
                            <a 
                            <?php if ($_smarty_tpl->tpl_vars['hd']->value['tinhTrang'] == 1) {?>style="pointer-events: none; cursor: default;"<?php }?> 
                            href="index.php?controller=hoadon&action=huy&id=<?php echo $_smarty_tpl->tpl_vars['hd']->value['id'];?>
" onclick="return confirm('Bạn có chắc chắn muốn hủy đơn hàng?');"  class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Hủy</a>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['hd'] = $foreach_hd_Sav;
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