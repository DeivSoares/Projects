<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.cursoemvideo.com/wp-content/uploads/2019/08/cropped-cursoemvideo-logo.png" type="image/x-icon">
    <title>Funções Aritméticas em PHP</title>
</head>
<body>
    <?php 
    $rn = -500;
    $r = abs($rn); //Valor absoluto = Valor sem sinal
    echo "<p>O Valor Absoluto de $rn é $r</p>";

    $base = 2;
    $bc = base_convert($rn, 10, $base);
    echo "<p>A base 8 de $rn é $bc </p>";

    // ceil(),floor(), round()

    //hypot() - Calcula hipotenusa

    //intdiv() - Divisão Inteira 

    //min(), max() - Mostra o valor minimo e maximo entre 2 ou mais valores

    //pi() - Mostra o valor de Pi

    $pi = pi(); // Ou M_PI
    print("<p>A resposta é $pi</p>");

    //pow() - Cria uma potência Ex pow(5, 2) = 5 ** 2

    //sin(), cos(), tan()

    $raiz = 81;
    $sqrt = sqrt($raiz); //Calcula Raiz Quadrada
    print("<p>A raiz quadrada de $raiz é $sqrt</p>");
    ?>
</body>
</html>