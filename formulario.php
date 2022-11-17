<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email) 
        VALUES ('$nome','$senha','$email')");
        
        if($result==true){
            print "<script>alert('Cadastrado Com Sucesso');</script>";
            print "<script>location.href='login.php';</script>";
        }else{
            print "<script>alert('Não foi possivel salvar');</script>";
            print "<script>location.href='login.php';</script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/LOGO.jpg" type="image/x-icon">
    <link rel="stylesheet" href="CSS/formulario.css">
    <title>CADASTRO | JV</title>
</head>
<body>
<div class="box">
        <form action="formulario.php" method="POST">
			<h2>LOGIN</h2>
			<div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
				<span>Usuario</span>
				<i></i>
			</div>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
				<span>Email</span>
				<i></i>
			</div>
			<div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
				<span>Senha</span>
				<i></i>
			</div>
			<input type="submit" name="submit" id="submit" value="CRIAR">
		</form>
	</div>
    <script src="js/sweetalert2.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
