<?php 
error(validation_errors());
echo form_open("account/editcomment/".$id);
if(empty($_POST['comment'])) $_POST['comment'] = $comment[0]['comment'];
echo "<b>&nbsp;&nbsp;&nbsp;&nbsp;Editar ".$id." Comentários.</br>";
	echo "&nbsp;&nbsp;&nbsp;<textarea name='comment'>".$_POST['comment']."</textarea><br/>";
		if($comment[0]['hide_char'] == 1)
			echo "<label>Esconder Character</label><input checked type='checkbox' name='hide' value='1'/><br/><br/>";
		else
			echo "&nbsp;&nbsp;&nbsp;&nbsp;Esconder Character</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='hide' value='1'/><br/><br/><br/>";
	echo "&nbsp;&nbsp;&nbsp;<input type='submit' value='Editar'/>";
echo "</form>";

?>