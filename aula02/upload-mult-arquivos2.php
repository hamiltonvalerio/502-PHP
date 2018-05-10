<form method="POST" enctype="multipart/form-data">
	<!-- <input type="hidden" name="MAX_FILE_SIZE" value=""> -->
	<input type="file" multiple name="arquivos[]">
	<input type="submit" value="Enviar">
</form>
<pre>
<?php

if ($_POST || $_FILES) {
	
	foreach ($_FILES['arquivos']['error'] as $indice => $erro) {
		
		if (UPLOAD_ERR_OK === $erro) {

			$nome = basename($_FILES['arquivos']['name'][$indice]);

			$movido = move_uploaded_file($_FILES['arquivos']['tmp_name'][$indice], "fotos/{$nome}");

			if ($movido) {
				echo "<img src='fotos/{$nome}' height='42' width='42'>";
			}
		}
	}
}