<?php /* Smarty version 3.0rc1, created on 2017-02-26 21:55:22
         compiled from "templates/dbu\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:396354f8aa595e5fa4-50312592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44b6de3192310bea4fcee5149eed8f521276beaf' => 
    array (
      0 => 'templates/dbu\\index.tpl',
      1 => 1421025402,
    ),
  ),
  'nocache_hash' => '396354f8aa595e5fa4-50312592',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="distribution" content="Global" />
		<meta name="author" content="Vean" />
		<meta name="robots" content="index,follow" />
		<meta name="description" content="Site Description." />
		<meta name="keywords" content="ots, open tibia server, ..." />
		<?php echo $_smarty_tpl->getVariable('head')->value;?>

	<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/dbu/main.css" />
<link href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/dbu/favicon.ico" rel="shortcut icon" />
</head>
<body>

<div class="pds">
	<div class="pds1"> 
	<div class="t1"><img src="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/dbu/img/header.png" alt="" />
	<div class="t2a">

	


<style type="text/css">
#imgpos {
position:absolute;
margin-left:190px;
margin-top:120px;
background-color: #070;
border: solid #050 2px;
border-radius: 10px;
}
#imgpox {
position:absolute;
margin-left:190px;
margin-top:150px;
background-color: #070;
border: solid #050 2px;
border-radius: 10px;
}
#imgpoz {
position:absolute;
margin-left:238px;
margin-top:160px;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #070), color-stop(.5, #060), color-stop(.5, #050), to(#040));
border-radius: 15px;
color: white;
}
#imgpor {
position:absolute;
margin-left:238px;
margin-top:160px;
width:110px;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #070), color-stop(.5, #060), color-stop(.5, #050), to(#040));
border-radius: 15px;
color: white;
}
#imgpot {
position:absolute;
margin-left:236px;
margin-top:170px;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #070), color-stop(.5, #060), color-stop(.5, #050), to(#040));
text-decoration: none;
line-height: 23px !important;
color: white;
font-size: 14px;
font-family: helvetica, arial;
border-radius: 5px;
}
#txtumm {
position:absolute;
margin-left:236px;
margin-top:10px;
text-decoration: none;
line-height: 23px !important;
color: white;
font-size: 18px;
font-family: helvetica, arial;
}
#txtdos {
position:absolute;
margin-left:229px;
margin-top:42px;
text-decoration: none;
line-height: 23px !important;
color: white;
font-size: 18px;
font-family: helvetica, arial;
}
</style>


         			<?php if ($_smarty_tpl->getVariable('logged')->value==1){?>
	<form action="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account/" method="post">
        <br><br>  
        <a href="#" id="imgpor"></a><br />
        </form>
           <?php }else{ ?>
        <form action="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account/login.ide" method="post">
        <br><br>
        <input onFocus="javascript:this.value=''" type="password" id="imgpos" name="name" onclick="clickclear(this, 'Numero da Conta')" onblur="clickrecall(this,'Numero da Conta')" />
        <br>                 
        <input onFocus="javascript:this.value=''" type="password" id="imgpox" name="pass" onclick="clickclear(this, 'Senha')" onblur="clickrecall(this,'Senha')" />   
        <br>
        <input type="Submit" id="imgpoz" name="Submit" value="LOGIN" /><br>
        <a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account/create" id="imgpot">Registrar</a><br />
        <a href="#" id="txtumm">Account</a><br />
        <a href="#" id="txtdos">Password</a><br />
        </form>
<?php }?>
	
	</div>
	</div>

       


	<div class="s">
	 <div class="s1">
		<div class="left">
            <ul class="m1"> 
                	<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
">&nbsp;&raquo; Inicio</a></li>
                	<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/regras">&nbsp;&raquo;  <font color="red"><b>Regras</b></a></font></li>
                	<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/home/archive">&nbsp;&raquo; Arquivo de Noticias</a></li>
                	<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/bugtracker">&nbsp;&raquo; Bug Tracker</a></li>
                	<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/update">&nbsp;&raquo;  Updates</a></li>
            </ul>

			<div class="mng">&nbsp;&nbsp;&nbsp;<img src="/templates/dbu/img/esfera.png" border="0"/>Conta</div>
            <ul class="m1">
				<?php if ($_smarty_tpl->getVariable('logged')->value==1){?>
						<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account">&nbsp;&raquo; <font color="blue"><b>Minha Conta</b></a></font></li>
					
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account/logout">&nbsp;&raquo; <font color="red"><b>Sair</b></a></font></li>
						</ul>
                                   <?php }else{ ?>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account/login/">&nbsp;&raquo; <font color="blue"><b>Entrar(Login)</b></a></font></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account/create">&nbsp;&raquo; <font color="red"><b>Criar Conta</b></a></font></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account/lost">&nbsp;&raquo; Perdeu sua Conta?</a></li>
                                   <?php }?>
			</ul>

			<div class="mng">&nbsp;&nbsp;&nbsp;<img src="/templates/dbu/img/esfera.png" border="0"/>Comunidade</div>
            <ul class="m1">
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/character/view">&nbsp;&raquo; Procurar Player</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/highscores">&nbsp;&raquo; Highscores</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/character/online">&nbsp;&raquo; Onlines no DBU?</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/guilds">&nbsp;&raquo; Guilds</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/guildwars">&nbsp;&raquo; Guild Wars</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/bans">&nbsp;&raquo; Banidos</a></li>
					<li><a href="">&nbsp;&raquo; Forum</a></li>
			</ul>
			
			<div class="mng">&nbsp;&nbsp;&nbsp;<img src="/templates/dbu/img/esfera.png" border="0"/>Info</div>
            <ul class="m1"> 
										<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/">&nbsp;&raquo; Server Info</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/downloads">&nbsp;&raquo; Downloads</a></li>
			</ul>
					
			<div class="mng">&nbsp;&nbsp;&nbsp;<img src="/templates/dbu/img/esfera.png" border="0"/>Shop</div>
            <ul class="m1">
				
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/pagseguro">&nbsp;&raquo; <b><font color="green"><blink>Premium Points</blink></font></b></a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/gifts">&nbsp;&raquo; <b><font color="red">Shop</font></b></a></li>
			</ul>
        
		</div>
	
	<div class="center">
	<div id="vt_header">
	<div class="tekst">

<?php echo $_smarty_tpl->getVariable('main')->value;?>


</div>
</div>
</div>



	<div class="right">
        <div class="mng2">Server Status</div>
			<div class="mngt" align="center">
<?php  $_smarty_tpl->tpl_vars['world'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('worlds')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['world']->key => $_smarty_tpl->tpl_vars['world']->value){
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['world']->key;
?>
								<div>
									<b>World:</b> <?php echo $_smarty_tpl->getVariable('world')->value;?>
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
		<div class="mng2">Download Direto!</div>
         <div class="mngt">
			<center><li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/downloads"><img src="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/dbu/img/baixar.png" border="0"/></a></li></center>
		 </div>
		 
		
		 
		<div class="mng2">Top 10 players</div>
         <div class="mngt">


                    <?php include_once ('C:\xampp\htdocs\dbohunter\templates\dbu\topserverplayers.php');?>

							
		 </div>

        
    </div>
		<div style="clear:both;"></div>
        </div>
	</div>
	<div id="vt_footer">
	<div><img src="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/dbu/img/footer.png"></div>
<div class="column second">
	<center>
					<p><font color="green">Personagens e ilustra&ccedil;&otilde;es originais Copyright 1984 por Akira Toriyama. Todos os direitos reservados.<center>2014-2015 Equipe Universe.<a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/avisolegal"><font color="blue">Aviso-Legal</a></font> <a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/termosdeuso"><font color="blue">Termos de Uso</a> </font><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/politicaeprivacidade"><font color="blue">Politica e Privacidade</a></font></center></p>
					<p><small>Page rendered in: <?php echo $_smarty_tpl->getVariable('renderTime')->value;?>
 <?php echo $_smarty_tpl->getVariable('admin')->value;?>
</small></p>
	</center>
				</div>

</div>
</div>
	</div>				
</body>
</html>