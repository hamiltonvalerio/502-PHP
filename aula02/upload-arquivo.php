<form method="POST" enctype="multipart/form-data">
	<!-- <input type="hidden" name="MAX_FILE_SIZE" value=""> -->
	<input type="file" name="arquivo">
	<input type="submit" value="Enviar">
</form>

<?php 

if ($_POST || $_FILES) {

	if (UPLOAD_ERR_OK === $_FILES['arquivo']['error']) {
		
		$nome = basename($_FILES['arquivo']['name']);

		$movido = move_uploaded_file($_FILES['arquivo']['tmp_name'], "fotos/{$nome}");

		if ($movido) {
			echo '<p>Salvo Com Sucesso!!</p> <hr>';
			echo "<img src='fotos/{$nome}' height='42' width='42'>";
		}

	}
}