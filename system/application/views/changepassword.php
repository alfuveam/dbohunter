<?php echo error(validation_errors()); ?>
<?php echo form_open("account/changepassword");?>
<label>Senha Atual:</label><input type='password' name='current'/><br/>
<label>Nova Senha:</label><input type='password' name='password'/><br/>
<label>Repita:</label><input type='password' name='repeat'/><br/>
<input type='submit' value='Mudar'/>
</form>