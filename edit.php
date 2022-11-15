<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
            }
        }
        else
        {
            header('Location: sistema.php');
        }
    }
    else
    {
        header('Location: sistema.php');
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
        <form action="saveEdit.php" method="POST">
			<h2>LOGIN</h2>
			<div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
				<span>Usuario</span>
				<i></i>
			</div>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
				<span>Email</span>
				<i></i>
			</div>
			<div class="inputBox">
            <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
				<span>Senha</span>
				<i></i>
			</div>
			<div class="links">
				<a href="#">Esqueci a senha?</a>
				<a href="formulario.php">Cadastrar</a>
			</div>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" name="update" id="submit" value="SALVAR">
		</form>
	</div>
</body>
</html>