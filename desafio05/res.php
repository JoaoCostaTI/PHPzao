<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
        
        <?php 
          $numeroReal = $_GET["numeroReal"]; 
          $inteira = floor($numeroReal);
          $fracionaria = $numeroReal - $inteira;
          $fracionariaF = number_format($fracionaria, 3, ',', '');
          echo"
            Analisando o número $numeroReal informado pelo usuário:
            <br><br>
            - A parte inteira do número é: $inteira
            <br>
            - A parte fracionária do número é: $fracionariaF
          ";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
        
    </main>
</body>
</html>