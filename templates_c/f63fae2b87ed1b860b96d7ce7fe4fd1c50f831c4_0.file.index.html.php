<?php /* Smarty version 3.1.27, created on 2015-12-24 15:41:41
         compiled from "templates\home\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:16441567c0425924063_94987804%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f63fae2b87ed1b860b96d7ce7fe4fd1c50f831c4' => 
    array (
      0 => 'templates\\home\\index.html',
      1 => 1450968099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16441567c0425924063_94987804',
  'variables' => 
  array (
    'config' => 0,
    'title' => 0,
    'model' => 0,
    'row' => 0,
    'gh' => 0,
    'khachhang' => 0,
    'temp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567c04259f3113_12683638',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567c04259f3113_12683638')) {
function content_567c04259f3113_12683638 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16441567c0425924063_94987804';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
favicon.ico" />
  <title><?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {
echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php } else { ?>Nội thất Duy Tân | Đồ gỗ nội thất cao cấp <?php }?></title>
  <meta name="description" content="Nội thất đồ gỗ phòng khách, phòng ngủ, khách sạn, văn phòng, giường, tủ, bàn, ghế, kệ, mẫu mã cực kỳ đa dạng. Đồ gỗ nội thất uy tín, giá cả hợp lý, Chất lượng dịch vụ hoàn hảo."/>
  <meta name="keywords" content="Đồ gỗ nội thât, cơ sở sản xuất đồ gỗ, cơ sở sản xuất đồ mộc, co so do go, đồ gỗ, nội thất"/>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
css/style.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
css/revslider.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
css/owl.theme.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
css/font-awesome.css" type="text/css">
  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
</head>
<body class="cms-index-index">
<div class="page"> 
  <!-- Header -->
  <header class="header-container">
    <div class="header-top">
      <div class="container">
        <div class="row"> 
          <!-- Header Language -->
          <div class="col-xs-6">
            
            <div class="welcome-msg hidden-xs">Hỗ trợ khách hàng từ 8:00 đến 23:00 </div>
          </div>
          <div class="col-xs-6"> 
            <!-- Header Top Links -->
            <div class="toplinks">
              <div class="links">
                <span class="hidden-xs">Tổng đài</span>
                <div class="phone hidden-xs">1800 1234</div> 
                <span style="padding-left:70px;"></span>
                <span class="hidden-xs">Hotline</span>
                <div class="phone hidden-xs">099 999 999</div>
              </div>
            </div>
            <!-- End Header Top Links --> 
          </div>
        </div>
      </div>
    </div>
    <div class="header container">
      <div class="row">
        <div class="col-lg-2 col-sm-3 col-md-2 col-xs-12"> 
          <!-- Header Logo --> 
          <a class="logo" title="Magento Commerce" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
"><img alt="/" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/logo.png" width="130"></a> 
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-7 col-sm-4 col-md-6 col-xs-12"> 
          <!-- Search-col -->
          <div class="search-box">
            <form action="index.php" method="GET" id="frmsearch">
              <input type="hidden" name="controller" value="timkiem">
              <select name="idcat" class="cate-dropdown hidden-xs">
              <option value="0">==== Tất cả ==== </option>
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
              <input type="text" placeholder="Nhập từ khóa cần tìm..."  maxlength="70" class="" name="key" id="search">
              <button id="submit-button" class="search-btn-bg"><span> &nbsp;&nbsp;&nbsp;Tìm&nbsp;&nbsp;&nbsp;</span></button>
            </form>


          </div>
          <!-- End Search-col --> 
        </div>
        <!-- Top Cart -->
        <div class="col-lg-3 col-sm-5 col-md-4 col-xs-12"   style="padding-left: 0px;">
          <div class="top-cart-contain">
            <div class="mini-cart">
              <div class="basket dropdown-toggle"> <a href="order.html"> <i class="icon-cart"></i>
                <div class="cart-box"><span class="title">Giỏ Hàng</span><span id="cart-total"> <?php echo $_smarty_tpl->tpl_vars['gh']->value;?>
 </span></div>
                </a></div>
              <div>
              </div>
            </div>
          </div>
          <?php if (isset($_smarty_tpl->tpl_vars['khachhang']->value)) {?>
          <div class="signup"><a title="Thoát" href="logout.html"><span>Thoát</span></a></div>
          <span class="or"> |  </span>
          <div class="login" style="text-overflow: ellipsis;width: 100px;white-space: nowrap;">
             <a title="Tài khoản" href="taikhoan.html"><span>Xin chào, <?php echo $_smarty_tpl->tpl_vars['khachhang']->value['tenDN'];?>
</span></a>
          </div>
          <?php } else { ?>
          <div class="signup"><a title="Login" href="login.html"><span>Đăng ký</span></a></div>
          <span class="or"> | </span>
          <div class="login"><a title="Login" href="login.html"><span>Đăng nhập</span></a></div>
          <?php }?>
        </div>
        <!-- End Top Cart --> 
      </div>
    </div>
  </header>
  <!-- end header --> 
  <!-- Navbar -->
  <nav>
    <div class="container">
      <div class="nav-inner"> 
        
        <!-- mobile-menu -->
        <div class="hidden-desktop" id="mobile-menu">
          <ul class="navmenu">
            <li>
              <div class="menutop">
                <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                <h2>Menu</h2>
              </div>
              <ul style="display:none;" class="submenu">
                <li>
                  <ul class="topnav">
                    <li class="level0 nav-6 level-top first parent"> <a class="level-top" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
"> <span>Trang chủ</span> </a>
                    </li>
                    <?php echo $_smarty_tpl->tpl_vars['model']->value->viewcate(0);?>

                    
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!--End mobile-menu --> 

        <a class="logo-small" title="Đồ gỗ nội thất" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
"><img alt="Đồ gỗ nội thất" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/logo.png" width="75"></a>
        <ul id="nav" class="hidden-xs">
          <li class="level0 parent drop-menu">
          <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
" class="active"><span>Trang chủ</span> </a>
          </li>
        <?php echo $_smarty_tpl->tpl_vars['model']->value->viewcate(0);?>

        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav --> 
  <div class="centersite">
  <?php if (isset($_smarty_tpl->tpl_vars['temp']->value)) {
echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['temp']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
}?>
  </div>
  <!-- Footer -->
  <footer class="footer">
   
    <div class="footer-middle container">
      <div class="col-md-3 col-sm-4">
        <div class="footer-logo"><a href="/" title="Logo"><img width="130" src="http://noithat.dev/templates/home/images/logo.png"/></a></div>
        <p>Công ty cổ phần phát triển Duy Tân - Phân phối nội thất đồ gỗ phòng khách, phòng ngủ, khách sạn, văn phòng, giường, tủ, bàn, ghế, kệ, mẫu mã cực kỳ đa dạng. Đồ gỗ nội thất uy tín, giá cả hợp lý, Chất lượng dịch vụ hoàn hảo. </p>
<!--         <div class="payment-accept">
          <div><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/payment-1.png" alt="payment"> <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/payment-2.png" alt="payment"> <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/payment-3.png" alt="payment"> <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/payment-4.png" alt="payment"></div>
        </div> -->
      </div>
      <div class="col-md-3 col-sm-4">
        <h4>Sản phẩm</h4>
        <ul class="links">
        <li class="level0 parent drop-menu"><a href="#"><span>Đồ gỗ nội thất</span></a></li>
        <li class="level0 parent drop-menu"><a href="http://noithat.dev/noi-that-phong-khach-1.html"><span>Nội thất phòng khách</span></a>
        </li><li class="level0 parent drop-menu"><a href="http://noithat.dev/noi-that-phong-bep-4.html"><span>Nội Thất Phòng Bếp</span></a></li>
        <li class="level0 parent drop-menu"><a href="http://noithat.dev/noi-that-phong-ngu-15.html"><span>Nội thất phòng ngủ</span></a> </li>
        <li class="level0 parent drop-menu"><a href="http://noithat.dev/cau-thang-17.html"><span>Cầu thang</span></a></li>

        </ul>
      </div>
      
      <div class="col-md-3 col-sm-4">
        <h4>Liên kết</h4>
        <ul class="links">
          <li> <a title="tai game dien thoai" href="http://taigamedienthoai.pro/">tai game dien thoai</a> </li> 
          <li>  <a title="tai game android" href="http://gameandroid.in/">tai game android</a> </li> 
          <li>  <a title="ket qua xo so" href="http://www.mxoso.com/">ket qua xo so</a>  </li> 

          <li>  <a href="http://quangcaophucvinh.com/" title="lam bien quang cao">lam bien quang cao</a></li> 
  <li>  <a href="http://quangcaophucvinh.com/" title="lam bien quang cao">lam bien quang cao dep</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-4">
        <h4>Liên hệ</h4>
        <div class="contacts-info">
          <address>
          <i class="add-icon">&nbsp;</i>Số 5/530  Đường Láng <br/>  &nbsp;Đống Đa - Hà Nội
          </address>
          <div class="phone-footer"><i class="phone-icon">&nbsp;</i> 1900.1000</div>
          <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="mailto:noithatdt.jsc@gmail.com">noithatdt.jsc@gmail.com</a> </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom container">
      <!-- <div class="col-sm-5 col-xs-12 coppyright"> &copy; 2015 . All Rights Reserved.</div> -->
    </div>
  </footer>
  <!-- End Footer --> 
</div>


<!-- JavaScript --> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
js/jquery.min.js"><?php echo '</script'; ?>
> 
           
<?php echo '<script'; ?>
>
$(document).ready(function(e) {
  $('#search').keyup(function(e) {
    $('.centersite').html('<div style="text-align:center;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/loading.gif" width="32" height="32"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/loading.gif" width="32" height="32"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/loading.gif" width="32" height="32"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/loading.gif" width="32" height="32"></div>');
    $.get('<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
ajaxsearch.php', $('#frmsearch').serialize(),function(data){
      $('.centersite').html(data);
    });
  });
});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
js/bootstrap.min.js"><?php echo '</script'; ?>
> 

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
js/jquery.jcarousel.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
js/cloudzoom.js"><?php echo '</script'; ?>
> 

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
js/common.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
js/revslider.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
js/owl.carousel.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type='text/javascript'>
  jQuery(document).ready(function(){
  jQuery('#rev_slider_4').show().revolution({
  dottedOverlay: 'none',
  delay: 5000,
  startwidth: 1170,
  startheight: 300,

  hideThumbs: 200,
  thumbWidth: 200,
  thumbHeight: 50,
  thumbAmount: 2,

  navigationType: 'thumb',
  navigationArrows: 'solo',
  navigationStyle: 'round',

  touchenabled: 'on',
  onHoverStop: 'on',

  swipe_velocity: 0.7,
  swipe_min_touches: 1,
  swipe_max_touches: 1,
  drag_block_vertical: false,

  spinner: 'spinner0',
  keyboardNavigation: 'off',

  navigationHAlign: 'center',
  navigationVAlign: 'bottom',
  navigationHOffset: 0,
  navigationVOffset: 20,

  soloArrowLeftHalign: 'left',
  soloArrowLeftValign: 'center',
  soloArrowLeftHOffset: 20,
  soloArrowLeftVOffset: 0,

  soloArrowRightHalign: 'right',
  soloArrowRightValign: 'center',
  soloArrowRightHOffset: 20,
  soloArrowRightVOffset: 0,

  shadow: 0,
  fullWidth: 'on',
  fullScreen: 'off',

  stopLoop: 'off',
  stopAfterLoops: -1,
  stopAtSlide: -1,

  shuffle: 'off',

  autoHeight: 'off',
  forceFullWidth: 'on',
  fullScreenAlignForce: 'off',
  minFullScreenHeight: 0,
  hideNavDelayOnMobile: 1500,

  hideThumbsOnMobile: 'off',
  hideBulletsOnMobile: 'off',
  hideArrowsOnMobile: 'off',
  hideThumbsUnderResolution: 0,

  hideSliderAtLimit: 0,
  hideCaptionAtLimit: 0,
  hideAllCaptionAtLilmit: 0,
  startWithSlide: 0,
  fullScreenOffsetContainer: ''
  });
  });
<?php echo '</script'; ?>
>
</body>
</html>

<?php }
}
?>