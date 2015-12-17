<?php /* Smarty version 3.1.27, created on 2015-12-08 05:15:44
         compiled from "templates\home\doimatkhau.html" */ ?>
<?php
/*%%SmartyHeaderCode:100856665970b69f73_03684126%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21a0ca4624ae2c8b965096f5b91f88e9c31666f6' => 
    array (
      0 => 'templates\\home\\doimatkhau.html',
      1 => 1449548141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100856665970b69f73_03684126',
  'variables' => 
  array (
    'khachhang' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56665970bb0485_24909479',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56665970bb0485_24909479')) {
function content_56665970bb0485_24909479 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '100856665970b69f73_03684126';
?>

<?php if (isset($_smarty_tpl->tpl_vars['khachhang']->value)) {?>
<div class="main-container col2-right-layout">
  <div class="main container">
    <div class="row">
      <section class="col-main col-sm-9 wow">
        <div class="my-account">
          <div class="page-title">
            <h2>Đổi mật khẩu</h2>
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
                  <h5>Thông tin đăng nhập</h5>
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
                <h5>Đổi mật khẩu</h5>
                  <form method="post" action="" id="login-form">
                      <fieldset>
                        <ul class="form-list">
                          <li>
                            <label class="required"><em>*</em>Mật khẩu cũ</label>
                            <div class="input-box">
                              <input style="width:500px;" name="matKhaucu"  type="password" class="input-text required-entry validate-email">
                            </div>
                          </li>
                          <li>
                            <label class="required"><em>*</em>Mật khẩu mới</label>
                            <div class="input-box">
                              <input style="width:500px;" type="password" name="matKhau"  class="input-text required-entry">
                            </div>
                          </li>
                          <li>
                            <label class="required"><em>*</em>Nhập lại mật khẩu</label>
                            <div class="input-box">
                              <input style="width:500px;" type="password" name="rematKhau"   class="input-text required-entry">
                            </div>
                          </li>
                           <li>
                              <button class="button pencil" name="btnDoiMK" type="submit"><span><span>Xác nhận</span></span></button>
                              <input type="button"  class="button" value="Hủy"/>
                          </li>

                        </ul>
                      </fieldset>
                    </form>
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