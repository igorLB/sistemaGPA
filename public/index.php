<?php
require_once "../vendor/autoload.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema GPA</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="http://localhost/cdn/jquery-3.2.1.min.js"></script>
	
</head>
<body>

	<div>
		<article>
			<label>Titulo</label>
			<input type="text" id="nmAula">
		</article>
		<article>
			<label>Professor</label>
			<input type="text" id="nmProfessor">
		</article>
		<article>
			<label>Data</label>
			<input type="date" id="dtAula">
		</article>
		<article>
			<label>Observação</label>
			<textarea style="resize: none;" id="observacao"></textarea>
		</article>
		<article>
			<label>Total de Questoes</label>
			<input type="number" id="total">
		</article>
		<article>
			<label>Quantas voce acertou?</label>
			<input type="number" id="corretas">
		</article>
		<article>
			<label>Quantas voce nao respondeu?</label>
			<input type="number" id="naoRespondidas">
		</article>
		<article>
			<label>Disciplina</label>
			<input type="number" id="disciplina">
		</article>

		<button id="bt_submit">Enviar</button>
		<button id="bt_listar">Listar</button>


	</div>

	<script type="text/javascript" src="res/js/scripts.js"></script>

</body>
</html>