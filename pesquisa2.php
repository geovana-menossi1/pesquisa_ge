<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Form CEP</title>
</head>
<style>
.ge{
    color: #B25337;
    position: relative;
    top: 35px;
    left: 15px;
}
.endereco{
    display: flex;
    position: relative;
    top: 22%;
}
body{
    background: linear-gradient(to right, #D99E6A, #F2E5D5);
}
h5{
    position: relative;
    right: 28%;
}
button{
    height: 25px;
}
</style>
<body>
    <main>
        <div class="formulario">
        <a href="pesquisa.php"><span class="material-symbols-outlined ge">
                arrow_back
                </span></a>
            <div class="conteudo">
                <form class="form" method="get" name="formulario2" action="pesquisa3.php">
                <?php
	            $nomeUser = $_GET["nomeuser"];
                echo("<h2>Olá, $nomeUser, seja bem vindo(a)!</h2>");
                ?>
                    <br>
                    <h5>Digite seu CEP</h5>
                    <input type="cep" id="cep" name="cep">
                    <button type="submit" id="enviar">Enviar</button>
                    <input type="hidden" name="nomeuser" value="<?php echo $nomeUser; ?>">
                </form>
            </div>
            <img src="images/flor.jpg" alt="">
        </div>
    </main>
    
</body>
</html>