<?php /* Smarty version 3.1.27, created on 2015-12-11 12:31:02
         compiled from "templates\home\timkiem.html" */ ?>
<?php
/*%%SmartyHeaderCode:29404566ab3f6b7c108_54106840%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9020fb7308bc6d6230d76970739b3e8358ae5a3f' => 
    array (
      0 => 'templates\\home\\timkiem.html',
      1 => 1449833267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29404566ab3f6b7c108_54106840',
  'variables' => 
  array (
    'key' => 0,
    'link' => 0,
    'page' => 0,
    'model' => 0,
    'danhsach' => 0,
    'sp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566ab3f6bf1411_33187890',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566ab3f6bf1411_33187890')) {
function content_566ab3f6bf1411_33187890 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29404566ab3f6b7c108_54106840';
?>

  <section class="main-container col2-left-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9 col-sm-push-3 wow">
          <div class="category-title">
            <h1>
            Tìm kiếm: <?php echo $_smarty_tpl->tpl_vars['key']->value;?>

            </h1>
          </div>
          <div class="category-products">
            <div class="toolbar">
              <div class="pager">
                <div class="pages">
                  <label>Trang:</label>
                  <?php echo $_smarty_tpl->tpl_vars['model']->value->viewpage($_smarty_tpl->tpl_vars['link']->value,$_smarty_tpl->tpl_vars['page']->value);?>

                </div>
              </div>
            </div>
            <ul class="products-grid">
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
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
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
        </section>
        <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow">
          <div class="side-nav-categories">
            <div class="block-title"> Danh mục </div>
            <!--block-title--> 
            <!-- BEGIN BOX-CATEGORY -->
            <div class="box-content box-category">
              <ul>
                <?php echo $_smarty_tpl->tpl_vars['model']->value->viewcate(0);?>

              </ul>
            </div>
            <!--box-content box-category--> 
          </div>
        </aside>
      </div>
    </div>
  </section>
<?php }
}
?>