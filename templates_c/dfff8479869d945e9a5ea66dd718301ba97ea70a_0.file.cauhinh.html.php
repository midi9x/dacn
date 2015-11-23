<?php /* Smarty version 3.1.27, created on 2015-11-22 19:19:09
         compiled from "C:\xampp\htdocs\dacn\templates\admin\cauhinh.html" */ ?>
<?php
/*%%SmartyHeaderCode:74125651b2bd9bfa55_28259338%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfff8479869d945e9a5ea66dd718301ba97ea70a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dacn\\templates\\admin\\cauhinh.html',
      1 => 1446710536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74125651b2bd9bfa55_28259338',
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5651b2bda6f708_77662515',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5651b2bda6f708_77662515')) {
function content_5651b2bda6f708_77662515 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '74125651b2bd9bfa55_28259338';
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
                    <i class="fa fa-cog"></i> Cấu hình hệ thống
                </li>
            </ol>
        </h3>
    </div>
</div>
<!-- /.row -->
<form class="form-horizontal">
  <div class="form-group">
    <label for="txtUrl" class="col-sm-2 control-label">Địa chỉ trang web</label>
    <div class="col-sm-10">
      <input type="url" class="form-control" name="txtUrl" id="txtUrl" placeholder="Ví dụ: http://noithat.com">
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Tiêu đề trang web</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="" id="" placeholder="Ví dụ: Nội Thất Đồ Gỗ Đẹp Giá Rẻ | Nội Thất Cao Cấp">
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Mô tả</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="" id="" rows="3" placeholder="Ví dụ: Nhà sản xuất phân phối sỉ lẻ đồ gỗ nội thất cao cấp, giá thành rẻ,dịch vụ chuyên nghiệp,nhiều mẫu đẹp. Liên hệ 0918369678"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Từ khóa</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="" id="" placeholder="Ví dụ: đồ gỗ nội thât, cơ sở sản xuất đồ gỗ, cơ sở sản xuất đồ mộc, co so do go, đồ gỗ, nội thất">
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Logo</label>
    <div class="col-sm-10">
      <input type="file" />
      <p class="form-control-static"><img width="160"  class="img-thumbnail" alt="logo" src="http://vieclam.24h.com.vn/upload/files_cua_nguoi_dung/logo/2014/02/24/1393231114_card_2.jpg"/></p>
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button t type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Hoàn thành</button>
      <button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Làm mới</button>
    </div>
  </div>
</form><?php }
}
?>