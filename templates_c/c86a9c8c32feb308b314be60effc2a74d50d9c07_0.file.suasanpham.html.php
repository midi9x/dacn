<?php /* Smarty version 3.1.27, created on 2015-11-22 14:29:59
         compiled from "C:\xampp\htdocs\dacn\templates\admin\suasanpham.html" */ ?>
<?php
/*%%SmartyHeaderCode:2594956516ef76c85f4_22312157%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c86a9c8c32feb308b314be60effc2a74d50d9c07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dacn\\templates\\admin\\suasanpham.html',
      1 => 1447168411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2594956516ef76c85f4_22312157',
  'variables' => 
  array (
    'config' => 0,
    'link' => 0,
    'sua' => 0,
    'model' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56516ef7741784_64218991',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56516ef7741784_64218991')) {
function content_56516ef7741784_64218991 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2594956516ef76c85f4_22312157';
?>
<div class="row">
    <div class="col-lg-12">
        <h3>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-plus"></i> Sửa sản phẩm
                </li>
            </ol>
        </h3>
    </div>
</div>
<!-- /.row -->
<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sua']->value['id'];?>
" name="id">
  <div class="form-group">
    <label for="tenSP" class="col-sm-2 control-label">Tên sản phẩm <span class="required">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tenSP" id="tenSP" value="<?php echo $_smarty_tpl->tpl_vars['sua']->value['tenSP'];?>
" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="id_loai" class="col-sm-2 control-label">Loại sản phẩm <span class="required">*</span></label>
    <div class="col-sm-10">
      <select class="form-control"  name="id_loai" id="id_loai">
        <?php
$_from = $_smarty_tpl->tpl_vars['model']->value->GetCat(0,'','');
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?> 
          <option <?php if ($_smarty_tpl->tpl_vars['sua']->value['id_loai'] == $_smarty_tpl->tpl_vars['row']->value['id']) {?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['tenLoai'];?>
 </option>
        <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="hinhAnh" class="col-sm-2 control-label">Ảnh đại diện <span class="required">*</span></label>
    <div class="col-sm-10">
      <input class="form-control"  name="hinhAnh" id="hinhAnh" type="file" />
      <img src="<?php echo $_smarty_tpl->tpl_vars['sua']->value['hinhAnh'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['sua']->value['tenSP'];?>
" width="140" class="img-rounded img-responsive" >
    </div>
  </div>

  <div class="form-group">
    <label for="donGia" class="col-sm-2 control-label">Đơn giá <span class="required">*</span></label>
    <div class="col-sm-4">
      <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['sua']->value['donGia'];?>
"  class="form-control" name="donGia" id="donGia" placeholder="">
    </div>

    <label for="soLuong" class="col-sm-2 control-label">Số lượng <span class="required">*</span></label>
    <div class="col-sm-4 ">
      <input type="number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['sua']->value['soLuong'];?>
"  name="soLuong" id="soLuong" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="chatLieu" class="col-sm-2 control-label">Chất liệu</label>
    <div class="col-sm-4">
      <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['sua']->value['chatLieu'];?>
" name="chatLieu" id="chatLieu" placeholder="">
    </div>
 
    <label for="kichThuoc" class="col-sm-2 control-label">Kích thước</label>
    <div class="col-sm-4">
      <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['sua']->value['kichThuoc'];?>
" name="kichThuoc" id="kichThuoc" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="xuatXu" class="col-sm-2 control-label">Xuất xứ</label>
    <div class="col-sm-4">
      <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['sua']->value['xuatXu'];?>
" name="xuatXu" id="xuatXu" placeholder="">
    </div>

    <label for="mauSon" class="col-sm-2 control-label">Màu sơn</label>
    <div class="col-sm-4">
      <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['sua']->value['mauSon'];?>
" name="mauSon" id="mauSon" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="moTa" class="col-sm-2 control-label">Mô tả sản phẩm <span class="required">*</span></label>
    <div class="col-sm-10">
      <textarea class="form-control" name="moTa" id="moTa" rows="3" placeholder=""><?php echo $_smarty_tpl->tpl_vars['sua']->value['moTa'];?>
</textarea>
      <?php echo '<script'; ?>
>CKEDITOR.replace('moTa'); <?php echo '</script'; ?>
>
    </div>
  </div>

  <div class="form-group">
    <label for="tuKhoa" class="col-sm-2 control-label">Từ khóa <span class="required">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['sua']->value['tuKhoa'];?>
" name="tuKhoa" id="tuKhoa" placeholder="">
    </div>
  </div>
  
  <div class="form-group">
    <label for="phanLoai" class="col-sm-2 control-label">Phân loại</label>
    <div class="col-sm-10">
      <input type="radio" name="phanLoai" value="1" <?php if ($_smarty_tpl->tpl_vars['sua']->value['phanLoai'] == 1) {?> checked <?php }?>> Sản phẩm mới 
      <input type="radio" name="phanLoai" value="2" <?php if ($_smarty_tpl->tpl_vars['sua']->value['phanLoai'] == 2) {?> checked <?php }?> /> Sản phẩm bán chạy

    </div>
  </div>
  <div class="form-group">
    <label for="trangThai" class="col-sm-2 control-label">Trạng thái</label>
    <div class="col-sm-10">
      <input type="radio" name="trangThai" value="1" <?php if ($_smarty_tpl->tpl_vars['sua']->value['trangThai'] == 1) {?> checked <?php }?>/> Hiện thị
      <input type="radio" name="trangThai" value="0" <?php if ($_smarty_tpl->tpl_vars['sua']->value['trangThai'] == 0) {?> checked <?php }?>/> Không hiển thị
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button name="btnSua" type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Sửa</button>
      <button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Làm lại</button>
    </div>
  </div>
</form><?php }
}
?>