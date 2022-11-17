<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',email='$email'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);

        if($result==true){
            print "<script>alert('Salvo com sucesso');</script>";
            print "<script>location.href='registro.php';</script>";
        }else{
            print "<script>alert('Não foi possivel salvar');</script>";
            print "<script>location.href='registro.php';</script>";
        }
    }

?>