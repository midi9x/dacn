<?php /* Smarty version 3.1.27, created on 2015-11-22 19:19:58
         compiled from "C:\xampp\htdocs\dacn\templates\admin\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:235815651b2ee52aef2_83145555%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb7227ab7ddd5d3b1dc9fcfe54848a8110fae2df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dacn\\templates\\admin\\index.html',
      1 => 1448194796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235815651b2ee52aef2_83145555',
  'variables' => 
  array (
    'title' => 0,
    'config' => 0,
    'controller' => 0,
    'inc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5651b2ee8400a6_95538628',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5651b2ee8400a6_95538628')) {
function content_5651b2ee8400a6_95538628 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '235815651b2ee52aef2_83145555';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    
    <link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
templates/admin/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
templates/admin/css/custom.css" rel="stylesheet"/>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
templates/admin/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
templates/admin/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- tích hợp ckeditor -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
templates/admin/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
    <!-- thêm font awesome -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
templates/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
    .required{
        color: red;
        font-weight: bold;
    }
    .navbar-inverse {
         background-color: #3c8dbc;
        border-color: #3c8dbc;
    }
    nav.navbar.navbar-inverse.navbar-fixed-top
    {
         background-color: #3c8dbc;
    }
    nav.navbar.navbar-inverse.navbar-fixed-top a
    {
          color: #fff;
    }
    .top-nav>li>a:hover, .top-nav>li>a:focus, .top-nav>.open>a, .top-nav>.open>a:hover, .top-nav>.open>a:focus {
        color: #fff;
     background-color: #367fa9;
    }
    nav.navbar.navbar-inverse.navbar-fixed-top .top-nav>.open>.dropdown-menu>li>a {
        color: #000;
    }
    .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
        border-color: #3c8dbc;
    }
    .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
        border-color: #3c8dbc;
    }
    ul.nav.navbar-nav.side-nav a {
        color: #E2E1E1;
    }
    </style>
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Mobile menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php">Trang quản trị</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrator <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Cá nhân</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i>  Thoát</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li<?php if ($_smarty_tpl->tpl_vars['controller']->value == 'tongquan') {?> class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=tongquan"><i class="fa fa-fw fa-dashboard"></i> Tổng quan</a>
                    </li>
                    <li<?php if ($_smarty_tpl->tpl_vars['controller']->value == 'cauhinh') {?> class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=cauhinh"><i class="fa fa-fw fa-cog"></i> Cấu hình hệ thống</a>
                    </li>
                    <li<?php if ($_smarty_tpl->tpl_vars['controller']->value == 'sanpham') {?> class="active" <?php }?>>
                        <a href="javascript:;" data-toggle="collapse" data-target="#sanpham"><i class="fa fa-fw fa-file"></i> Quản lý sản phẩm <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="sanpham" class="collapse">
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=sanpham&action=them"><i class="fa fa-fw fa-plus-circle"></i> Thêm mới sản phẩm</a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=sanpham"><i class="fa fa-fw fa-list"></i> Danh sách sản phẩm</a>
                            </li>
                        </ul>
                    </li>
                    <li<?php if ($_smarty_tpl->tpl_vars['controller']->value == 'loaisp') {?> class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=loaisp"><i class="fa fa-fw fa-table"></i> Quản lý loại sản phẩm</a>
                    </li>
                    <li<?php if ($_smarty_tpl->tpl_vars['controller']->value == 'donhang') {?> class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=donhang"><i class="fa fa-fw fa-shopping-cart"></i> Quản lý đơn hàng</a>
                    </li>
                    <li<?php if ($_smarty_tpl->tpl_vars['controller']->value == 'hoadon') {?> class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=hoadon"><i class="fa fa-fw fa-pencil"></i> Quản lý hóa đơn</a>
                    </li>

                    <li<?php if ($_smarty_tpl->tpl_vars['controller']->value == 'gopy') {?> class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=gopy"><i class="fa fa-fw fa-reply"></i> Quản lý góp ý</a>
                    </li>
                    <li<?php if ($_smarty_tpl->tpl_vars['controller']->value == 'khachhang') {?> class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=khachhang"><i class="fa fa-fw fa-users"></i> Quản lý khách hàng</a>
                    </li>
                    <li<?php if ($_smarty_tpl->tpl_vars['controller']->value == 'nhanvien') {?> class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=nhanvien"><i class="fa fa-fw fa-user"></i> Quản lý nhân viên</a>
                    </li>
                     <li<?php if ($_smarty_tpl->tpl_vars['controller']->value == 'thongke') {?> class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=thongke"><i class="fa fa-fw fa-bar-chart"></i> Báo cáo - thống kê</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
              <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['inc']->value).(".html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</body>

</html>
<?php }
}
?>