<?php /* Smarty version 3.1.27, created on 2015-12-08 02:09:31
         compiled from "templates\home\taikhoan.html" */ ?>
<?php
/*%%SmartyHeaderCode:2579256662dcb22e510_20995065%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03a86b6063c0c23fb8207fb6607c2882cca66580' => 
    array (
      0 => 'templates\\home\\taikhoan.html',
      1 => 1449536899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2579256662dcb22e510_20995065',
  'variables' => 
  array (
    'khachhang' => 0,
    'donhang' => 0,
    'dh' => 0,
    'model' => 0,
    'tien' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56662dcb2a3830_18927127',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56662dcb2a3830_18927127')) {
function content_56662dcb2a3830_18927127 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2579256662dcb22e510_20995065';
?>

<?php if (isset($_smarty_tpl->tpl_vars['khachhang']->value)) {?>
<div class="main-container col2-right-layout">
  <div class="main container">
    <div class="row">
      <section class="col-main col-sm-9 wow">
        <div class="my-account">
          <div class="page-title">
            <h2>Tài khoản khách hàng</h2>
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
                      <tr>
                        <td><a href="doimatkhau.html">Đổi mật khẩu</a></td>
                      </tr>
                    </table>
                    <br>
                    <br/>

                  </p>
                </div>
                <div class="col-2">
                  <h5>Thông tin khách hàng</h5>
                  <p>
                    <table>
                      <tr>
                        <td>Họ tên:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['khachhang']->value['tenKH'];?>
</td>
                      </tr>
                      <tr>
                        <td>Địa chỉ</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['khachhang']->value['diaChi'];?>
</td>
                      </tr>
                      <tr>
                        <td>Điện thoại</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['khachhang']->value['dienThoai'];?>
</td>
                      </tr>
                      <tr>
                        <td>Ngày sinh</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['khachhang']->value['ngaySinh'];?>
</td>
                      </tr>
                      <tr>
                        <td>Giới tính</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['khachhang']->value['gioiTinh'] == 1) {?>Nam<?php } else { ?>Nữ<?php }?></td>
                      </tr>
                      <tr>
                        <td><a href="doithongtin.html">Đổi thông tin</a></td>
                      </tr>
                    </table>
                  </p>
                </div>
              </div>
            </div>
            <div class="recent-orders" name="donhang">
                <div class="title-buttons"><strong>5 đơn hàng gần </strong> <a href="#">Xem tất cả</a> </div>
                <div class="table-responsive">
                  <table class="data-table" id="my-orders-table">
                    <col width="80">
                    <col>
                    <col>
                    <col width="1">
                    <col width="100">
                    <col width="1">
                    <thead>
                      <tr class="first last">
                        <th>#</th>
                        <th>Ngày đặt</th>
                        <th>Địa chỉ nhận</th>
                        <th><span class="nobr">Tổng tiền</span></th>
                        <th>Tình trạng</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['donhang']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['dh'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['dh']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dh']->value) {
$_smarty_tpl->tpl_vars['dh']->_loop = true;
$foreach_dh_Sav = $_smarty_tpl->tpl_vars['dh'];
?>
                    <?php $_smarty_tpl->tpl_vars['tien'] = new Smarty_Variable($_smarty_tpl->tpl_vars['model']->value->tongtien($_smarty_tpl->tpl_vars['dh']->value['id']), null, 0);?>
                      <tr class="last even">
                        <td><?php echo $_smarty_tpl->tpl_vars['dh']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dh']->value['ngayDat'];?>
 </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dh']->value['diaChi'];?>
</td>
                        <td><span class="price"><?php echo number_format($_smarty_tpl->tpl_vars['tien']->value['tongtien']);?>
 VND</span></td>
                        <td><em><?php if ($_smarty_tpl->tpl_vars['dh']->value['tinhTrang'] == 0) {?>Đang xử lý<?php } else { ?>Hoàn thành<?php }?></em></td>
                        <td class="a-center last"><span class="nobr"> <a href="don-hang-<?php echo $_smarty_tpl->tpl_vars['dh']->value['id'];?>
.html">Xem chi tiết hàng</a>
                        </td>
                      </tr>
                    <?php
$_smarty_tpl->tpl_vars['dh'] = $foreach_dh_Sav;
}
?>
                    </tbody>
                  </table>
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
<div class="main-container col2-right-layout">
  <div class="main container">
  Trước tiên bạn cần <a href="login.html">đăng nhập </a>!
  </div>
</div>
<?php }?>


<?php }
}
?>