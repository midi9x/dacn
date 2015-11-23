<?php /* Smarty version 3.1.27, created on 2015-11-22 13:22:47
         compiled from "templates\home\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:109585651b397316592_36516517%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f63fae2b87ed1b860b96d7ce7fe4fd1c50f831c4' => 
    array (
      0 => 'templates\\home\\index.html',
      1 => 1448194966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109585651b397316592_36516517',
  'variables' => 
  array (
    'title' => 0,
    'config' => 0,
    'model' => 0,
    'row' => 0,
    'temp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5651b39741c151_39957606',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5651b39741c151_39957606')) {
function content_5651b39741c151_39957606 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '109585651b397316592_36516517';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {
echo $_smarty_tpl->tpl_vars['title']->value;
} else { ?>Đồ gỗ nội thất <?php }?></title>
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
"><img alt="Magento Commerce" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/logo.png"></a> 
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-7 col-sm-4 col-md-6 col-xs-12"> 
          <!-- Search-col -->
          <div class="search-box">
            <form action="#" method="POST" id="search_mini_form" name="Categories">
              <select name="category_id" class="cate-dropdown hidden-xs">
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
              <input type="text" placeholder="Nhập từ khóa cần tìm..." value="" maxlength="70" class="" name="search" id="search">
              <button id="submit-button" class="search-btn-bg"><span> &nbsp;&nbsp;&nbsp;Tìm&nbsp;&nbsp;&nbsp;</span></button>
            </form>
          </div>
          <!-- End Search-col --> 
        </div>
        <!-- Top Cart -->
        <div class="col-lg-3 col-sm-5 col-md-4 col-xs-12">
          <div class="top-cart-contain">
            <div class="mini-cart">
              <div class="basket dropdown-toggle"> <a href="shopping_cart.html"> <i class="icon-cart"></i>
                <div class="cart-box"><span class="title">Giỏ Hàng</span><span id="cart-total"> 2 </span></div>
                </a></div>
              <div>
              </div>
            </div>
          </div>

          <div class="signup"><a title="Login" href="login.html"><span>Đăng ký</span></a></div>
          <span class="or"> | </span>
          <div class="login"><a title="Login" href="login.html"><span>Đăng nhập</span></a></div>
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
        <!-- <div class="hidden-desktop" id="mobile-menu">
          <ul class="navmenu">
            <li>
              <div class="menutop">
                <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                <h2>Menu</h2>
              </div>
              <ul style="display:none;" class="submenu">
                <li>
                  <ul class="topnav">
                    <li class="level0 nav-6 level-top first parent"> <a class="level-top" href="#"> <span>Home</span> </a>
                    </li>
                    <li class="level0 nav-6 level-top"> <a class="level-top" href="#"> <span>Pages</span> </a>
                      <ul class="level0">
                        <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
                        <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
                        <li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>
                        <li class="level1 nav-10-4"> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>
                        <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a>
                          <ul class="level2">
                            <li class="level2 nav-2-1-1 first"><a href="checkout_method.html"><span>Checkout Method</span></a></li>
                            <li class="level2 nav-2-1-5 last"><a href="checkout_billing-info.html"><span>Checkout Billing Info</span></a></li>
                          </ul>
                        </li>
                        
                      </ul>
                    </li>
                    <li class="level0 nav-7 level-top parent"> <a class="level-top" href="grid.html"> <span>Fashion</span> </a> </li>
                    <li class="level0 nav-8 level-top parent"> <a class="level-top" href="grid.html"> <span>Women</span> </a> </li>
                    <li class="level0 parent drop-menu"><a href="blog.html"><span>Blog</span> </a>
                      <ul class="level1">
                        <li class="level1 first"><a href="blog_posts_table_view.html"><span>Table View</span></a></li>
                        <li class="level1 nav-10-2"> <a href="blog_single_post.html"> <span>Single Post</span> </a> </li>
                      </ul>
                    </li>
                    <li class="level0 nav-9 level-top last parent "> <a class="level-top" href="contact.html"> <span>Contact</span> </a> </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div> -->
        <!--End mobile-menu --> 

        <a class="logo-small" title="Đồ gỗ nội thất" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
"><img alt="Đồ gỗ nội thất" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/logo-small.png"></a>
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
  <?php if (isset($_smarty_tpl->tpl_vars['temp']->value)) {
echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['temp']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
}?>
  <!-- Footer -->
  <footer class="footer">
    <div class="brand-logo ">
      <div class="container">
        <div class="slider-items-products">
          <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col6"> 
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
/images/b-logo1.png" alt="Image"></a> </div>
              <!-- End Item --> 
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/b-logo2.png" alt="Image"></a> </div>
              <!-- End Item --> 
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/b-logo3.png" alt="Image"></a> </div>
              <!-- End Item --> 
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/b-logo4.png" alt="Image"></a> </div>
              <!-- End Item --> 
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/b-logo5.png" alt="Image"></a> </div>
              <!-- End Item --> 
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo6.png" alt="Image"></a> </div>
              <!-- End Item --> 
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/b-logo1.png" alt="Image"></a> </div>
              <!-- End Item --> 
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/b-logo4.png" alt="Image"></a> </div>
              <!-- End Item --> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-middle container">
      <div class="col-md-3 col-sm-4">
        <div class="footer-logo"><a href="index.html" title="Logo"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/footer-logo.png" alt="logo"></a></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu. </p>
        <div class="payment-accept">
          <div><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/payment-1.png" alt="payment"> <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/payment-2.png" alt="payment"> <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/payment-3.png" alt="payment"> <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/payment-4.png" alt="payment"></div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4">
        <h4>Shopping Guide</h4>
        <ul class="links">
          <li class="first"><a href="#" title="How to buy">How to buy</a></li>
          <li><a href="faq.html" title="FAQs">FAQs</a></li>
          <li><a href="#" title="Payment">Payment</a></li>
          <li><a href="#" title="Shipment&lt;/a&gt;">Shipment</a></li>
          <li><a href="delivery.html" title="delivery">Delivery</a></li>
          <li class="last"><a href="#" title="Return policy">Return policy</a></li>
        </ul>
      </div>
      
      <div class="col-md-3 col-sm-4">
        <h4>Information</h4>
        <ul class="links">
          <li class="first"><a href="sitemap.html" title="Site Map">Site Map</a></li>
          <li><a href="#/" title="Search Terms">Search Terms</a></li>
          <li><a href="#" title="Advanced Search">Advanced Search</a></li>
          <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
          <li><a href="#" title="Suppliers">Suppliers</a></li>
          <li class=" last"><a href="#" title="Our stores" class="link-rss">Our stores</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-4">
        <h4>Contact us</h4>
        <div class="contacts-info">
          <address>
          <i class="add-icon">&nbsp;</i>123 Main Street, Anytown, <br>
          &nbsp;CA 12345  USA
          </address>
          <div class="phone-footer"><i class="phone-icon">&nbsp;</i> +1 800 123 1234</div>
          <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="mailto:support@magikcommerce.com">support@magikcommerce.com</a> </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom container">
      <div class="col-sm-5 col-xs-12 coppyright"> &copy; 2015 . All Rights Reserved.</div>
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