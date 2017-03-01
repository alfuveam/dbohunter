<?php 
require("config.php");

$ide = new IDE;
try { $ide->loadInjections("home"); }catch(Exception $e) { error($e->getMessage());}
foreach($news['news'] as $value) {
	echo "<div class='news'>";
	echo "<div class='newsTitle'>".$value['title']."</div>";
	echo "<div class='newsBody'>".$value['body']."</div>";	
	echo "<div class='newsFooter'>";
	echo "<br/><br/>Postado em: ".date('d/m/Y á\s H:i', $value['time'])." </div>";
	echo "<div class='viewComments'><a href='".WEBSITE."/index.php/home/view/".$value['id']."'>Ver comentários</a></div>";
	echo "</div>";
}
echo "<div class='readArchive'><a href='".WEBSITE."/index.php/home/archive'>Notícias Antigas</a></div>";
?>