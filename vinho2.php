<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade prática 3 -  </title>
</head>
<body>

    <?php
        $nome= $_POST['nome'];
        $vinho= $_POST['vinho'];
        $refeicao = $_POST['refeicao'];
    ?>

    <label>Obrigado pela sua seleção,</label><?php echo $nome ?>
    <hr>
    <label>Você realmente aprecia</label> <?php echo $refeicao ?>
    <br>
    <label>-especialmente com um bom vinho</label> <?php echo $vinho?>


</body>
</html>
