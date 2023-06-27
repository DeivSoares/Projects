<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas Básico</title>
</head>

<body>
    <main>

        <?php
        $cotação = 5.17; // Cotação copiada do Google

        $real = $_REQUEST["din"] ?? 0; //Quantos $$ você tem?

        $dólar = $real / $cotação; // Equivalência em dólar

        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD") . "</strong></p>";

        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>