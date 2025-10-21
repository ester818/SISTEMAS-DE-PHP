<?php

if(isset($_GET["a"])&& isset($_GET["b"])) {
    $a = $_GET["a"];
    $b = $_GET["b"];
    $subtracao = $a - $b;
}else{
    $erro = "Valores errados"
}
?>

<html>
<link rel="stylesheet" href="estilo.css">
<head>
    <body>
        <?php if (isset($erro)) { ?>
            <h1>Erro: <?=$erro?></h1>
        <?php } else { ?>
        <p>
            O resultado é <?=$subtracao?>
        </p>
        <?php> } ?>
    </body>
</head>
</html>