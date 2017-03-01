<?php /* Smarty version 3.0rc1, created on 2015-01-29 16:44:07
         compiled from "templates/DBZOEvolution\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1912054ca6357e49dc8-10898283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4e9ee695982dcd49803fe692c5e6aed66e45f28' => 
    array (
      0 => 'templates/DBZOEvolution\\index.tpl',
      1 => 1422549380,
    ),
  ),
  'nocache_hash' => '1912054ca6357e49dc8-10898283',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="distribution" content="Global" />
		<meta name="author" content="Vean" />
		<meta name="robots" content="index,follow" />
		<meta name="description" content="Site Description." />
		<meta name="keywords" content="ots, open tibia server, ..." />
		<?php echo $_smarty_tpl->getVariable('head')->value;?>

		<title>.:: DBZ Hunter Games  ::.</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/junior001/main.css" />
		<link href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/junior001/" rel="shortcut icon" />
	</head>
	<!--Google-->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-15249041-2']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<body>
		<div id="vt_page">
			<div id="vt_header"></div>
			<div id="vt_container">
				<div id="vt_menu">
					<div id="vt_news_menu">
<center>
						<div class="header"></div></center>
						<ul>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
">Novidades</a></li>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/bugtracker">Bugs Reportados</a></li>
						</ul>
					</div>
					<div id="vt_account_menu"><center>
						<div class="serv"></div></center>
						<ul>
							<?php if ($_smarty_tpl->getVariable('logged')->value==1){?>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account/">Minha Conta</a></li>
							<li><a
href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php//account/logout">Sair</a></li>
                                                                                                                                                             <li><a
href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/pacc">Premium Points</a></li>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/vpacc">Vantagens Premmy</a></li>
							<li><a 
							<?php }else{ ?>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account/create">Criar Conta</a></li>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account/login">Login</a></li>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/pacc">Premmy Points</a></li>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/vpacc">Vantagens Premmy</a></li>
							<li><a 
						
							<?php }?>
						</ul>
					</div>
					<div id="vt_community_menu">
						<div class="comu"></div>
						<ul>
						    <li><a 
							<li><a href="http://Seu Forum Aqui/">Forum</a></li>	
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/character/view">Procurar Personagem</a></li>
							<li><a 
							<li><a 
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/video">Videos</a></li>	
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/houses/main">Casas</a></li>	
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/deaths">Ultimas Mortes</a></li>	
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/gallery">Galeria</a></li>	
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/highscores">Rank</a></li>	
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/profile/community">Comunidade</a></li>
		                 	<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/character/online">Online</a></li>

						</ul>
					</div>

							</ul>
					</div>
				<div id="vt_content">
					<?php echo $_smarty_tpl->getVariable('main')->value;?>

				</div>
				<div id="vt_panel">
					<div class="top">
						<div class="bot">
							<div id="vt_panel_buttons">
								<a href="http://www.mediafire.com/download/5g3p13t13p4oj0x/Hunter+Games+Instalador.exe" target="_blank" class="button">
									 <span></span>
								</a>
								
								<a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/gifts" class="button2"></a>
								<a href="https://www.facebook.com/OficialHunterGames" target="_blank" class="button1"></a></div>
							<div class="vt_panel_module"><center>
								<div class="header">Server Status</div></centeR>
								<?php  $_smarty_tpl->tpl_vars['world'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('worlds')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['world']->key => $_smarty_tpl->tpl_vars['world']->value){
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['world']->key;
?>
								<div>
									<b>Servidor:</b> <?php echo $_smarty_tpl->getVariable('world')->value;?>
 <br />
									<b>Status:</b>  
									<?php if ($_smarty_tpl->getVariable('serverOnline')->value[$_smarty_tpl->getVariable('id')->value]){?>
										<span style="color: green;font-weight: bold;">Online</span><br />
										<b>Uptime:</b> <?php echo $_smarty_tpl->getVariable('serverUptime')->value[$_smarty_tpl->getVariable('id')->value];?>
 <br />
										<b>Players:</b> <?php echo $_smarty_tpl->getVariable('serverPlayers')->value[$_smarty_tpl->getVariable('id')->value];?>
/<?php echo $_smarty_tpl->getVariable('serverMax')->value[$_smarty_tpl->getVariable('id')->value];?>
<br /><br />
									<?php }else{ ?>
										<span style="color: red;font-weight: bold;">Offline</span>
									<?php }?>
								</div>

								<?php }} ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="vt_footer">
				<div class="column first">
					<a href=""><img src="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/junior001/images/authornote.png" alt="" /></a>
				</div>
				<div class="column second">
					<p>© DBZ Online Copyright by Nintendo and CipSoft GmbH.				<p><small>Page rendered in: <?php echo $_smarty_tpl->getVariable('renderTime')->value;?>
 <?php echo $_smarty_tpl->getVariable('admin')->value;?>
</small></p>
				</div>
				<div class="column third">

				</div>
			</div>
		</div>
	</body>
</html>