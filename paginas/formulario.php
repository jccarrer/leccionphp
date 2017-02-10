<?php
  session_start();
?>
<p>Formulario:</p>
<form id="formulario" action="create_nota.php" method="GET" enctype="multipart/form-data">
	<div class="row">
		<label for="nombre">Nombre:</label><br />
		<input id="nombre" class="input" name="nombre" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="parcial">Parcial:</label><br />
		<input id="parcial" class="input" name="parcial" type="text" value="" size="5" /><br />
	</div>


	<div class="row">
		<label for="final">final:</label><br />
		<input id="final" class="input" name="final" type="text" value="" size="5" /><br />
	</div>


	<div class="row">
		<label for="mejo">mejoramiento:</label><br />
		<input id="mejo" class="input" name="mejo" type="text" value="" size="5" /><br />
	</div>


	
	<input id="submit_button" type="submit" value="Enviar" />
</form>
