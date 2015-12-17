<?php /* Smarty version 3.1.27, created on 2015-12-11 11:21:26
         compiled from "templates\home\chitiet.html" */ ?>
<?php
/*%%SmartyHeaderCode:23595566aa3a61d3d68_79624473%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84aca5028c6d486f41ae920ed4e5fa7e02d446d0' => 
    array (
      0 => 'templates\\home\\chitiet.html',
      1 => 1449829221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23595566aa3a61d3d68_79624473',
  'variables' => 
  array (
    'chitiet' => 0,
    'model' => 0,
    'lct' => 0,
    'config' => 0,
    'id' => 0,
    'loaisp' => 0,
    'hinhanh' => 0,
    'elem' => 0,
    'it' => 0,
    'mt' => 0,
    'url' => 0,
    'spmoi' => 0,
    'sp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566aa3a62a2e11_62926060',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566aa3a62a2e11_62926060')) {
function content_566aa3a62a2e11_62926060 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23595566aa3a61d3d68_79624473';
?>
<?php echo '<script'; ?>
 type="text/javascript" src="http://noithat.dev/templates/home/js/jquery.min.js"><?php echo '</script'; ?>
> 
<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<ul>
				<li class="home"> <a href="index.html" title="Trang chủ">Trang chủ</a><span>/</span></li>
				<li class=""> 
				<?php if (isset($_smarty_tpl->tpl_vars['chitiet']->value) && $_smarty_tpl->tpl_vars['chitiet']->value) {?>
				<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable($_smarty_tpl->tpl_vars['chitiet']->value['id_loai'], null, 0);?>
				<?php $_smarty_tpl->tpl_vars['lct'] = new Smarty_Variable($_smarty_tpl->tpl_vars['model']->value->selectone('loaisp',"id = '".((string)$_smarty_tpl->tpl_vars['id']->value)."'"), null, 0);?>
				<?php $_smarty_tpl->tpl_vars['loaisp'] = new Smarty_Variable($_smarty_tpl->tpl_vars['lct']->value['tenLoai'], null, 0);?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
index.php?controller=loaisp&cat=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['loaisp']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['loaisp']->value;?>
</a>
				<span>/</span></li>
				<li class="category13"><strong> <?php echo $_smarty_tpl->tpl_vars['chitiet']->value['tenSP'];?>
 </strong></li>
				<?php }?>
			</ul>
		</div>
	</div>
</div>
<!-- end breadcrumbs --> 
<!-- main-container -->
<section class="main-container col1-layout">
	<div class="main container">
		<?php if (isset($_smarty_tpl->tpl_vars['chitiet']->value) && $_smarty_tpl->tpl_vars['chitiet']->value) {?>
		<div class="col-main">
			<div class="row">
				<div class="product-view wow">
					<div class="product-essential">
						<form action="" method="post" id="product_addtocart_form">
							<div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
								<ul class="moreview" id="moreview">
									<?php
$_from = $_smarty_tpl->tpl_vars['hinhanh']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['elem'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['elem']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elem']->value) {
$_smarty_tpl->tpl_vars['elem']->_loop = true;
$foreach_elem_Sav = $_smarty_tpl->tpl_vars['elem'];
?>
									<?php
$_from = $_smarty_tpl->tpl_vars['elem']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['it'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['it']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['it']->value) {
$_smarty_tpl->tpl_vars['it']->_loop = true;
$foreach_it_Sav = $_smarty_tpl->tpl_vars['it'];
?>
									<li class="moreview_thumb"> <img class="moreview_thumb_image" src="<?php echo $_smarty_tpl->tpl_vars['it']->value;?>
"> <img class="moreview_source_image" src="<?php echo $_smarty_tpl->tpl_vars['it']->value;?>
" alt=""> <span class="roll-over"></span> <img style="position: absolute;" class="zoomImg" src="<?php echo $_smarty_tpl->tpl_vars['it']->value;?>
"></li>
									<?php
$_smarty_tpl->tpl_vars['it'] = $foreach_it_Sav;
}
?>
									<?php
$_smarty_tpl->tpl_vars['elem'] = $foreach_elem_Sav;
}
?>
								<!-- 		
									<li class="moreview_thumb thumb_2 moreview_thumb_active"> <img class="moreview_thumb_image" src="<?php echo $_smarty_tpl->tpl_vars['it']->value;?>
"> <img class="moreview_source_image" src="<?php echo $_smarty_tpl->tpl_vars['it']->value;?>
" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="<?php echo $_smarty_tpl->tpl_vars['it']->value;?>
"></li>
									<li class="moreview_thumb thumb_3"> <img class="moreview_thumb_image" src="<?php echo $_smarty_tpl->tpl_vars['it']->value;?>
"> <img class="moreview_source_image" src="<?php echo $_smarty_tpl->tpl_vars['it']->value;?>
" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="<?php echo $_smarty_tpl->tpl_vars['it']->value;?>
"></li> -->

								</ul>
								<div class="moreview-control"> <a style="right: 42px;" href="javascript:void(0)" class="moreview-prev"></a> <a style="right: 42px;" href="javascript:void(0)" class="moreview-next"></a> </div>
							</div>

							<!-- end: more-images -->

							<div class="product-shop col-lg-6 col-sm-6 col-xs-12">
								<div class="product-name">
									<h1><?php echo $_smarty_tpl->tpl_vars['chitiet']->value['tenSP'];?>
</h1>
								</div>
								<div class="ratings">
									 <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/like.png"/>
								</div>
								<p class="availability in-stock">
									<span>
										<?php if ($_smarty_tpl->tpl_vars['chitiet']->value['soLuong'] != 0) {?>
										Còn hàng
										<?php } else { ?>
										Ngừng kinh doanh
										<?php }?>
									</span>
								</p>
								<div class="price-block">
									<div class="price-box">
										<p class="special-price"> <span class="price-label">Giá bán: </span> <span class="price"> <?php echo number_format($_smarty_tpl->tpl_vars['chitiet']->value['donGia']);?>
 VNĐ </span> </p>

									</div>
								</div>
								<div class="short-description">
									<h2>Mô tả tổng quan</h2>
									<!-- lấy dòng đầu tiên của thẻ <p> -->
									<?php $_smarty_tpl->tpl_vars['mt'] = new Smarty_Variable(explode('</p>',$_smarty_tpl->tpl_vars['chitiet']->value['moTa']), null, 0);?>
									<?php echo $_smarty_tpl->tpl_vars['mt']->value[0];?>

									<!-- end -->
									<?php if ($_smarty_tpl->tpl_vars['chitiet']->value['chatLieu'] != '') {?>
									<p>Chất liệu: <?php echo $_smarty_tpl->tpl_vars['chitiet']->value['chatLieu'];?>
</p>
									<?php }?>

									<?php if ($_smarty_tpl->tpl_vars['chitiet']->value['kichThuoc'] != '') {?>
									<p>Kích thước: <?php echo $_smarty_tpl->tpl_vars['chitiet']->value['kichThuoc'];?>
</p>
									<?php }?>

									<?php if ($_smarty_tpl->tpl_vars['chitiet']->value['xuatXu'] != '') {?>
									<p>Xuất xứ: <?php echo $_smarty_tpl->tpl_vars['chitiet']->value['xuatXu'];?>
</p>
									<?php }?>

									<?php if ($_smarty_tpl->tpl_vars['chitiet']->value['mauSon'] != '') {?>
									<p>Màu sơn: <?php echo $_smarty_tpl->tpl_vars['chitiet']->value['mauSon'];?>
</p>
									<?php }?>

								</div>
								<div class="add-to-box">
									<div class="add-to-cart">
										<label for="qty">Số lượng:</label>
										<div class="pull-left">
											<div class="custom pull-left">
												<button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
												
												<input type="text" class="input-text qty" title="Số lượng" value="1" maxlength="12" id="qty" name="qty">
												<button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
											</div>
										</div>
										<?php echo '<script'; ?>
>
											$(document).ready(function(e) {
												$('#themvaogio').click(function(e) {
													var qty = $('#qty').val();
													window.location.href='/order/<?php echo $_smarty_tpl->tpl_vars['chitiet']->value['id'];?>
/'+qty;
												});
											}); 		
										<?php echo '</script'; ?>
>

										<button id="themvaogio"  class="button btn-cart" title="Thêm vào giỏ" type="button"><span><i class="icon-basket"></i>Thêm vào giỏ</span></button>
									</div>
								</div>
							</form>
						</div>
						<div class="product-collateral">
							<div class="col-sm-12 wow">
								<ul id="product-detail-tab" class="nav nav-tabs product-tabs">
									<li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Mô tả sản phẩm </a> </li>
									<li> <a href="#reviews_tabs" data-toggle="tab">Nhận xét - đánh giá</a> </li>
									
								</ul>
								<div id="productTabContent" class="tab-content">
									<div class="tab-pane fade in active" id="product_tabs_description">
										<div class="std">
											<p>
												<?php echo $_smarty_tpl->tpl_vars['chitiet']->value['moTa'];?>

											</p>
										</div>
									</div>
									<div class="tab-pane fade" id="reviews_tabs">
										<div class="box-collateral box-reviews" id="customer-reviews">
											<div id="fb-root"></div>
											<?php echo '<script'; ?>
>(function(d, s, id) {
											  var js, fjs = d.getElementsByTagName(s)[0];
											  if (d.getElementById(id)) return;
											  js = d.createElement(s); js.id = id;
											  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=1047043388690374";
											  fjs.parentNode.insertBefore(js, fjs);
											}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
											<div class="fb-comments" data-href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" data-width="1140" data-numposts="5"></div>

										</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="box-additional">
									<div class="related-pro wow">
										<div class="slider-items-products">
											<div class="new_title center">
												<h2>Sản phẩm mởi</h2>
											</div>
											<div id="related-products-slider" class="product-flexslider hidden-buttons">
												<div class="slider-items slider-width-col4"> 
													<?php
$_from = $_smarty_tpl->tpl_vars['spmoi']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
$foreach_sp_Sav = $_smarty_tpl->tpl_vars['sp'];
?>
													<!-- Item -->
													<div class="item">
														<div class="col-item">
															<div class="sale-label sale-top-right">NEW</div>
															<div class="images-container"> <a class="product-image" title="<?php echo $_smarty_tpl->tpl_vars['sp']->value['tenSP'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['model']->value->alias($_smarty_tpl->tpl_vars['sp']->value['tenSP']);?>
_<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
.html"> <img style="width:270px;height:328px;" src="<?php echo $_smarty_tpl->tpl_vars['sp']->value['hinhAnh'];?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['sp']->value['tenSP'];?>
" /> </a></a>
																<div class="actions">
																	<div class="actions-inner">
																		<button type="button" title="Thêm vào giở" class="button btn-cart"><span>Thêm vào giỏ</span></button>
																		<ul class="add-to-links">
																			<li><a title="" class="link-wishlist" href="<?php echo $_smarty_tpl->tpl_vars['model']->value->alias($_smarty_tpl->tpl_vars['sp']->value['tenSP']);?>
_<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
.html"><span></span></a></li>
																			<li><a title="" class="link-compare" href="<?php echo $_smarty_tpl->tpl_vars['model']->value->alias($_smarty_tpl->tpl_vars['sp']->value['tenSP']);?>
_<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
.html"><span></span></a></li>
																		</ul>
																	</div>
																</div>
																<div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="<?php echo $_smarty_tpl->tpl_vars['model']->value->alias($_smarty_tpl->tpl_vars['sp']->value['tenSP']);?>
_<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
.html"><span><span></span></span></a> </div>
															</div>
															<div class="info">
																<div class="info-inner">
																	<div class="item-title"> <a href="<?php echo $_smarty_tpl->tpl_vars['model']->value->alias($_smarty_tpl->tpl_vars['sp']->value['tenSP']);?>
_<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['sp']->value['tenSP'];?>
"> <?php echo $_smarty_tpl->tpl_vars['sp']->value['tenSP'];?>
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
 VND</span> </p>
																		</div>
																	</div>
																	<!--item-content--> 
																</div>
																<!--info-inner--> 

																<!--actions-->

																<div class="clearfix"> </div>
															</div>
														</div>
													</div>
													<!-- End Item --> 
													<?php
$_smarty_tpl->tpl_vars['sp'] = $foreach_sp_Sav;
}
?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</section>
	<!--End main-container --> 
<?php }
}
?>