<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gerador Curriculum</title>

<link rel="stylesheet" type="text/css" href="styles.css">
<!--Bootstrap-->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!--Jquery-->

	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

	<script type="text/javascript">
		function imprimir(){
			window.print();
		}</script>

</head>

<body>
	<h1 class="titulo">Currículo</h1><br>

	<?php
		$nomeusuario=$_POST['nome'];
			if(isset($_POST['nome'])) {
				echo $nomeusuario;
  			} var_dump($_POST);

  		$aniversario=$_POST['diaa'];
			if(isset($_POST['diaa'])) {
  				echo $aniversario;
  			} var_dump($_POST);
		
		$foto=$_POST['avatar'];
			if(isset($_POST['avatar'])) {
  				echo $foto;
  			} var_dump($_POST);

		$civil=$_POST['civil'];
			if(isset($_POST['civil'])) {
  			} var_dump($_POST)

  		$mail=$_POST['mail'];
			if(isset($_POST['mail'])) {
  			} var_dump($_POST)	

  		$telefone=$_POST['telefone'];
			if(isset($_POST['telefone'])) {
  			} var_dump($_POST)
	

		$endereço=$_POST['endereço'];
			if(isset($_POST['endereço'])) {
  			} var_dump($_POST)

  		$qualidades=$_POST['qualidades'];
			if(isset($_POST['qualidades'])) {
  			} var_dump($_POST)

	
  ?>

<div class="container">

	<div class="item item-1">
	<img src="imagens/Relation.png" class=imagens>
		<?php
		echo $civil;
		?>
	</div>

	<div class="item item-2">
	<img src="imagens/Mail.png" class=imagens>
		<?php
		echo $correio;
		?>
	</div>

	<div class="item item-3">
	<img src="imagens/Phone.png" class=imagens>
		<?php
		echo $telefone;
		?>
	</div>

	<div class="item item-4">
	<img src="imagens/Location.png" class=imagens>
		<?php
		echo $endereço;
		?>
	</div>
</div> <br>

<!--Segunda parte-->
<img src="imagens/Presentation.png" class=imagens>
	<?php
		echo $qualidades;
		?>

<img src="imagens/Experience.png" class=imagens>
	
} 

<button onclick="imprimir()" class="btn btn-primary">Imprimir</button>

</body>
</html>