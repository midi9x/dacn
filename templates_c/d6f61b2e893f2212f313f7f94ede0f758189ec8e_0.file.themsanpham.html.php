<?php /* Smarty version 3.1.27, created on 2015-12-08 10:21:02
         compiled from "C:\xampp\htdocs\dacn\templates\admin\themsanpham.html" */ ?>
<?php
/*%%SmartyHeaderCode:643756664c9e57b717_97167078%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6f61b2e893f2212f313f7f94ede0f758189ec8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dacn\\templates\\admin\\themsanpham.html',
      1 => 1447572584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '643756664c9e57b717_97167078',
  'variables' => 
  array (
    'config' => 0,
    'link' => 0,
    'model' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56664c9e636f42_17890294',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56664c9e636f42_17890294')) {
function content_56664c9e636f42_17890294 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '643756664c9e57b717_97167078';
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
                    <i class="fa fa-plus"></i> Thêm mới sản phẩm
                </li>
            </ol>
        </h3>
    </div>
</div>
<!-- /.row -->
<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <label for="tenSP" class="col-sm-2 control-label">Tên sản phẩm <span class="required">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tenSP" id="tenSP" placeholder="">
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
          <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
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
      <input class="form-control" name="hinhAnh" id="hinhAnh" type="file" />
    </div>
  </div>

  <div class="form-group">
    <label for="donGia" class="col-sm-2 control-label">Đơn giá <span class="required">*</span></label>
    <div class="col-sm-4">
      <input type="number" class="form-control" name="donGia" id="donGia" placeholder="">
    </div>

    <label for="soLuong" class="col-sm-2 control-label">Số lượng <span class="required">*</span></label>
    <div class="col-sm-4 ">
      <input type="number" class="form-control" name="soLuong" id="soLuong" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="chatLieu" class="col-sm-2 control-label">Chất liệu</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="chatLieu" id="chatLieu" placeholder="">
    </div>
 
    <label for="kichThuoc" class="col-sm-2 control-label">Kích thước</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="kichThuoc" id="kichThuoc" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="xuatXu" class="col-sm-2 control-label">Xuất xứ</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="xuatXu" id="xuatXu" placeholder="">
    </div>

    <label for="mauSon" class="col-sm-2 control-label">Màu sơn</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="mauSon" id="mauSon" placeholder="">
    </div>
  </div>

  <div class="form-group">
    <label for="moTa" class="col-sm-2 control-label">Mô tả sản phẩm <span class="required">*</span></label>
    <div class="col-sm-10">
      <textarea class="form-control" name="moTa" id="moTa" rows="3" placeholder=""></textarea>
      <?php echo '<script'; ?>
>CKEDITOR.replace('moTa'); <?php echo '</script'; ?>
>
    </div>
  </div>

  <div class="form-group">
    <label for="tuKhoa" class="col-sm-2 control-label">Từ khóa <span class="required">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tuKhoa" id="tuKhoa" placeholder="">
    </div>
  </div>
  
  <div class="form-group">
    <label for="phanLoai" class="col-sm-2 control-label">Phân loại</label>
    <div class="col-sm-10">
      <input type="radio" name="phanLoai" value="1" checked/> Sản phẩm mới 
      <input type="radio" name="phanLoai" value="2" /> Sản phẩm bán chạy

    </div>
  </div>
  <div class="form-group">
    <label for="trangThai" class="col-sm-2 control-label">Trạng thái</label>
    <div class="col-sm-10">
      <input type="radio" name="trangThai" value="1" checked/> Hiện thị
      <input type="radio" name="trangThai" value="0" /> Không hiển thị
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button name="btnThem" type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Thêm mới</button>
      <button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Làm lại</button>
    </div>
  </div>
</form><?php }
}
?>