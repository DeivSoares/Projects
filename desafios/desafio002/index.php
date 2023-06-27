<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://www.cursoemvideo.com/wp-content/uploads/2019/08/cropped-cursoemvideo-logo.png" type="image/x-icon">
    <title>Sorteador de Números</title>
</head>

<body>
<main>
    <h1>Trabalhando com números aleatórios</h1>
    <?php
    $min = 0;
    $max = 100;
    $num = mt_rand($min, $max); // 1951 - Linear Congrential Gererator;
    //mt_rand() = 1997 - Mersenne Twister 4x mais rapido do que rand();
    // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand();
    // random_int() = Gera números aleatórios criptograficamente seguros;

    echo "<p>Gerando um número aleatório entre $min e $max...<br>O número gerado foi <strong>$num</strong></p>";
    ?>

    <button onclick="javascript:document.location.reload()">&#x1F504;Gerar outro</button>
</main>    

</body>

</html>