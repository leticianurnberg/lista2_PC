<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade prática 4 - Operações básicas</title>
</head>
<body>
    
<form action="4calc.php" method="POST">
    valor 1: <input type="text" name="valor1"> <br><br>
    valor 2: <input type="text" name="valor2"> <br><br>
    Cálculo: <br><br>
    <input type="radio" name="operacao" value="adicionar"><label>Adicionar</label>
    <input type="radio" name="operacao" value="subtrair"><label>Subtrair</label>
    <input type="radio" name="operacao" value="multiplicar"><label>Multiplicar</label>
    <input type="radio" name="operacao" value="dividir"><label>Dividir</label>
    <hr>
    <br><br>
    <input type="submit" value="Calcular">
    <input type="reset" value="Limpar">
</form>
    
</body>
</html>
