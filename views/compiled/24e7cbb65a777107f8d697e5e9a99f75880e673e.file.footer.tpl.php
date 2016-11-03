<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 12:07:48
         compiled from "views\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2900757ebd0db7b7060-39194055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24e7cbb65a777107f8d697e5e9a99f75880e673e' => 
    array (
      0 => 'views\\footer.tpl',
      1 => 1478084843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2900757ebd0db7b7060-39194055',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57ebd0db84b6e0_99916388',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ebd0db84b6e0_99916388')) {function content_57ebd0db84b6e0_99916388($_smarty_tpl) {?><footer>

</footer>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
	$(window).scroll(function(){ 
		if($(this).scrollTop() > 1080){
			$("#terugKnop").fadeIn();
		} 
		else{ $("#terugKnop").fadeOut();} 
	});
	
	$("#berichtenKnop").click(function(){
		$("html, body").animate({
			scrollTop: $("#berichten").offset().top
		}, 2000);
		
	});
	
	$("#berichtenKnop2").click(function(){
		$("html, body").animate({
			scrollTop: $("#berichten2").offset().top
		}, 2000);
		
	});
	
	$("#terugKnop").click(function(){
		$("html, body").animate({
			scrollTop: 0
		}, 2000);
	});

	$(document).ready(function() {
		$("[href]").each(function() {
			if (this.href == window.location.href) {
				$(this).addClass("active");
			}
		});
	});
</script>
</body>
</html><?php }} ?>
