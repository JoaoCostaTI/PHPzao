<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando servidores</title>
</head>
<body>
    <h1>Testando comando de servidores</h1>

    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia: " . date("d/M/Y");
        echo " e a hora é: " . date("G:i:s T");
    ?>
</body>
</html>