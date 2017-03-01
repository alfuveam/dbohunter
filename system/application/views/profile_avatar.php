<div class='message'>
	<div class='title'>Atualize o Seu Avatar</div>
	<div class='content'>
		<?php 
			@error($error);
			error(validation_errors());
			echo form_open_multipart('profile/avatar'); ?>
			<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Imagem:</label>
					<input type="file" name="userfile" size="20" />
					<br/>
					<label>&nbsp;</label><input value='off' type='checkbox' name='avatar'/> Deletar Avatar<br/>
					<label></label><input type='submit' value='Atualizar'/>
			</form>
	</div>
	<div class='bar'>Verifique se seu avatar é apropriado para todos os públicos.</div>
</div>

<?php 

	if(!empty($profile[0]['avatar']))
		echo "Current Avatar: <br/> <img src='".WEBSITE."/public/uploads/avatars/".$profile[0]['avatar']."'/>";
?>