<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>

<body>
    <?php 
    // 0x = Hexadecimal 
    //  0b = binário
    // 0 = Octal
    // $num = 010;
    // echo "O valor da variável é $num"
    // var_dump($v) = Mostra o valor da variável e o tipo primitivos em PHP

    // $num = 3e2;
    // echo "O valor da variável é $num"

    class Pessoa{
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p)
    ?>
    
</body>

</html>