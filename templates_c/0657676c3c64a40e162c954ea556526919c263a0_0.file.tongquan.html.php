<?php /* Smarty version 3.1.27, created on 2015-11-22 14:02:24
         compiled from "C:\xampp\htdocs\dacn\templates\admin\tongquan.html" */ ?>
<?php
/*%%SmartyHeaderCode:3228656516880c38667_35766691%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0657676c3c64a40e162c954ea556526919c263a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dacn\\templates\\admin\\tongquan.html',
      1 => 1446718333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3228656516880c38667_35766691',
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56516880c57a73_96683905',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56516880c57a73_96683905')) {
function content_56516880c57a73_96683905 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3228656516880c38667_35766691';
?>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-dashboard"></i> Tổng quan
                </li>
            </ol>
        </h3>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="fa fa-info-circle"></i>   
            Chào mừng bạn đến với trang quản trị. Trước tiên hãy <strong><u><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=cauhinh">thiết lập cấu hình</u></a></strong> cho website.
            
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">26</div>
                        <div>Góp ý mới!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=gopy">Xem chi tiết</a></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">124</div>
                        <div>Đơn hàng mới!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=donhang">Xem chi tiết</a></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">1300</div>
                        <div>Lượt truy cập trong ngày</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Xem chi tiết</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Lượt truy cập</h3>
            </div>
            <div class="panel-body">
                <iframe sandbox="allow-same-origin allow-scripts allow-popups allow-forms"
                                src="//stats.bizweb.vn/Report/ReportChart/27655?code=ac773556c53c7de7a37886755d4a2f92"
                                style="border: 0; width: 100%; height: 192px;"></iframe>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-shopping-cart fa-fw"></i> Đơn đặt hàng gần nhất</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Ngày đặt</th>
                                <th>Tên khách hàng</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#</td>
                                <td>Ngày đặt</td>
                                <td>Tên khách hàng</td>
                                <td>Tổng tiền</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>Ngày đặt</td>
                                <td>Tên khách hàng</td>
                                <td>Tổng tiền</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php?controller=donhang"">Xem tất cả đơn đặt hàng <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row --><?php }
}
?>