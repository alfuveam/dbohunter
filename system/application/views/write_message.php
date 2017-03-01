<?php 
	error(validation_errors());
	echo form_open('msg/write/'.$to);
	
	if(!empty($to) && empty($_POST)) {
		$_POST['to'] = $to;
	}
?>
	<div class='message'>
		<div class='title'>Nova Mensagem</div>
		<div class='content'>
	<label>Para:</label>
		<input value='<?php echo set_value('to'); ?>' type='text' name='to'/><br/>
	<label>Título:</label>
		<input value='<?php echo set_value('title'); ?>'  type='text' style='width: 70%;' name='title'/><br/>
	<label>Mensagem:</label></label><textarea name='text' style='width: 70%;'><?php echo set_value('text'); ?></textarea><br/>
	<label>&nbsp;</label><input type='submit' value='Send'/>
		</div>
	</div>
	</form>