<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo</title>
    <link rel="stylesheet" href="styles.css">

<!--Boostrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!--JQuery-->
	<script src="https://code.jquery.com/jquery-3.7.1.js"
  	integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  	crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h1>Currículo de <?php echo $_POST['nome']; ?></h1>

        <p><strong>Nome:</strong> <?php echo $_POST['nome']; ?></p>
        <?php 
        if(isset($_POST['data_nascimento'])){
            echo "<p><strong>Data de Nascimento:</strong> {$_POST['data_nascimento']}</p>"; 
            // Calcula a idade e exibe
            $dataNascimento = new DateTime($_POST['data_nascimento']);
            $hoje = new DateTime();
            $intervalo = $dataNascimento->diff($hoje);
            echo "<p><strong>Idade:</strong> {$intervalo->y} anos</p>";
        }
        ?>
        <?php 
        if(isset($_POST['email'])){
            echo "<p><strong>Email:</strong> {$_POST['email']}</p>"; 
        }
        ?>
        <?php 
        if(isset($_POST['telefone'])){
            echo "<p><strong>Telefone:</strong> {$_POST['telefone']}</p>"; 
        }
        ?>
        <?php 
        if(isset($_POST['endereco'])){
            echo "<p><strong>Endereço:</strong> {$_POST['endereco']}</p>"; 
        }
        ?>
        <p><strong>Formação Acadêmica:</strong></p>
        <p><?php echo $_POST['formacao']; ?></p>

        <h2>Experiências Profissionais</h2>
        <?php
        if (isset($_POST['cargo'])) {
            foreach ($_POST['cargo'] as $key => $cargo) {
                echo "<p><strong>Cargo:</strong> {$cargo}</p>";
                echo "<p><strong>Empresa:</strong> {$_POST['empresa'][$key]}</p>";
                echo "<p><strong>Período:</strong> {$_POST['periodo'][$key]}</p>";
                echo "<p><strong>Descrição:</strong> {$_POST['descricao'][$key]}</p>";
            }
        }
        ?>

        <button onclick="window.print()">Imprimir Currículo</button>
    </div>

</body>
</html>
