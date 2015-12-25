<?php /* Smarty version 3.1.27, created on 2015-12-20 20:04:08
         compiled from "C:\xampp\htdocs\dacn\templates\admin\sanpham.html" */ ?>
<?php
/*%%SmartyHeaderCode:20035676a7485e1a33_63883837%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34aeffd183b1b59a606c929cccd188b5138912d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dacn\\templates\\admin\\sanpham.html',
      1 => 1450616646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20035676a7485e1a33_63883837',
  'variables' => 
  array (
    'link' => 0,
    'config' => 0,
    'danhsach' => 0,
    'item' => 0,
    'page' => 0,
    'model' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5676a748656d58_56305629',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5676a748656d58_56305629')) {
function content_5676a748656d58_56305629 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20035676a7485e1a33_63883837';
?>
<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" method="post">
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
                        <i class="fa fa-list"></i> Danh sách sản phẩm
                    </li>
                </ol>
            </h3>
        </div>
    </div>

</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-6">
            <div class="input-group">
                <span class="input-group-addon " id="basic-addon1">Tìm kiếm sản phẩm</span>
                <input type="text" class="form-control" placeholder="Ví dụ: Giường ngủ" aria-describedby="basic-addon1" required/>
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="button"><i class="glyphicon glyphicon-search"></i>  Tìm</button>
                </span>
            </div>
        
    </div>
     <div class="col-lg-1">
            <div class="input-group">
                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=sanpham" class="btn btn-info" type="button"><i class="glyphicon glyphicon-off"></i>  Tất cả sản phẩm</a>
            </div>
        
    </div>
    <div class="col-lg-offset-1 col-lg-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=sanpham&action=them" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Thêm mới </a> 
            <button onclick="return confirm('Bạn có muốn xóa');" type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Xóa mục chọn</button>
        
    </div>
</div>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $('#selectall').click(function(event) { //on click
            if(this.checked) 
            { //Kiểm tra trạng thái đã chọn checkbox có id là selectall hay chưa
                $('.checkbox').each(function() { //lặp qua từng checkbox
                    this.checked = true; //chọn tất cả checkbox có class là: "checkbox"
                });
             }
            else
            {
                $('.checkbox').each(function() { //lặp qua từng checkbox
                    this.checked = false; //deselect all checkboxes with class "checkbox"
                });
            }
        });
    });
<?php echo '</script'; ?>
>
</br />
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Đơn giá</th>
                        <th>Số lượng còn</th>
                        <th>Ngày tạo</th>
                        <th>Trang thái</th>
                        <th><input type="checkbox" id="selectall" name="selectall" /></th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['tenSP'];?>
</td>
                        <td><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['hinhAnh'];?>
" width="46" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['tenSP'];?>
" class="img-circle" /></td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['donGia']);?>
 VND</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['soLuong'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['ngayTao'];?>
</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['trangThai'] == 1) {?>Hiển thị <?php } else { ?>Không hiển thị <?php }?></td>
                        <td><input type="checkbox" name="cbitem[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="checkbox" ></td>
                        <td colspan="2">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=sanpham&action=sua&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Sửa </a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=sanpham&action=xoa&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" onclick="return confirm('Bạn có muốn xóa');" type="button" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Xóa</a>
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
</div>    
</form><?php }
}
?>