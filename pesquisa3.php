<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Informacoes</title>
</head>
<style>
.ge{
    color: #B25337;
    position: relative;
    top: 35px;
    left: 15px;
}
.ges{
    color: #B25337;
    position: relative;
    top: 35px;
    left: 27px;
}
.endereco{
    display: flex;
    position: relative;
    top: 22%;
}
body{
    background: linear-gradient(to right, #D99E6A, #F2E5D5);
}
</style>
<body>
    <main>
        <div class="formulario3">
            <a href="pesquisa2.php"><span class="material-symbols-outlined ge">
                arrow_back
                </span></a>
            <a href="pesquisa.php"><span class="material-symbols-outlined ges">
            home
            </span></a>
                <div class="junto">
                    <div class="endereco">
                    <?php
                    $nomeUser = $_GET["nomeuser"];
                    echo("<h2>$nomeUser, estamos consultando seu endereço, confira abaixo</h2>");
                    ?>
                    </div>
                    <div class="conteudo3">
                    <?php
                    if (isset($_GET['cep'])) {
                        $cep = $_GET['cep'];
                        $url = "https://viacep.com.br/ws/{$cep}/json/";
                        $address = json_decode(@file_get_contents($url));

                        if ($address === null) {
                            echo "Erro ao obter dados do endereço. Verifique se o CEP é válido.";
                        } else{
                            $cep = isset($address->cep) ? $address->cep : 'Não encontrado';
                            echo "<h3>CEP <span class='material-symbols-outlined'>
                                    arrow_forward
                                    </span> $cep</h3>";

                            $logradouro = isset($address->logradouro) ? $address->logradouro : 'Não encontrado';
                            echo "<h3>Rua <span class='material-symbols-outlined'>
                                    arrow_forward
                                    </span> $logradouro</h3>";

                            $bairro = isset($address->bairro) ? $address->bairro : 'Não encontrado';
                            echo "<h3>Bairro <span class='material-symbols-outlined'>
                                    arrow_forward
                                    </span> $bairro</h3>";

                            $localidade = isset($address->localidade) ? $address->localidade : 'Não encontrado';
                            echo "<h3>Cidade <span class='material-symbols-outlined'>
                                    arrow_forward
                                    </span> $localidade</h3>";

                            $uf = isset($address->uf) ? $address->uf : 'Não encontrado';
                            echo "<h3>UF <span class='material-symbols-outlined'>
                                    arrow_forward
                                    </span> $uf</h3>";

                            $ddd = isset($address->ddd) ? $address->ddd : 'Não encontrado';
                            echo "<h3>DDD <span class='material-symbols-outlined'>
                                    arrow_forward
                                    </span> $ddd</h3>";

                            date_default_timezone_set('America/Sao_Paulo');

                                $hoje = date('d/m/Y');
                                echo "<h3>Hoje é dia <span class='material-symbols-outlined'>
                                        arrow_forward
                                        </span> $hoje</h3>";
                        }
                    }
                    ?>
                    </div>
                </div>
            <img src="images/flor.jpg" alt="">
        </div>
    </main>
    <input type="hidden" name="nomeuser" value="<?php echo $nomeUser; ?>">
</body>
</html>

