<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="distribution" content="Global" />
		<meta name="author" content="Vean" />
		<meta name="robots" content="index,follow" />
		<meta name="description" content="Site Description." />
		<meta name="keywords" content="ots, open tibia server, ..." />
		{$head}
		<title>.:: DBZ Hunter Games ::.</title>
		<link rel="stylesheet" type="text/css" href="{$path}/templates/junior001/main.css" />
		<link href="{$path}/templates/junior001/favicon.png" rel="shortcut icon" />
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
			<a href="{$path}"><div id="vt_header"></div></a>
			<div id="vt_container">
				<div id="vt_menu">
					<div id="vt_news_menu">
						<center><div class="header"></div></center>
						<ul>
							<li><a href="{$path}">Novidades</a></li>
							<li><a href="http://dbohg.ddns.net/Suporte.html" target="_blank">Suporte</a></li>
						</ul>
					</div>
					<div id="vt_account_menu">
						<center><div class="serv"></div></center>
						<ul>
							{if $logged == 1}
								<li><a href="{$path}/index.php/account/">Minha Conta</a></li>
								<li><a href="{$path}/index.php//account/logout">Sair</a></li>
								<li><a href="{$path}/index.php/p/v/pagseguro">Premium Points</a></li>
								<li><a href="http://dbohg.ddns.net//index.php/p/v/confirmacao" target="_blank">Confirmação</a></li>
								<li><a href="{$path}/index.php/p/v/vantagens_premmy">Vantagens Premium</a></li>
								<li><a href="{$path}/index.php/p/v/venda_de_chars">Venda De Chars</a></li>
							{else}
								<li><a href="{$path}/index.php/account/create">Criar Conta</a></li>
								<li><a href="{$path}/index.php/account/login">Login</a></li>
								<li><a href="{$path}/index.php/p/v/pagseguro">Premium Points</a></li>
								<li><a href="http://dbohg.ddns.net//index.php/p/v/confirmacao" target="_blank">Confirmação</a></li>
								<li><a href="{$path}/index.php/p/v/vantagens_premmy">Vantagens Premium</a></li>
								<li><a href="{$path}/index.php/p/v/venda_de_chars">Venda De Chars</a></li>
							{/if}
						</ul>
					</div>
					<div id="vt_community_menu">
						<div class="comu"></div>
						<ul>
		                 	<li><a href="{$path}/index.php/character/online">Players Online</a></li>
							<li><a href="{$path}/index.php/character/view">Procurar Personagem</a></li>
							<li><a href="{$path}/index.php/p/v/deaths">Últimas Mortes</a></li>
							<li><a href="{$path}/index.php/highscores">Rank</a></li>
							<li><a href="{$path}/index.php/p/v/fragers">Top Frags</a></li>
							<li><a href="{$path}/index.php/guilds">Guilds</a></li>
							<li><a href="{$path}/index.php/houses/main">Casas</a></li>
							<li><a href="{$path}/index.php/p/v/gallery">Galeria</a></li>
							<li><a href="{$path}/index.php/video">Vídeos</a></li>
						</ul>
					</div>
					<div id="vt_community_menu">
						<div class="info"></div>
						<ul>
		                 	<li><a href="http://dbohg.ddns.net/Infos/Personagens.html" target="_blank">Personagens</a></li>
		                 	<li><a href="http://dbohg.ddns.net/Infos/Loots.html" target="_blank">Loots</a></li>
		                 	<li><a href="http://dbohg.ddns.net/Infos/Helmets.html" target="_blank">Helmets</a></li>
		                 	<li><a href="http://dbohg.ddns.net/Infos/Armors.html" target="_blank">Armors</a></li>
		                 	<li><a href="http://dbohg.ddns.net/Infos/Legs.html" target="_blank">Legs</a></li>
		                 	<li><a href="http://dbohg.ddns.net/Infos/Boots.html" target="_blank">Boots</a></li>
		                 	<li><a href="http://dbohg.ddns.net/Infos/Gloves.html" target="_blank">Gloves</a></li>
		                 	<li><a href="http://dbohg.ddns.net/Infos/Swords.html" target="_blank">Swords</a></li>
		                 	<li><a href="http://dbohg.ddns.net/Infos/Utilitarios.html" target="_blank">Utilitários</a></li>
		                 	<li><a href="http://dbohg.ddns.net/Infos/Tasks.html" target="_blank">Tasks</a></li>
		                 	<li><a href="http://dbohg.ddns.net/Infos/Comandos.html" target="_blank">Comandos</a></li>
		                 	<li><a href="http://dbohg.ddns.net/Infos/Regras.html" target="_blank">Regras</a></li>
		                 	<li><a href="http://dbohg.ddns.net/Infos/Faq.html" target="_blank">FAQ</a></li>
						</ul>
					</div>
				</div>
				<div id="vt_content">
					{$main}
				</div>
				<div id="vt_panel">
					<div class="top">
						<div class="bot">
							<div id="vt_panel_buttons">
								<a href="http://www.mediafire.com/download/5g3p13t13p4oj0x/Hunter+Games+Instalador.exe" target="_blank" class="button">
									 <span></span>
								</a>
								<a href="{$path}/index.php/p/v/gifts" class="button2"></a>
							</div>
							<div class="vt_panel_module">
								<center><div class="header">Server Status</div></center>
								{foreach from=$worlds key=id item=world}
									<div>
										<b>&nbsp;&nbsp;Servidor:</b> {$world} <br />
										<b>&nbsp;&nbsp;Status:</b>  
										{if $serverOnline[$id]}
											<span style="color: green;font-weight: bold;">Online</span><br />
											<b>&nbsp;&nbsp;Uptime:</b> {$serverUptime[$id]} <br />
											<b>&nbsp;&nbsp;Players:</b> {$serverPlayers[$id]}/{$serverMax[$id]}<br /><br />
										{else}
											<span style="color: red;font-weight: bold;">Offline</span>
										{/if}
									</div>
								{/foreach}
							</div>
							<div id="vt_panel_buttons">
								<a href="https://www.facebook.com/OficialHunterGames" target="_blank"><img src="{$path}/templates/junior001/images/authornote.png" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="vt_footer">
				<div class="column first">
					&nbsp;
				</div>
				<div class="column second">
					<p>© DBZ Hunter Games Online - 2015				<p><small>Page rendered in: {$renderTime} {$admin}</small></p>
				</div>
				<div class="column third">

				</div>
			</div>
		</div>
	</body>
</html>