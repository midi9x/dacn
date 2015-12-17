<?php /* Smarty version 3.1.27, created on 2015-12-14 06:25:15
         compiled from "templates\home\order.html" */ ?>
<?php
/*%%SmartyHeaderCode:3866566e52bb551d53_77756797%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94234a80313d066153e473dcbda9dcd60bc83cd2' => 
    array (
      0 => 'templates\\home\\order.html',
      1 => 1450070714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3866566e52bb551d53_77756797',
  'variables' => 
  array (
    'config' => 0,
    'giohang' => 0,
    'model' => 0,
    'detail' => 0,
    'sl' => 0,
    'tongtien' => 0,
    'tonggia' => 0,
    'id' => 0,
    'khachhang' => 0,
    'danhsach' => 0,
    'sp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566e52bb638508_56423820',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566e52bb638508_56423820')) {
function content_566e52bb638508_56423820 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3866566e52bb551d53_77756797';
?>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
js/jquery.min.js"><?php echo '</script'; ?>
> 
<section class="main-container col1-layout">
<div class="main container">
  <div class="col-main">
    <div class="cart wow">
      <div class="page-title">
        <h2>Giỏ hàng</h2>
      </div>
      <?php if (count($_smarty_tpl->tpl_vars['giohang']->value) > 0) {?>
      <div class="table-responsive">
        <form method="post"  action="index.php?controller=order">
          <fieldset>
            <table class="data-table cart-table" id="shopping-cart-table">
              <thead>
                <tr class="first last">
                  <th rowspan="1">Hình ảnh</th>
                  <th rowspan="2"><span class="nobr">Tên sản phẩm</span></th>
                  <th colspan="1" class="a-center"><span class="nobr">Giá bán</span></th>
                  <th class="a-center" rowspan="1">Số lượng</th>
                  <th class="a-center" rowspan="1">Xóa</th>
                </tr>
              </thead>
              <tfoot>
                <tr class="first last">
                  <td class="a-right last" colspan="50"><button onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
'" class="button btn-continue" title="Tiếp tục mua sắm" type="button"><span><span>Tiếp tục mua sắm</span></span></button>
                    <button id="btnCapnhat" class="button btn-update" title="Cập nhật giỏ hàng" value="update_qty" name="update_cart_action" type="submit"><span><span>Cập nhật giỏ hàng</span></span></button>
                    <button  id="empty_cart_button" class="button btn-empty" title="Xóa giỏ hàng" value="empty_cart" name="update_cart_action" type="button"><span><span>Xóa  giỏ hàng</span></span></button></td>
                </tr>
              </tfoot>
              <tbody>
              <?php $_smarty_tpl->tpl_vars['tongtien'] = new Smarty_Variable(0, null, 0);?>
              <?php
$_from = $_smarty_tpl->tpl_vars['giohang']->value;
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
              <?php $_smarty_tpl->tpl_vars['detail'] = new Smarty_Variable($_smarty_tpl->tpl_vars['model']->value->selectone('sanpham',"id=".((string)$_smarty_tpl->tpl_vars['id']->value)), null, 0);?>
              <?php $_smarty_tpl->tpl_vars['tonggia'] = new Smarty_Variable($_smarty_tpl->tpl_vars['detail']->value['donGia']*$_smarty_tpl->tpl_vars['sl']->value, null, 0);?>
              <?php $_smarty_tpl->tpl_vars['tongtien'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tongtien']->value+$_smarty_tpl->tpl_vars['tonggia']->value, null, 0);?>
                <tr>
                  <td class="image"><img width="75" alt="<?php echo $_smarty_tpl->tpl_vars['detail']->value['tenSP'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['detail']->value['hinhAnh'];?>
"></td>
                  <td><h2 class="product-name"> <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['detail']->value['tenSP'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['model']->value->alias($_smarty_tpl->tpl_vars['detail']->value['tenSP']);?>
_<?php echo $_smarty_tpl->tpl_vars['detail']->value['id'];?>
.html"> <?php echo $_smarty_tpl->tpl_vars['detail']->value['tenSP'];?>
</a> </h2></td>
                  
                  <td class="a-right"><span class="cart-price"> <span class="price"><?php echo number_format($_smarty_tpl->tpl_vars['detail']->value['donGia']);?>
 VND</span> </span></td>
                  <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Số lượng" value="<?php echo $_smarty_tpl->tpl_vars['sl']->value;?>
" name="sl<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" size="3" id="sl<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></td>
                  
                  <td class="a-center last">
                  <button value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="button" class="btndel button remove-item" title="Xóa"><span>Xóa</span></button>
                  
                  </td>
                </tr>
              <?php
$_smarty_tpl->tpl_vars['sl'] = $foreach_sl_Sav;
}
?>     
              </tbody>
            </table>
            <?php echo '<script'; ?>
>
            $(document).ready(function(e) {
              $('.btndel').click(function(e) {
                  var kq=confirm('Bạn có chắc muốn xóa?')
              if(kq)
              {
                var id=$(this).val();//Lấy dc ID
                $('#sl'+id).val(0);//Thay đổi số lượng là 0
                $('#btnCapnhat').click();//Click vào nút cập nhật
              }
              });
            ///////////////
            $('#btndathang').click(function(e) {
                  $('#dathang').slideToggle();
              });
            $('#empty_cart_button').click(function(e) {
              var kq=confirm('Bạn có chắc muốn xóa?')
              if(kq)
              {
                $('.qty').val(0);
                $('#btnCapnhat').click();
              }
              });
            });

            <?php echo '</script'; ?>
>
          </fieldset>
        </form>
      </div>
      <?php echo '<script'; ?>
>
        $(document).ready(function(e){
          $('#btncheckout').click(function(e){
            tenDN = $('#tenDN').val();
            matKhau = $('#matKhau').val();
            rematKhau = $('#rematKhau').val();
            if(tenDN.length<6){
              alert('Tên đăng nhập phải lớn hơn 6 ký tự');
              return false;
            }
            if(matKhau.length<6){
              alert('Mật khẩu phải lớn hơn 6 ký tự');
              return false;
            }
            if(matKhau!=rematKhau){
              alert('Mật khẩu không trùng khớp');
              return false;
            }
          });
        });
      <?php echo '</script'; ?>
>
      <!-- BEGIN CART COLLATERALS -->
      <div class="cart-collaterals row">
        <div class="col-sm-8">
          <div class="shipping" id="dathang" style="display:none;">
            <h3>Thông tin đơn đặt hàng </h3>
            <div class="shipping-form">
              <form id="shipping-zip-form" method="post" action="index.php?controller=checkout" data-toggle="validator">
              <input type="hidden" name="tongtien" value="<?php echo $_smarty_tpl->tpl_vars['tongtien']->value;?>
" />
              <?php if (!isset($_smarty_tpl->tpl_vars['khachhang']->value)) {?>
                <p style="">Vui lòng đăng ký thông tin để đặt hàng. 
                Nếu bạn đã có tài khoản khách hàng tại NoiThat.Dev! <a style="color: #337ab7;font-weight: bold;" href="login.html">Click vào đây để đăng nhập</a></p>
              <?php } else { ?>
                <p>Xin chào <?php echo $_smarty_tpl->tpl_vars['khachhang']->value['tenDN'];?>
, Vui lòng xác nhận thông tin đơn đặt hàng</p>
              <?php }?>
                <ul class="form-list">
                  <?php if (!isset($_smarty_tpl->tpl_vars['khachhang']->value)) {?>
                  <li>
                    <label for="postcode">Tên đăng nhập <span style="color:red"> *</span></label>
                    <div class="input-box">
                      <input type="text" name="tenDN" id="tenDN" class="input-text" required/>
                    </div>
                  </li>
                  <li>
                    <label for="postcode">Mật khẩu <span style="color:red"> *</span></label>
                    <div class="input-box">
                      <input type="password" name="matKhau" id="matKhau" class="input-text" required/>
                    </div>
                  </li>
                  <li>
                    <label for="postcode">Nhập lại mật khẩu <span style="color:red"> *</span></label>
                    <div class="input-box">
                      <input type="password" data-match="#matKhau" name="rematKhau" id="rematKhau" class="input-text" required/>
                    </div>
                  </li>
                  <?php }?>

                  <li>
                    <label for="postcode">Họ và tên <span style="color:red"> *</span></label>
                    <div class="input-box">
                      <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['khachhang']->value)) {
echo $_smarty_tpl->tpl_vars['khachhang']->value['tenKH'];?>
 <?php }?>" name="hoTen" id="hoTen" class="input-text" required/> 
                    </div>
                  </li>

                  <li>
                    <label for="postcode">Số điện thoại <span style="color:red"> *</span></label>
                    <div class="input-box">
                      <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['khachhang']->value)) {
echo $_smarty_tpl->tpl_vars['khachhang']->value['dienThoai'];?>
 <?php }?>" name="dienThoai" id="dienThoai" class="input-text" required/>
                    </div>
                  </li>

                  <li>
                    <label for="postcode">Địa chỉ nhận<span style="color:red"> *</span></label>
                    <div class="input-box">
                      <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['khachhang']->value)) {
echo $_smarty_tpl->tpl_vars['khachhang']->value['diaChi'];?>
 <?php }?>" name="diaChi" id="diaChi" class="input-text" required/>
                    </div>
                  </li>

                  <li>
                    <label for="postcode">Email <span style="color:red"> *</span></label>
                    <div class="input-box">
                      <input type="email" value="<?php if (isset($_smarty_tpl->tpl_vars['khachhang']->value)) {
echo $_smarty_tpl->tpl_vars['khachhang']->value['email'];?>
 <?php }?>" name="email" id="email" class="input-text" required/>
                    </div>
                  </li>
                  <?php if (!isset($_smarty_tpl->tpl_vars['khachhang']->value)) {?>
                  <li>
                    <label for="postcode">Ngày sinh </label>
                    <div class="input-box">
                      <input type="date"  name="ngaySinh" id="ngaySinh" class="input-text"/
                      >
                    </div>
                  </li>
                  <li>
                    <label for="postcode">Giới tính </label>
                    <div class="input-box">
                      <select class="input-text" name="gioiTinh" id="gioiTinh">
                        <option value="1">Nam</option>
                        <option value="0">Nữ</option>
                      </select>
                    </div>
                  </li>
                  <?php }?>
                  <li>
                    <label for="postcode">Ghi chú</label>
                    <div class="input-box">
                      <textarea rows="4" style="width: 675px;" name="ghiChu" id="ghiChu" class="input-text"></textarea>
                    </div>
                  </li>
                </ul>

                <div class="buttons-set11">
                  <button class="button btn btn-default" id="btncheckout"  name="btncheckout" type="submit"><span class="glyphicon glyphicon-ok">Xácnhận</span></button>
                </div>
                <!--buttons-set11-->
              </form>
            </div>
            
          </div>
        </div>

        <div class="totals col-sm-4">
        <h4>
          <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
            <tr>
              <td>Tổng tiền: </td>
              <td><span class="price" style="font-weight:bold"><?php echo number_format($_smarty_tpl->tpl_vars['tongtien']->value);?>
 VND</span><td>
            </tr>
          </table>
        </h4>
            <ul class="checkout">
              <li>
                <button id="btndathang" class="button btn-proceed-checkout" title="Đặt hàng" type="button"><span>Đặt hàng</span></button>
              </li>
              <br>
            </ul>
          
        </div>
      </div>
      <?php } else { ?>
      <div class="table-responsive">
      Chưa có sản phẩm nào trong giỏ hàng
      </div>
      <?php }?>
    </div>
    <div class="crosssel">
      <div class="new_title center">
        <h2>Sản phẩm đã xem</h2>
      </div>
      <div class="category-products">
        <ul id="crosssell-products-list" class="products-grid first odd">
          <?php
$_from = $_smarty_tpl->tpl_vars['danhsach']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
$foreach_sp_Sav = $_smarty_tpl->tpl_vars['sp'];
?>
              <li class="item col-md-3 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Hot</div>
                  <div class="images-container"> <a class="product-image" title="<?php echo $_smarty_tpl->tpl_vars['sp']->value['tenSP'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['model']->value->alias($_smarty_tpl->tpl_vars['sp']->value['tenSP']);?>
_<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
.html"> <img src="<?php echo $_smarty_tpl->tpl_vars['sp']->value['hinhAnh'];?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['sp']->value['tenSP'];?>
" style="width:262px;height:318px;" /> </a>
                    <div class="actions">
                      <div class="actions-inner">
                        <button onclick="window.location.href='/order/<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
/1'" type="button" title="Thêm vào giỏ" class="button btn-cart"><span>Thêm vào giỏ</span></button>
                        <ul class="add-to-links">
                          <li><a href="<?php echo $_smarty_tpl->tpl_vars['model']->value->alias($_smarty_tpl->tpl_vars['sp']->value['tenSP']);?>
_<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
.html" title="" class="link-wishlist"><span><!-- Add to Wishlist --></span></a></li>
                          <li><a href="<?php echo $_smarty_tpl->tpl_vars['model']->value->alias($_smarty_tpl->tpl_vars['sp']->value['tenSP']);?>
_<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
.html" title="" class="link-compare "><span><!-- Add to Compare --></span></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="qv-button-container"> <a href="<?php echo $_smarty_tpl->tpl_vars['model']->value->alias($_smarty_tpl->tpl_vars['sp']->value['tenSP']);?>
_<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
.html" class="qv-e-button btn-quickview-1"><span><span></span></span></a> </div>
                  </div>
                  <div class="info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="<?php echo $_smarty_tpl->tpl_vars['sp']->value['tenSP'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['model']->value->alias($_smarty_tpl->tpl_vars['sp']->value['tenSP']);?>
_<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['sp']->value['tenSP'];?>
</a> </div>
                      <!--item-title-->
                      <div class="item-content">
                        <div class="ratings">
                          <div class="rating-box">
                            <div style="width:60%" class="rating"></div>
                          </div>
                        </div>
                        <div class="price-box">
                          <p class="special-price"> <span class="price"> <?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['donGia']);?>
 VND  </span> </p>
                          <!--  <p class="old-price"> <span class="price-sep">-</span> <span class="price"> <?php echo $_smarty_tpl->tpl_vars['sp']->value['donGia'];?>
</span> </p> -->
                        </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner--> 
                    
                    <!--actions-->
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <?php
$_smarty_tpl->tpl_vars['sp'] = $foreach_sp_Sav;
}
?>
        </ul>
      </div>
    </div>
  </div>
</div>
</section>
<?php }
}
?>