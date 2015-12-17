<?php /* Smarty version 3.1.27, created on 2015-12-08 02:46:43
         compiled from "templates\home\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:8468566636836ccaa1_84879751%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1f168b1f414ee6214b721a42fb3accc935cf6cd' => 
    array (
      0 => 'templates\\home\\login.html',
      1 => 1448365593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8468566636836ccaa1_84879751',
  'variables' => 
  array (
    'title' => 0,
    'config' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56663683726836_72694461',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56663683726836_72694461')) {
function content_56663683726836_72694461 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8468566636836ccaa1_84879751';
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
</head>
<body>
   <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Đăng nhập</div>
                        
                    </div>     
                    <form action="" method="post">
                        <div style="padding-top:30px" class="panel-body" >
                            <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
                                <div id="login-alert" class="alert alert-danger col-sm-12">
                                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                                </div>
                            <?php }?>
                            <form id="loginform" class="form-horizontal" role="form">
                                        
                                <div style="margin-bottom: 25px" class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input id="login-username" type="text" class="form-control" name="tenDN" value="" placeholder="Tên đăng nhập">                                        
                                        </div>
                                    
                                <div style="margin-bottom: 25px" class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input id="login-password" type="password" class="form-control" name="matKhau" placeholder="Mật khẩu">
                                        </div>
                                        

                                    
                                <div class="input-group">
                                          <div class="checkbox">
                                            <label>
                                              <input id="login-remember" type="checkbox" name="remember" value="1"> Ghi nhớ
                                            </label>
                                          </div>
                                        </div>


                                    <div style="margin-top:10px" class="form-group">
                                        <!-- Button -->

                                        <div class="col-sm-12 controls">
                                          <button id="btn-login" href="#" class="btn btn-success">Đăng nhập  </button>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-12 control">
                                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            <a style="padding-right:40px;" href="#">Quên mật khẩu?</a>
                                            <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">Đăng ký</a>
                                            
                                            </div>
                                        </div>
                                    </div>    
                                </form>   
                            </div>                     
                        </div>  
                    </form>
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Đăng ký</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Đăng nhập</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Lỗi:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="icode" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                        <span style="margin-left:8px;">or</span>  
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div>                                           
                                        
                                </div>
                                
                                
                                
                            </form>
                         </div>
                    </div>

                
         </div> 
    </div>
    
    </body>
    </html><?php }
}
?>