<?php /* Smarty version 3.1.27, created on 2015-12-24 15:25:53
         compiled from "templates\home\checkout.html" */ ?>
<?php
/*%%SmartyHeaderCode:22734567c0071d80679_85940506%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6becc0b1e1e5f3cb59d8d78aab3234626fa58b3' => 
    array (
      0 => 'templates\\home\\checkout.html',
      1 => 1450967139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22734567c0071d80679_85940506',
  'variables' => 
  array (
    'chitiet' => 0,
    'khachhang' => 0,
    'cartold' => 0,
    'model' => 0,
    'detail' => 0,
    'sl' => 0,
    'tongtien' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567c0071df9810_98239271',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567c0071df9810_98239271')) {
function content_567c0071df9810_98239271 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22734567c0071d80679_85940506';
?>

<?php if (isset($_smarty_tpl->tpl_vars['chitiet']->value)) {?>
<div class="main-container col2-right-layout">
  <div class="main container">
    <div class="row">
      <section class="col-main col-sm-9 wow">
        <div class="my-account">
          <div class="page-title">
            <h2>Thông tin đơn đặt hàng #<?php echo $_smarty_tpl->tpl_vars['chitiet']->value['id'];?>
</h2>
          </div>
          <div class="dashboard">
            <div class="welcome-msg"> <strong>Xin chào, <?php echo $_smarty_tpl->tpl_vars['khachhang']->value['tenDN'];?>
!</strong>
              <p>Cảm ơn quý khách đã đặt hàng, chúng tôi sẽ liên hệ với quý khách trong thời gian sớm nhất.</p>
            </div>
            <div class="recent-orders">
              <div class="title-buttons"><strong>Thông tin hàng đã đặt</strong> <a href="#">Xem tất cả đơn đặt hàng của bạn </a> </div>
              <div class="table-responsive">
                <table class="data-table" id="my-orders-table">
                  <col>
                  <col>
                  <col>
                  <col width="1">
                  <col width="1">
                  <col width="1">
                  <thead>
                    <tr class="first last">
                      <th>Mã hàng #</th>
                      <th>Tên sản phẩm</th>
                      <th>Hình ảnh</th>
                      <th><span class="nobr">Đơn giá</span></th>
                      <th>Số lượng</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
$_from = $_smarty_tpl->tpl_vars['cartold']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sl']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['sl']->value) {
$_smarty_tpl->tpl_vars['sl']->_loop = true;
$foreach_sl_Sav = $_smarty_tpl->tpl_vars['sl'];
?>
                   <?php $_smarty_tpl->tpl_vars['detail'] = new Smarty_Variable($_smarty_tpl->tpl_vars['model']->value->selectone('sanpham'," id=".((string)$_smarty_tpl->tpl_vars['id']->value)), null, 0);?>
                   <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['detail']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['detail']->value['tenSP'];?>
</td>
                    <td><img width="75" alt="<?php echo $_smarty_tpl->tpl_vars['detail']->value['tenSP'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['detail']->value['hinhAnh'];?>
"></td>
                    <td><span class="price"><?php echo number_format($_smarty_tpl->tpl_vars['detail']->value['donGia']);?>
 VND</span></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['sl']->value;?>
</td>
                  </tr>
                  <?php
$_smarty_tpl->tpl_vars['sl'] = $foreach_sl_Sav;
}
?>
                  <tr>
                    <td colspan="5" style="text-align:right;">Tổng tiền: <span class="price"><?php echo number_format($_smarty_tpl->tpl_vars['tongtien']->value);?>
 VND</span></td>

                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="box-account">
            <div class="page-title">
              <h2>Thông tin đặt hàng</h2>
            </div>
            <div class="col2-set">
              <div class="col-1">
                <style type="text/css">
                  .box-account td {
                    width: 150px;
                  }
                </style>
                <h5>Thông tin tài khỏan</h5>
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
                    <tr>
                      <td>Số điện thoại</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['khachhang']->value['dienThoai'];?>
</td>
                    </tr>
                  </table>
                  <br>
                  <br/>

                </p>
              </div>
              <div class="col-2">
                <h5>Thông tin nhận hàng</h5>
                <p>
                  <table>
                    <tr>
                      <td>Tên người nhận:</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['khachhang']->value['tenKH'];?>
</td>
                    </tr>
                    <tr>
                      <td>Địa chỉ</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['khachhang']->value['diaChi'];?>
</td>
                    </tr>
                    <tr>
                      <td>Ghi chú</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['chitiet']->value['ghiChu'];?>
</td>
                    </tr>
                  </table>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <aside class="col-right sidebar col-sm-3 wow">
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
<?php echo '<script'; ?>
 type="text/javascript">
  window.location.href='<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
';
<?php echo '</script'; ?>
>
<?php }?>


<?php }
}
?>