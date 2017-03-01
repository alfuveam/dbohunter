<?php 
$GLOBALS['characters'] = $characters;
$ide = new IDE;
try { $ide->loadInjections("account"); } catch(Exception $e) { error($e->getMessage()); }
	echo "<div class='title'>Personagens de <a href='".url('profile/view/'.$_SESSION['nickname'])."'>".ucfirst($_SESSION['nickname'])."</a>!</div>";
	if($messages != 0)
		if($messages == 1)
			echo "<center><b>Você tem $messages nova(s) mensagen(s)! Clique <a href='".url('msg/inbox')."'>aqui</a> para ler!</b></center><br/>";
		else
			echo "<center><b>Você têm $messages nova(s) mensagen(s)! Clique <a href='".url('msg/inbox')."'>aqui</a> para ler!</b></center><br/>";
?>
<?php
	echo "<table class='table info' width='100%'>";
	echo "<tbody>";
	echo "<tr><td><center><b>Nome</b></center></td><td><center><b>Level</b></center></td><td><center><b>Ações</b></center></td></tr>";
	foreach($characters as $row) {
		echo "<tr class='highlight'><td><center><a href=\"".WEBSITE."/index.php/character/view/$row->name\">$row->name</a></center></td><td><center>$row->level</center></td><td><center><a href=\"".WEBSITE."/index.php/account/editcomment/$row->id\" class='tipsy' title='Editar Comentário'><img src='".WEBSITE."/public/images/edit.gif'/></a> <a href='#' onClick='if(confirm(\"Tem certeza?\")) window.location.href=\"".WEBSITE."/index.php/account/deletePlayer/$row->id\"' class='tipsy' title='Deletar Character'><img src='".WEBSITE."/public/images/false.gif'/></a></center></td></tr>";
	}
	echo "<tr><td colspan='3'><center><a href='".WEBSITE."/index.php/character/create_character'><button class='btn btn-info' onClick=\"window.location.href='".WEBSITE."/index.php/character/create_character';\">Criar personagem</button></a></center></td></tr>";
	echo "</tbody>";
	echo "</table>";
	
	echo "<div class='title'></div>";
	echo "<table class='table info' width='100%'>";
	echo "<tbody>";
	echo "<tr><td><center><a href='".WEBSITE."/index.php/account/changepassword'><button class='btn btn-info' onClick=\"window.location.href='".WEBSITE."/index.php/account/changepassword';\">Mudar Senha</button></a></center></td></tr>";
	echo "</tbody>";
	echo "</table>";
	
	echo "<div class='title'></div>";
	echo "<table class='table info' width='100%'>";
	echo "<tbody>";
	echo "<tr><td><b></b></td></tr>";
	echo "<tr><td><a href='".WEBSITE."/index.php/profile/update'>Editar Informações</a></td></tr>";
	echo "<tr><td><a href='".WEBSITE."/index.php/profile/avatar'>Editar Avatar</a></td></tr>";
	echo "<tr><td><a href='".WEBSITE."/index.php/msg/inbox'>Caixa De Entrada</a></td></tr>";
	echo "<tr><td><a href='".WEBSITE."/index.php/msg/outbox'>Caixa De Saída</a></td></tr>";
	echo "<tr><td><a href='".WEBSITE."/index.php/msg/write'>Escrever Nova</a></td></tr>";
	echo "</tbody>";
	echo "</table>";
	echo "<center><b>Você tem certeza que deseja sair?</b><br /><a href='".WEBSITE."/index.php/account/logout'><button class='btn btn-danger' onClick=\"window.location.href='".WEBSITE."/index.php/account/logout';\">Sair</button></a></center>";
if(empty($acc[0]['rlname']) || empty($acc[0]['location']) || empty($acc[0]['about_me']))
	alert("Você pode atualizar o perfil de sua conta <a href='".WEBSITE."/index.php/profile/update'><b>aqui</b></a>!");
?>