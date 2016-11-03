<?php /* Smarty version Smarty-3.1.18, created on 2016-11-01 13:25:07
         compiled from "views\schema.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18546581326f8b1d609-42066648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b295056efdd3a7f56de855f3a4990e7bb88eb837' => 
    array (
      0 => 'views\\schema.tpl',
      1 => 1478002774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18546581326f8b1d609-42066648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581326f8c88d96_14228384',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581326f8c88d96_14228384')) {function content_581326f8c88d96_14228384($_smarty_tpl) {?><div class="wrapper">
	<div id="berichten">
	<h1>De licor 43 bus:</h1>
	<h3>In de eerste 10 weken van 2017 zal er een echte licor 43 bus door Nederland touren.<br>
	Deze bus deelt gratis samples uit van de nieuwste en lekkerste cocktails van licor 43!<br>
	Kijk in het onderstaande schema wanneer de bus bij jou in de buurt staat!</h3>
	<hr>
	<section>
		<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
			<h1>Week <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
</h1>
			<content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</content><br>
			<content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
</content><br>
			<h3><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date_created'];?>
</h3>
			<hr>
		<?php } ?>
	</section>
	<span><a id="terugKnop">&#8593;</a></span>
</div><?php }} ?>
