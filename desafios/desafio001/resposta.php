<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://www.cursoemvideo.com/wp-content/uploads/2019/08/cropped-cursoemvideo-logo.png" type="image/x-icon" />
    <title>Antecessor e Sucessor</title>
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
            $n = $_REQUEST["num"] ?? 0;
            $a = $n - 1;
            $s = $n + 1;

            echo ("O número escolhido foi <strong>$n</strong>");
            echo ("<br>O seu <em>antecessor</em> é <strong>$a</strong>");
            echo ("<br>O seu <em>sucessor</em> é <strong>$s</strong>");

            ?>
        </p>

        <button onclick="javascript:history.go(-1)"> &#x2B05; Voltar</button>
        <!-- <button onclick="javascript:window.location.href='index.html'"> &#x2B05; Voltar</button> -->
    </main>
</body>

</html>