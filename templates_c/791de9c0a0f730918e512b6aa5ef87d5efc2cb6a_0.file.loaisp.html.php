<?php /* Smarty version 3.1.27, created on 2015-11-22 19:25:35
         compiled from "C:\xampp\htdocs\dacn\templates\admin\loaisp.html" */ ?>
<?php
/*%%SmartyHeaderCode:12285651b43fdc35a3_65476025%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '791de9c0a0f730918e512b6aa5ef87d5efc2cb6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dacn\\templates\\admin\\loaisp.html',
      1 => 1448195134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12285651b43fdc35a3_65476025',
  'variables' => 
  array (
    'link' => 0,
    'config' => 0,
    'model' => 0,
    'row' => 0,
    'danhsach' => 0,
    'item' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5651b43fe4c144_64023933',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5651b43fe4c144_64023933')) {
function content_5651b43fe4c144_64023933 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12285651b43fdc35a3_65476025';
?>
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
<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" class="form-horizontal">
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
                        <i class="fa fa-table"></i> Quản lý loại sản phẩm
                    </li>
                </ol>
            </h3>
        </div>    
    </div>
</div>


<div class="row">
    <div class="col-lg-4">
        <h2> <span class="action">Thêm</span> loại sản phẩm</h2>
        <form class="form-horizontal">
            <input type="hidden" name="id" id="id" />
            <div class="form-group">
                <label for="tenLoai" class="col-sm-3 control-label">Tên loại</label>
                <div class="col-sm-9">
                    <input type="text"  class="form-control" name="tenLoai" id="tenLoai" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="moTamoTamoTa" class="col-sm-3 control-label">Mô tả</label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="moTa" id="moTa"  rows="7"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="tuKhoa" class="col-sm-3 control-label">Từ khóa</label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="tuKhoa" id="tuKhoa" rows="5"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="loaiCha" class="col-sm-3 control-label">Loại cha</label>
                <div class="col-sm-9">
                    <select class="form-control"  name="loaiCha" id="loaiCha">
                        <option value="0"> =====>Không<==== </option>
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
                <div class="col-sm-offset-2 col-sm-10">
                    <button name="btnThem" id="btnCapnhat" type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> <span class="action">Thêm </span></button>
                    <button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Làm mới</button>
                </div>
            </div>
        </form>

    </div>
    <div class="col-lg-8">
<div class="form-group">
    <div class="col-sm-7"><h2>Danh sách loại sản phẩm</h2>
    </div>
    <div class="col-sm-5">
    <div style="padding-top: 20px;"></div>
<button class="btn btn-success" type="button" id="Add"><i class="glyphicon glyphicon-plus"></i> Thêm mới </button> 
                    <?php echo '<script'; ?>
>
                        $(document).ready(function(e) {
                            $('#Add').click(function(e) {
                                $('span.action').text('Thêm ');
                                $('#id').val(0);
                                $('#tenLoai').val('');
                                $('#moTa').val('');
                                $('#tuKhoa').val('');
                                $('#loaiCha').val(0);
                                $('#btnCapnhat').attr('name','btnThem');
                            });
                        });
                    <?php echo '</script'; ?>
>
                    <button name="btnXoachon" onclick="return confirm('Bạn có muốn xóa');" type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Xóa mục chọn</button>
    </div>
</div>

       <!--  <table>
            <tr>
                <td>
                    <h2>Danh sách loại sản phẩm</h2>
                </td>
                    <button class="btn btn-success" type="button" id="Add"><i class="glyphicon glyphicon-plus"></i> Thêm mới </button> 
                    <?php echo '<script'; ?>
>
                        $(document).ready(function(e) {
                            $('#Add').click(function(e) {
                                $('span.action').text('Thêm ');
                                $('#id').val(0);
                                $('#tenLoai').val('');
                                $('#moTa').val('');
                                $('#tuKhoa').val('');
                                $('#loaiCha').val(0);
                                $('#btnCapnhat').attr('name','btnThem');
                            });
                        });
                    <?php echo '</script'; ?>
>
                    <button name="btnXoachon" onclick="return confirm('Bạn có muốn xóa');" type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Xóa mục chọn</button>
                <td>
            </tr>
        </table>
         -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th width="100">Tên loại</th>
                        <th>Mô tả</th>
                        <th>Chuyên mục cha</th>
                        <th><input type="checkbox" id="selectall" name="selectall" /></th>
                         <th width="170">Thao tác</th>
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
                        
                        <td  height="80"><?php echo $_smarty_tpl->tpl_vars['item']->value['tenLoai'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['moTa'];?>
</td>
                        <td>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['loaiCha'];
$_tmp1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['model']->value->GetCatCha($_tmp1);?>
 
                        </td>
                       
                        <td><input type="checkbox" name="cbitem[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="checkbox" ></td>
                        <td width="170">
                            <button type="button" id="btnedit<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Sửa </button>
                             <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
&action=xoa&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" onclick="return confirm('Bạn có muốn xóa');" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Xóa</a>
                            
                        </td>
                    </tr>
                    <?php echo '<script'; ?>
>
                        $(document).ready(function(e) {
                            $('#btnedit<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
').click(function(e) {
                                $('span.action').text('Cập nhật');
                                $('#id').val('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');
                                $('#tenLoai').val('<?php echo $_smarty_tpl->tpl_vars['item']->value['tenLoai'];?>
');
                                $('#moTa').val('<?php echo $_smarty_tpl->tpl_vars['item']->value['moTa'];?>
');
                                $('#tuKhoa').val('<?php echo $_smarty_tpl->tpl_vars['item']->value['tuKhoa'];?>
');
                                $('#loaiCha').val('<?php echo $_smarty_tpl->tpl_vars['item']->value['loaiCha'];?>
');
                                $('#btnCapnhat').attr('name','btnSua');
                            });
                        });
                    <?php echo '</script'; ?>
>
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
</form>
<!-- /.row --><?php }
}
?>