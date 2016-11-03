<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 11:56:39
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2255957f4f9e0049fa4-77881904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1477648587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2255957f4f9e0049fa4-77881904',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f4f9e026fa59_12331474',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
    'nr_pages' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4f9e026fa59_12331474')) {function content_57f4f9e026fa59_12331474($_smarty_tpl) {?><div class="wrapper">
	<div id="berichten">
	<h1>Nieuws over Licor 43:</h1>
	<input type="search" placeholder="Zoeken...">
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
			<h3><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date_created'];?>
</h3>
			<hr>
		<?php } ?>
	</section>
	<div class="next_page">
		<ul>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nr_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nr_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<li><a href="?action=home&page_nr=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
#berichten"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
			<?php }} ?>
		</ul>
	</div>
	</div>
	<span><a id="terugKnop">&#8593;</a></span>
</div><?php }} ?>
