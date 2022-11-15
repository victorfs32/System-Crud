<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <title>LOGIN | JV</title>
</head>
<body>
<div class="box">
        <form action="testLogin.php" method="POST">
			<h2>LOGIN</h2>
			<div class="inputBox">
                <input type="text" name="nome" placeholder="Nome">
				<span>Usuario</span>
				<i></i>
			</div>
			<div class="inputBox">
                <input type="password" name="senha" placeholder="Senha">
				<span>Senha</span>
				<i></i>
			</div>
			<div class="links">
				<a href="#">Esqueci a senha?</a>
				<a href="formulario.php">Cadastrar</a>
			</div>
			<input class="inputSubmit" type="submit" name="submit" value="ENTRAR">
		</form>
	</div>
</body>
</html>