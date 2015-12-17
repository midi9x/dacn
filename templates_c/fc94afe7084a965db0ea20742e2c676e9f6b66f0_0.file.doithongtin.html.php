<?php /* Smarty version 3.1.27, created on 2015-12-08 05:59:47
         compiled from "templates\home\doithongtin.html" */ ?>
<?php
/*%%SmartyHeaderCode:1909566663c363a6e0_55347327%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc94afe7084a965db0ea20742e2c676e9f6b66f0' => 
    array (
      0 => 'templates\\home\\doithongtin.html',
      1 => 1449550786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1909566663c363a6e0_55347327',
  'variables' => 
  array (
    'khachhang' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566663c369c186_75893469',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566663c369c186_75893469')) {
function content_566663c369c186_75893469 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1909566663c363a6e0_55347327';
?>

<?php if (isset($_smarty_tpl->tpl_vars['khachhang']->value)) {?>
<div class="main-container col2-right-layout">
  <div class="main container">
    <div class="row">
      <section class="col-main col-sm-9 wow">
        <div class="my-account">
          <div class="page-title">
            <h2>Đổi thông tin khách hàng</h2>
          </div>
          <div class="dashboard">


            <div class="box-account">
              <div class="col2-set">
                <div class="col-1">
                  <style type="text/css">
                    .box-account td {
                      width: 120px;
                      padding: 2px;
                    }
                  </style>
                  <h5>Đổi thông tin</h5>
                  <p>
                    <table>
                      <tr>
                        <td>Tên đăng nhập:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['khachhang']->value['tenDN'];?>
</td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['khachhang']->value['email'];?>
</td>
                      </tr>
                    </table>
                    <br>
                    <br/>

                  </p>
                </div>
                <div class="col-2">
                  <h5>Đổi thông tin</h5>
                  <form method="post" action="" id="login-form">
                    <fieldset>
                      <ul class="form-list">
                        <li>
                          <label class="required"><em>*</em>Tên khách hàng</label>
                          <div class="input-box">
                            <input style="width:400px;" name="" value="<?php echo $_smarty_tpl->tpl_vars['khachhang']->value['tenKH'];?>
" type="text" class="input-text required-entry validate-email">
                          </div>
                        </li>
                        <li>
                          <label class="required"><em>*</em>Địa chỉ</label>
                          <div class="input-box">
                            <input style="width:400px;" type="text" value="<?php echo $_smarty_tpl->tpl_vars['khachhang']->value['diaChi'];?>
" name=""  class="input-text required-entry">
                          </div>
                        </li>
                        <li>
                          <label class="required"><em>*</em>Điện thoại</label>
                          <div class="input-box">
                            <input style="width:400px;" type="text" name="" value="<?php echo $_smarty_tpl->tpl_vars['khachhang']->value['dienThoai'];?>
" class="input-text required-entry">
                          </div>
                        </li>
                        <li>
                          <label class="required"><em>*</em>Email</label>
                          <div class="input-box">
                            <input style="width:400px;" type="text" name="" value="<?php echo $_smarty_tpl->tpl_vars['khachhang']->value['email'];?>
" class="input-text required-entry">
                          </div>
                        </li>
                        <li>
                          <label class="required">Ngày sinh</label>
                          <div class="input-box">
                            <input style="width:400px;" type="text" value="<?php echo $_smarty_tpl->tpl_vars['khachhang']->value['ngaySinh'];?>
" name="" class="input-text required-entry">

                          </div>
                        </li>
                        <li>
                          <label class="required">Giới tính</label>
                          <div class="input-box">
                            <select style="width:400px;" class="input-text required-entry">
                              <option value="1" <?php if ($_smarty_tpl->tpl_vars['khachhang']->value['gioiTinh'] == 1) {?>selected<?php }?>>Nam</option>
                              <option value="0" <?php if ($_smarty_tpl->tpl_vars['khachhang']->value['gioiTinh'] == 0) {?>selected<?php }?>>Nữ</option>
                            </select>
                          </div>
                        </li>
                        <li>
                          <button class="button pencil" name="btnDoiMK" type="submit"><span><span>Xác nhận</span></span></button>
                          <input type="button"  class="button" value="Hủy"/>
                        </li>
                      </ul>
                    </fieldset>
                  </form>
                  <br />  <br />  <br />
                </div>
              </div>
            </div>                                           
          </div>
        </section>
        <aside class="col-right sidebar  col-sm-3 wow">
          <div class="block block-account">
            <div class="block-title">Tài khoản</div>
            <div class="block-content">
              <ul>
                <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
taikhoan.html">Thông tin cá nhân</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
taikhoan.html#donhang" >Đơn hàng đã đặt</a></li>
                <li><a href="doimatkhau.html">Đổi mật khẩu</a></li>
                <li><a href="doithongtin.html">Đổi thông tin</a></li>
                <li><a href="logout.html">Thoát</a></li>
              </ul>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
  <?php } else { ?>
  <div class="main-container col2-right-layout">
    <div class="main container">
      Trước tiên bạn cần <a href="login.html">đăng nhập </a>!
    </div>
  </div>
  <?php }?>


<?php }
}
?>