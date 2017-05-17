<?php /* Smarty version Smarty-3.1.7, created on 2017-05-17 12:30:42
         compiled from "D:\OpenServer\domains\vtigercrm6.5.kg\includes\runtime/../../layouts/vlayout\modules\Vtiger\uitypes\StringDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4673591c18420f3b82-09109578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8e0370953210a15ee76956c0760db5dbb9c8922' => 
    array (
      0 => 'D:\\OpenServer\\domains\\vtigercrm6.5.kg\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\uitypes\\StringDetailView.tpl',
      1 => 1450875195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4673591c18420f3b82-09109578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_591c1842161d5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591c1842161d5')) {function content_591c1842161d5($_smarty_tpl) {?>




<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>


<?php }} ?>