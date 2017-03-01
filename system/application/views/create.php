<div class='errors'> <?php echo error(validation_errors()); ?> </div>
<?php include("public/js/keyboard.php");
global $config;
?>
<script>
	function createAccount() {
		$('.loader').show();
		var form = $('#createAccount').serialize();
		$.ajax({
			url: '<?php echo WEBSITE; ?>/index.php/account/create/1',
			  type: 'post',
			  data: form,
			  success: function(data) {
			  	$('.errors').html(data);
			  	$('.loader').hide();
			  }
		});
	}
</script>
<link rel="stylesheet" type="text/css" href="<?php echo WEBSITE; ?>/public/css/keyboard.css">
<div class='message'>
	<div class='title'>Criação De Conta</div>
	<div class='content'> <?php echo form_open('account/create', array('id'=>'createAccount')); ?>
			<br><center>Informações Da Conta</center></br>
			<!-- Tabela da conta -->
			<table class="table">
				<tbody>
					<tr>
						<td><label for="name">Login:</label></td>
						<td><input type="text" value="<?php echo set_value('name'); ?>" id="name" class="keyboardInput" name="name"/></td>
					</tr>
					<tr>
						<td><label for="nickname">Apelido:</label></td>
						<td><input type='text' name='nickname' id="nickname" value='<?php echo set_value('nickname'); ?>' /></td>
					</tr>
					<tr>
						<td><label for="email">E-mail:</label></td>
						<td><input  type="text" value="<?php echo set_value('email'); ?>" id="email" name="email"/></td>
					</tr>
					<tr>
						<td><label for="password">Senha:</label></td>
						<td><input type="password" class="keyboardInput" id="password" name="password"/></td>
					</tr>
					<tr>
						<td><label for="repeat">Repita a Senha:</label></td>
						<td><input type="password" class="keyboardInput" id="repeat" name="repeat"/></td>
					</tr>
				</tbody>
			</table>
		<table>
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table>
		<br><center>Informações Do Personagem</center></br>
		<!-- Tabela do personagem -->
		<table class="table">
			<tbody>
					<tr>
						<td><label for="character_name">Nome Do Personagem:</label></td>
						<td><input  type="text" id="character_name" value="<?php echo set_value('character_name'); ?>" name="character_name"/></td>
					</tr>
					<tr>
						<td><label for="sex">Gênero:</label></td>
						<td>
							<input name="sex" type="radio" id="sex" value="1" checked="checked" />
								Masculino &nbsp;
							<input type="radio" id="sex" name="sex" value="0" />
								Feminino 
						</td>
					</tr>
					<tr>
						<td><label for="vocation">Escolha Sua Vocação:</label></td>
						<td>
							<select name="vocation" class="keyboardInput" id="vocation">
								<option value="1">Goku</option>
								<option value="17">Vegeta</option>
								<option value="32">Piccolo</option>
								<option value="45">C17</option>
								<option value="57">Gohan</option>
								<option value="71">Trunks</option>
								<option value="83">Cell</option>
								<option value="95">Freeza</option>
								<option value="111">Majin Boo</option>
								<option value="127">Broly</option>
								<option value="140">C18</option>
								<option value="152">Uub</option>
								<option value="164">Goten</option>
								<option value="178">Chibi Trunks</option>
								<option value="192">Cooler</option>
								<option value="206">Dende</option>
								<option value="218">Tsuful</option>
								<option value="230">Bardock</option>
								<option value="244">Kuririn</option>
								<option value="256">Pan</option>
								<option value="268">Kaio</option>
								<option value="280">Videl</option>
								<option value="292">Janemba</option>
								<option value="304">Tenshinhan</option>
								<option value="316">Jenk</option>
								<option value="328">Raditz</option>
								<option value="340">C16</option>
								<option value="352">Turles</option>
								<option value="364">Bulma</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="city">Escolha a Cidade:</label></td>
						<td>
							<select name="city" id="city">
								<?php 
									foreach($config['cities'] as $city => $name)  
									echo '<option value="'.$city.'">'.$name.'</option>'; 
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="world">Mundo:</label></td>
						<td>
							<?php 
								if(sizeof($config['worlds']) > 1) { 
							?>
							<select name="world" id="world">
							<?php
								foreach($config['worlds'] as $world => $name)  
								echo '<option value="'.$world.'">'.$name.'</option>'; 
							?>
							</select>
							<?php 
								}else{ 
							?>
							<input type="hidden" name="world" value="0" />
							<?php echo $config['worlds'][0]; ?>
							<?php } ?>
						</td>
					</tr>
				</tbody>
		</table>
		<table>
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table>
		<br><center>Imagem de segurança</center></br>
		<!-- Tabela do captha -->
		<table class="table" width="100%">
			<thead>
				<tr>
					<th colspan="2"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td align="center"><?php echo $captcha;?></td>
				</tr>
				<tr>
					<td align="center"><input type='text' name='captcha' id="captcha"/></td>
				</tr>
			</tbody>
		</table>
		<p>Ao registrar-se automaticamente você estará aceitando as regras do jogo, leia-as em <a href='#' onClick='$("#rules").toggle(500);'><em>Regras</em></a>.</p>
		<div id='rules' style='margin-top: 10px; width: 100%; height: 300px; overflow: auto; display: none; padding-right: 5px;'><?php echo nl2br(getContent("system/rules.php")); ?></div>
		<br />
		<center><button class="btn btn-success" type="submit">Registrar-se</button>
		<?php loader(); ?></center>
	</div>
</div>