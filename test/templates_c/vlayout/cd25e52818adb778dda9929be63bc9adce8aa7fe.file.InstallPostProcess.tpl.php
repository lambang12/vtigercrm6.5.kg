<?php /* Smarty version Smarty-3.1.7, created on 2017-05-17 10:16:09
         compiled from "D:\OpenServer\domains\vtigercrm6.5.kg\includes\runtime/../../layouts/vlayout\modules\Install\InstallPostProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30921591c14d9b54c67-45714865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd25e52818adb778dda9929be63bc9adce8aa7fe' => 
    array (
      0 => 'D:\\OpenServer\\domains\\vtigercrm6.5.kg\\includes\\runtime/../../layouts/vlayout\\modules\\Install\\InstallPostProcess.tpl',
      1 => 1450875195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30921591c14d9b54c67-45714865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VTIGER_VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_591c14d9bff7d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591c14d9bff7d')) {function content_591c14d9bff7d($_smarty_tpl) {?>
<br>
<center>
	<footer class="noprint">
		<div class="vtFooter">
			<p>
				<?php echo vtranslate('POWEREDBY');?>
 <?php echo $_smarty_tpl->tpl_vars['VTIGER_VERSION']->value;?>
 &nbsp;
				&copy; 2004 - <?php echo date('Y');?>
&nbsp&nbsp;
				<a href="//www.vtiger.com" target="_blank">vtiger.com</a>
				&nbsp;|&nbsp;
                                
				&copy; 2011 - <?php echo date('Y');?>
&nbsp&nbsp;
				<a href="//salesplatform.ru/" target="_blank">SalesPlatform.ru</a>
				
				
				
                                
			</p>
		</div>
	</footer>
</center>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php }} ?>