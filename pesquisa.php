<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Form Nome</title>
</head>
<style>
.ge{
    color: #B25337;
    position: relative;
    top: 35px;
    left: 15px;
}
h5{
    position: relative;
    right: 26%;
}
button{
    height: 25px;
}
body{
    background: linear-gradient(to right, #D99E6A, #F2E5D5);
}
</style>
<body>
    <main>
        <div class="formulario">
            <a href="pesquisa.php"><span class="material-symbols-outlined ge">
                home
                </span></a>
            <div class="conteudo">
                <form class="form" method="get" name="formulario1" action="pesquisa2.php">
                    <h2>Olá, seja bem vindo!</h2>
                    <br>
                    <h5>Digite seu nome</h5>
                    <input type="text" id="nomeuser" name="nomeuser">
                    <button type="submit" id="enviar">Enviar</button>
                </form>
            </div>
            <img src="images/flor.jpg" alt="">
        </div>
    </main>
    
</body>
</html>