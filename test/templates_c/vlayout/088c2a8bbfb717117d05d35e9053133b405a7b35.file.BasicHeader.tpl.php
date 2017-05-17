<?php /* Smarty version Smarty-3.1.7, created on 2017-05-17 12:24:13
         compiled from "D:\OpenServer\domains\vtigercrm6.5.kg\includes\runtime/../../layouts/vlayout\modules\Vtiger\BasicHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1401591c16bd3104b7-08307724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '088c2a8bbfb717117d05d35e9053133b405a7b35' => 
    array (
      0 => 'D:\\OpenServer\\domains\\vtigercrm6.5.kg\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\BasicHeader.tpl',
      1 => 1450875195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1401591c16bd3104b7-08307724',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_591c16bd3413d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591c16bd3413d')) {function content_591c16bd3413d($_smarty_tpl) {?>
<div class="navbar navbar-fixed-top  navbar-inverse noprint"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('MenuBar.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CommonActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>