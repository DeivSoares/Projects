<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Sequencia de Escape
    // \n = Nova linha
    // \t = Tabulação Horizontal
    // \\ = Barra invertida
    // \$ = Mostrar o cifrão
    // \u{} = Codepoint Unicode


//     $nome = "Rodrigo";
// $snome = "Nogueira";
    // echo "Estamos no ano de " . date('d/m/Y');

    // echo "<br>$nome\"Minotauro\"$snome";

    // ======SINTAXE HEREDOC======
    $canal = "Curso em Vídeo";
    $ano = date('Y');
    echo <<< TESTE
    Olá galera do $canal!
            Tudo bem com vocês?
        Como está sendo esse ano de $ano?
    Abraços! \u{1F596}
    TESTE;
    ?>
</body>

</html>