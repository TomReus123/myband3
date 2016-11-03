<?php /* Smarty version Smarty-3.1.18, created on 2016-11-01 14:18:25
         compiled from "views\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1031457fe2d635b4b88-39148322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca421bab107b2b775730a59672b523b524b4180f' => 
    array (
      0 => 'views\\about.tpl',
      1 => 1478006239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1031457fe2d635b4b88-39148322',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fe2d637014a4_02749905',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe2d637014a4_02749905')) {function content_57fe2d637014a4_02749905($_smarty_tpl) {?><div class="wrapper">
	<div id="berichten">
	<h1>De rijke geschiedenis van Licor 43:</h1>
	<hr>
	<section>
		<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
			<h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
			<content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</content><br>
			<img src=image/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
>
			<hr>
		<?php } ?>
	</section>
	<span><a id="terugKnop">&#8593;</a></span>
</div><?php }} ?>
