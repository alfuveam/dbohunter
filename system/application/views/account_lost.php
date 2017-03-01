<?php 
        alert("Esta interface permite que você altere a senha da conta. Você precisa fornecer o e-mail que tem sido utilizada ao registrar conta e chave de recuperação se você não tê-lo entre em contato com a administração deste servidor.");
        error(validation_errors());
        echo form_open("account/lost");
?>
        <div class='message'>
			<div class='title'>Recuperação De Conta</div>
			<div class='content'>
				<label>E-mail:</label>
				<input type='text' name='email'/><br/>
				<label>Recovery Key:</label>
				<input type='text' name='key'/><br/>
				<label>Nova senha:</label>
				<input type='password' name='password'/><br/>
				<label>Repita a Senha:</label>
				<input type='password' name='repeat'/><br/><br/>
				<button class="btn btn-primary" type="submit">Recuperar Conta</button>
			</div>
        </div>
        </form>