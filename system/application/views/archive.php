<?php 
echo "<center><h1>Novos Arquivos</h1></center>";
echo "<center>".$pages."</center>";
foreach($news['news'] as $value) {
	echo "<div class='news'>";
	echo "<div class='newsTitle'>".$value['title']."</div>";
	echo "<div class='newsBody'>".$value['body']."</div>";
	echo "<div class='newsFooter'>Postado em: ".UNIX_TimeStamp($value['time'])."</div>";
	echo "<div class='viewComments'><a href='".WEBSITE."/index.php/home/view/".$value['id']."'>Ver Comentários</a></div>";
	echo "</div>";
}
echo "<center>".$pages."</center>";
?>