<?php /* Smarty version Smarty-3.1.7, created on 2017-05-17 12:24:17
         compiled from "D:\OpenServer\domains\vtigercrm6.5.kg\includes\runtime/../../layouts/vlayout\modules\Vtiger\dashboards\DashboardHeaderIcons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28673591c16c1029667-62925492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8895cd4df18f10c4bcc9386098f6e041f9536158' => 
    array (
      0 => 'D:\\OpenServer\\domains\\vtigercrm6.5.kg\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\dashboards\\DashboardHeaderIcons.tpl',
      1 => 1450875195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28673591c16c1029667-62925492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SETTING_EXIST' => 0,
    'WIDGET' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_591c16c10ac63',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591c16c10ac63')) {function content_591c16c10ac63($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['SETTING_EXIST']->value){?>
<a name="dfilter">
	<i class='icon-cog' border='0' align="absmiddle" title="<?php echo vtranslate('LBL_FILTER');?>
" alt="<?php echo vtranslate('LBL_FILTER');?>
"/>
</a>
<?php }?>
<a href="javascript:void(0);" name="drefresh" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
&linkid=<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid');?>
&content=data">
	<i class="icon-refresh" hspace="2" border="0" align="absmiddle" title="<?php echo vtranslate('LBL_REFRESH');?>
" alt="<?php echo vtranslate('LBL_REFRESH');?>
"></i>
</a>
<?php if (!$_smarty_tpl->tpl_vars['WIDGET']->value->isDefault()){?>
	<a name="dclose" class="widget" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getDeleteUrl();?>
">
		<i class="icon-remove" hspace="2" border="0" align="absmiddle" title="<?php echo vtranslate('LBL_REMOVE');?>
" alt="<?php echo vtranslate('LBL_REMOVE');?>
"></i>
	</a>
<?php }?><?php }} ?>