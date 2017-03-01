<form action="envia_dados.php" method="POST">
	<table width="100%" cellspacing="0" cellpadding="0">
		<tr>
			<td align="center"><h2>Contate-nos por e-mail!</h2></td>
		</tr>
		<tr> 
			<td align="center"><input type="text" name="nome" placeholder="Nome" size="50" maxlength="50"></td>
		</tr>
		<tr> 
			<td align="center"><input type="text" name="sobrenome" placeholder="Sobrenome" size="50" maxlength="50"></td>
		</tr>
		<tr> 
			<td align="center"><input type="text" name="email" placeholder="E-Mail" size="50" maxlength="50"></td>
		</tr>
		<tr> 
			<td align="center"><textarea name="mensagem" cols="45" rows="6" placeholder="Digite aqui sua mensagem..."></textarea></td>
		</tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td align="right" width="48%">
							<div>
								<input name="enviar" type="submit" value="Enviar >>"></input>
							</div>
						</td>
						<td width="52%">
							<div>
								<input name="reset" type="reset" value="Limpar Dados">
							</div>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</form>