<?php /* Smarty version 3.0rc1, created on 2014-09-15 14:43:35
         compiled from "templates/Dwarf\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173445416ec83a2dd37-25692247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8660fb0a5aac0c06686a73717d7ec598ea81701a' => 
    array (
      0 => 'templates/Dwarf\\index.tpl',
      1 => 1334361058,
    ),
  ),
  'nocache_hash' => '173445416ec83a2dd37-25692247',
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
/templates/Dwarf/main.css" />
<link href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/Dwarf/favicon.png" rel="shortcut icon" />
</head>
<body>

<div class="pds">
	<div class="pds1"> 
	<div class="t1"><img src="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/Dwarf/img/header.jpg" alt="" />
	</div> 
    <div class="t2">	

        <div class="form">
		 <form ACTION="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/character/view" METHOD=post>
		 <!--<INPUT NAME="name" VALUE=""SIZE=29 MAXLENGTH=29></TD><TD><INPUT TYPE=image NAME="Submit" SRC="'.$layout_name.'/images/buttons/sbutton_submit.gif" BORDER=0 WIDTH=120 HEIGHT=18>-->
            	Buscar Personaje: <input style="cursor: pointer; color:silver; width: 120px; height: 15px; text-align:center; font-size:9px; font-weight: bold;" name="name" MAXLENGTH=29/>&nbsp;&nbsp;&nbsp;
                <input type="submit" value="Aceptar"/> 
            </form>  
   </div>
      <div class="f-info"><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/account/create">Create Account</a> | <a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/account/login">Login</a> | <a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/highscores">Highscore</a> | <a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/p/v/donatesms">Donaciones SMS</a> | <a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/p/v/shopitem">Shop</a></div>
    </div>
	<div class="s">
	 <div class="s1">
		<div class="left">
			<div class="mng"><img src="http://images.wikia.com/tibia/en/images/3/31/Scroll_of_the_Stolen_Moment.gif" border="0"/>News</div>
            <ul class="m1"> 
                	<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
">&nbsp;&raquo; Latest news</a></li>
 					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/forum">&nbsp;&raquo; Forum</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/archive">&nbsp;&raquo; News archive</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/p/v/serverinfo">&nbsp;&raquo; Server Info</a></li>
            </ul>

			<div class="mng"><img src="http://images.wikia.com/tibia/en/images/b/b3/Copper_Key.gif" border="0"/>Account</div>
            <ul class="m1">
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account/login/">&nbsp;&raquo; Account Management</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account/create">&nbsp;&raquo; Create Account</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account/lost">&nbsp;&raquo; Lost Account?</a></li>
			</ul>

			<div class="mng"><img src="http://hexana.net/images/layout/community.gif" border="0"/>Community</div>
            <ul class="m1">
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/character/view">&nbsp;&raquo; Character Search</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/highscores">&nbsp;&raquo; Highscores</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/character/online">&nbsp;&raquo; Who is Online?</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/guilds">&nbsp;&raquo; Guilds</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/wars">&nbsp;&raquo; Guild Wars</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/support">&nbsp;&raquo; Team iTibia</a></li>
			</ul>
			
			<div class="mng"><img src="http://images.wikia.com/tibia/en/images/f/fb/Tibiacity_Encyclopedia.gif" border="0"/>Library</div>
            <ul class="m1"> 
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/p/v/serverinfo">&nbsp;&raquo; <font color="yellow">Server Info</font></a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/p/v/lottery">&nbsp;&raquo; <font color="yellow">Lottery System</font></a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/p/v/downloads">&nbsp;&raquo; <font color="white">Downloads</font></a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/p/v/mounts">&nbsp;&raquo; <font color="pink">Mounts</font></a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/p/v/addonbonus">&nbsp;&raquo; <font color="lightgreen">Addon Bonus</font></a></li>
			</ul>
					
			<div class="mng"><img src="http://images.wikia.com/tibia/en/images/1/13/Durin_the_Almighty_Doll.gif" border="0"/>Shop</div>
            <ul class="m1">
				
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/p/v/donatesms">&nbsp;&raquo; <b><font color="green"><blink>Donaciones SMS</blink></font></b></a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/p/v/donatebank">&nbsp;&raquo; <b><font color="yellow"><blink>Donaciones Banco</blink></font></b></a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/p/v/shopitem">&nbsp;&raquo; <b><font color="red">Shop Items</font></b></a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/p/v/monturas">&nbsp;&raquo; <b><font color="orange">Mounts Offer</font></b></a></li>
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
		<div class="mng2"><center>La Hora</center></div>
         <div class="mngt">
<center>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
day = new Date();
miVisit = day.getTime();
function clock() {
dayTwo = new Date();
hrNow = dayTwo.getHours();
mnNow = dayTwo.getMinutes();	
scNow = dayTwo.getSeconds();
miNow = dayTwo.getTime();
if (hrNow == 0) {
hour = 12;
ap = " AM";
} else if(hrNow <= 11) {
ap = " AM";
hour = hrNow;
} else if(hrNow == 12) {
ap = " PM";
hour = 12;
} else if (hrNow >= 13) {
hour = (hrNow - 12);
ap = " PM";
}
if (hrNow >= 13) {
hour = hrNow - 12;
}
if (mnNow <= 9) {
min = "0" + mnNow;
}
else (min = mnNow)
if (scNow <= 9) {
secs = "0" + scNow;
} else {
secs = scNow;
}
time = hour + ":" + min + ":" + secs + ap;
document.form.button.value = time;
self.status = time;
setTimeout('clock()', 1000);
}
function timeInfo() {
milliSince = miNow;
milliNow = miNow - miVisit;
secsVisit = Math.round(milliNow / 1000);
minsVisit = Math.round((milliNow / 1000) / 60);
alert("La Hora de iTibia Online.");
}
document.write("<form name=\"form\">"
+ "<input type=button value=\"Click for info!\""
+ " name=button onClick=\"timeInfo()\"></form>");
onError = null;
clock();
// End -->
</SCRIPT>
</center>
		 </div>	
        <div class="mng2">Estado de iTibia</div>
			<div class="mngt" align="center">

			<?php  $_smarty_tpl->tpl_vars['world'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('worlds')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['world']->key => $_smarty_tpl->tpl_vars['world']->value){
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['world']->key;
?>
								<div>
								
									<b>Estado:</b>  
									<?php if ($_smarty_tpl->getVariable('serverOnline')->value[$_smarty_tpl->getVariable('id')->value]){?>
										<span style="color: green;font-weight: bold;"><font size="3">Online</font></span><br />
										<b>Uptime: </b> <?php echo $_smarty_tpl->getVariable('serverUptime')->value[$_smarty_tpl->getVariable('id')->value];?>
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
		<div class="mng2">Donations</div>
         <div class="mngt">
			<center><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/p/v/donatesms"><img src="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/Dwarf/img/donatesms.png" border="0"/></a></center></br>
			<center><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/p/v/donatebank"><img src="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/Dwarf/img/donatebank.png" border="0"/></a></center></br>
			<center><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
index.php/p/v/paypal"><img src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0"/></a></center>
		 </div>
		 
		
		 
		<div class="mng2">Top 15 players</div>
         <div class="mngt">


                    <?php include_once ('C:\xampp\htdocs\templates\Dwarf\topserverplayers.php');?>

		 </div>        
		<div class="mng2">Top 5 Fragers</div>
         <div class="mngt">


                    <?php include_once ('C:\xampp\htdocs\templates\Dwarf\fragers.php');?>

		 </div>    
<div class="mng2">Votaciones</div>
         <div class="mngt">
<?php echo $_smarty_tpl->getVariable('poll')->value;?>

</div>
		 <div class="mng2">Facebook</div>
         <div class="mngt">
<center><iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FITibia-Online%2F240855662675711&amp;width=150&amp;height=350&amp;colorscheme=dark&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:150px; height:350px;" allowTransparency="true"></iframe></center>
		 </div>	
		 </div>
		<div style="clear:both;"></div>
        </div>
	</div>
	<div id="vt_footer">
	<div><img src="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/Dwarf/img/footer.png">
<div class="column second">
	<center>
					<p><small>Page rendered in: <?php echo $_smarty_tpl->getVariable('renderTime')->value;?>
 <?php echo $_smarty_tpl->getVariable('admin')->value;?>
</small></p>
	</center>
				</div>

</div>
</div>
	</div>
<script src="http://cdn.wibiya.com/Toolbars/dir_1161/Toolbar_1161640/Loader_1161640.js" type="text/javascript"></script><noscript><a href="http://www.wibiya.com/">Web Toolbar by Wibiya</a></noscript> 	
</body>
</html>