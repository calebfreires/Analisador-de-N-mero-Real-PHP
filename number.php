<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            // pegando o conteúdo do input tipo number
            $number = $_POST['number'] ?? 0;

            echo "<p>Analisando o número <strong>". number_format($number, 3, ",", ".") ."</strong> informado pelo usuário</p>";
        
            $integer = (int) $number;
            $fractional = $number - $integer;

            echo "<ul><li> A parte inteira do número é <strong>". number_format($integer, 0, ",", ".") ."</strong></li>";
            echo "<li> A parte fracionária do número é <strong>". number_format($fractional, 3, ",", ".") ."</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar pra página anterior</button>
    </main>
</body>
</html>