<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade prática 2 - Seletor de cores interativo</title>
</head>
<body>
    
    <h1>Seletor de cores interativo</h1>

    <?php
        $R = $_POST['red'];
        $G = $_POST['green'];
        $B = $_POST['blue'];
        $rgb = $R . "," . $G. "," . $B;
    ?>

    R: <?php echo $R?>
    G: <?php echo $G?>
    B: <?php echo $B?>

    <div style="width:200px; height:200px; background:rgb(<?php echo $rgb; ?>);" /></div>

    

</body>
</html>
