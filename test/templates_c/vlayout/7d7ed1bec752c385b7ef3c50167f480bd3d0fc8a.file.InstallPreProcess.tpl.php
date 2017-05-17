<?php /* Smarty version Smarty-3.1.7, created on 2017-05-17 10:16:09
         compiled from "D:\OpenServer\domains\vtigercrm6.5.kg\includes\runtime/../../layouts/vlayout\modules\Install\InstallPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30867591c14d96d9905-29380830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d7ed1bec752c385b7ef3c50167f480bd3d0fc8a' => 
    array (
      0 => 'D:\\OpenServer\\domains\\vtigercrm6.5.kg\\includes\\runtime/../../layouts/vlayout\\modules\\Install\\InstallPreProcess.tpl',
      1 => 1450875195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30867591c14d96d9905-29380830',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_591c14d976459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591c14d976459')) {function content_591c14d976459($_smarty_tpl) {?>
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row-fluid">
		<div class="span6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="span6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }} ?>