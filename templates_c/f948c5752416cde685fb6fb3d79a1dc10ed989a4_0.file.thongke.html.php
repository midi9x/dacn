<?php /* Smarty version 3.1.27, created on 2015-12-20 20:17:02
         compiled from "C:\xampp\htdocs\dacn\templates\admin\thongke.html" */ ?>
<?php
/*%%SmartyHeaderCode:76305676aa4e876e37_74501102%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f948c5752416cde685fb6fb3d79a1dc10ed989a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dacn\\templates\\admin\\thongke.html',
      1 => 1450617408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76305676aa4e876e37_74501102',
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5676aa4e87acb7_68181090',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5676aa4e87acb7_68181090')) {
function content_5676aa4e87acb7_68181090 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '76305676aa4e876e37_74501102';
?>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h3>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/index.php">Home</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-fw fa-bar-chart"></i> Báo cáo thống kê
                    </li>
                </ol>
            </h3>
        </div>
    </div>
</div>

<!-- /.row -->
<!-- Doanh số bán hàng theo
    năm
    quý
    tháng
    tuần
    custom ngày
    sản phẩm
     --><?php }
}
?>