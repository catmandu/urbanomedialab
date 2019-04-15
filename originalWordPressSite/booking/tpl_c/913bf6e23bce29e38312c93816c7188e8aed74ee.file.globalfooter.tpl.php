<?php /* Smarty version Smarty-3.1.16, created on 2017-02-14 20:51:05
         compiled from "/hermes/bosweb26a/b2008/ipg.urbanomedialabcom/booking/tpl/globalfooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128213070258a3b4098b48a5-52181487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '913bf6e23bce29e38312c93816c7188e8aed74ee' => 
    array (
      0 => '/hermes/bosweb26a/b2008/ipg.urbanomedialabcom/booking/tpl/globalfooter.tpl',
      1 => 1485299298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128213070258a3b4098b48a5-52181487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Version' => 0,
    'GoogleAnalyticsTrackingId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58a3b4098bf271_49695483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a3b4098bf271_49695483')) {function content_58a3b4098bf271_49695483($_smarty_tpl) {?>

	</div><!-- close main-->

	<footer class="footer navbar">
		&copy; 2017 <a href="http://www.twinkletoessoftware.com">Twinkle Toes Software</a> <br/><a href="http://www.bookedscheduler.com">Booked Scheduler v<?php echo $_smarty_tpl->tpl_vars['Version']->value;?>
</a>
	</footer>

	<script type="text/javascript">
		init();
		$.blockUI.defaults.css.border = 'none';
		$.blockUI.defaults.css.top = '25%';
	</script>

	<?php if (!empty($_smarty_tpl->tpl_vars['GoogleAnalyticsTrackingId']->value)) {?>
		
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  
			  ga('create', '<?php echo $_smarty_tpl->tpl_vars['GoogleAnalyticsTrackingId']->value;?>
', 'auto');
			  ga('send', 'pageview');
			</script>
	<?php }?>
	</body>
</html><?php }} ?>
