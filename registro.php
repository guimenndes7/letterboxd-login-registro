<?php

$pdo = new PDO('mysql:host=localhost;dbname=cadastro-uso', 'root', '');

if(isset($_POST['acao'])){
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $confirmarsenha = $_POST['confirmarsenha'];
    $salvar = $pdo->prepare("INSERT INTO `usuario` VALUES (null,?,?,?,?)");

    $salvar->execute(array($email, $nome, $senha, $confirmarsenha));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Imprima&family=Inclusive+Sans:ital@0;1&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Lato:wght@100&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Imprima&family=Inclusive+Sans:ital@0;1&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Lato:wght@100&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Imprima&family=Inclusive+Sans:ital@0;1&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Lato:wght@100&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Imprima&family=Inclusive+Sans:ital@0;1&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:wght@100&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Imprima&family=Inclusive+Sans:ital@0;1&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:wght@100&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body>

<div class="container">
        <div class="login">
            <div class="logo">
                <img src="./lt2.png" alt="logo">
            </div>
            <!-- <div class="btn-google">
                <img src="https://img.icons8.com/?size=512&id=17949&format=png" alt="logo google">
                <p>Continuar com o Google</p>
            </div> -->
            <!-- <div class="ou">
                <p>ou</p>
            </div> -->
        <form action="" method="post">
            <div class="email">
                <input type="email" id="email" name="email" placeholder="E-MAIL">
            </div>
            <div class="nome">
                <input type="nome" id="nome" name="nome" placeholder="NAME">
            </div>
            <div class="senha">
                <input type="senha" id="senha" name="senha" placeholder="PASSWORD">
            </div>
            <div class="confirmarsenha">
                <input type="confirmarsenha" id="confirmarsenha" name="confirmarsenha" placeholder="CONFIRM PASSWORD">
            </div>
            <!-- <div class="btn-login">
                <p>Fazer login</p>
            </div> -->
            <input type="submit" name="acao" value="fazer login" class="btn-login">
        </form>
            <!-- <p class="logon">
                Usar logon unico
            </p>
            <p class="redefinir">
                Redefinir senha
            </p>
            <p class="criar">
                Não tem uma conta? <a>Crie uma!</a>
            </p> -->
        </div>
    </div>

    <script src="./script"></script>
    
</body>
</html>