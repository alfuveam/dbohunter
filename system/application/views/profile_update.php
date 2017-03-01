<?php 
	error(validation_errors());
	echo form_open("profile/update");
	
	if(!$_POST) {
		$_POST['rlname'] = $profile[0]['rlname'];
		$_POST['location'] = $profile[0]['location'];
		$_POST['about_me'] = $profile[0]['about_me'];
	}
?>
	<div class='message'>
	<div class='title'>Atualize Seu Perfil</div>
	<div class='content'>
	<label>Nome Completo</label>
		<input type='text' value='<?php echo set_value('rlname'); ?>' name='rlname'/><br/>
	<label>Localização</label>
		<input type='text' value='<?php echo set_value('location'); ?>' name='location'/><br/>
	<label>Sobre Você</label>
		<textarea name='about_me' cols="22"><?php echo set_value('about_me'); ?></textarea><br/>
	<label>&nbsp;</label><input type='submit' value='Atualizar'/>
	</form>
	</div>
	<div class='bar'>Verifique se o conteúdo é apropriado para todos os públicos.</div>
	</div>