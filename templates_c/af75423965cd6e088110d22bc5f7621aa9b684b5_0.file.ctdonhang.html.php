<?php /* Smarty version 3.1.27, created on 2015-12-08 02:45:14
         compiled from "templates\home\ctdonhang.html" */ ?>
<?php
/*%%SmartyHeaderCode:294205666362a52a518_07312909%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af75423965cd6e088110d22bc5f7621aa9b684b5' => 
    array (
      0 => 'templates\\home\\ctdonhang.html',
      1 => 1449539113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294205666362a52a518_07312909',
  'variables' => 
  array (
    'khachhang' => 0,
    'donhang' => 0,
    'model' => 0,
    'tt' => 0,
    'ctdh' => 0,
    'dh' => 0,
    'sp' => 0,
    'thanhtien' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5666362a5af237_68560197',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5666362a5af237_68560197')) {
function content_5666362a5af237_68560197 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '294205666362a52a518_07312909';
if (isset($_smarty_tpl->tpl_vars['khachhang']->value)) {?>
<div class="main-container col2-right-layout">
  <div class="main container">
    <div class="row">
      <section class="col-main col-sm-9 wow">
        <div class="my-account">
          <div class="page-title">
            <h2>Chi tiết đơn đặt hàng</h2>
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
                        <td>Điện thoại</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['khachhang']->value['dienThoai'];?>
</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['donhang']->value['hoTen'];?>
</td>
                      </tr>
                      <tr>
                        <td>Địa chỉ</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['donhang']->value['diaChi'];?>
</td>
                      </tr>
                      <tr>
                        <td>Ghi chú</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['donhang']->value['ghiChu'];?>
</td>
                      </tr>
                    </table>
                  </p>
                </div>
              </div>
            </div>
            <div class="recent-orders" name="donhang">
                <div class="title-buttons">
                  <strong>Chi tiết hàng</strong> 
                  Tổng tiền: <span style="color:red;font-weight:bold;">
                  <?php $_smarty_tpl->tpl_vars['tt'] = new Smarty_Variable($_smarty_tpl->tpl_vars['model']->value->tongtien($_smarty_tpl->tpl_vars['donhang']->value['id']), null, 0);?>
                  <?php echo number_format($_smarty_tpl->tpl_vars['tt']->value['tongtien']);?>
 VND</span>
                </div>
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
                        <th>Mã SP</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th><span class="nobr">Thành tiền</span></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['ctdh']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['dh'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['dh']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dh']->value) {
$_smarty_tpl->tpl_vars['dh']->_loop = true;
$foreach_dh_Sav = $_smarty_tpl->tpl_vars['dh'];
?>
                    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable($_smarty_tpl->tpl_vars['dh']->value['id_sp'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable($_smarty_tpl->tpl_vars['model']->value->selectone('sanpham',"id = '".((string)$_smarty_tpl->tpl_vars['id']->value)."'"), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['thanhtien'] = new Smarty_Variable($_smarty_tpl->tpl_vars['sp']->value['donGia']*$_smarty_tpl->tpl_vars['dh']->value['soLuong'], null, 0);?>
                    <!-- <?php $_smarty_tpl->tpl_vars['tien'] = new Smarty_Variable($_smarty_tpl->tpl_vars['model']->value->tongtien($_smarty_tpl->tpl_vars['dh']->value['id']), null, 0);?> -->
                      <tr class="last even">
                        <td><?php echo $_smarty_tpl->tpl_vars['dh']->value['id_sp'];?>
</td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['model']->value->alias($_smarty_tpl->tpl_vars['sp']->value['tenSP']);?>
_<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['sp']->value['tenSP'];?>
 </a></td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['donGia']);?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dh']->value['soLuong'];?>
</td>
                        <td><span class="price"><?php echo number_format($_smarty_tpl->tpl_vars['thanhtien']->value);?>
 VND</span></td>
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