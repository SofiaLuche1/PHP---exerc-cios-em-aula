<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Soma de números</title>
</head>
<body>
    <h2>Soma de dois Números </h2>
    <form method="POST">

   <input type ="number" name="um">
   <input type ="number" name="dois">
   <input type="submit">
    </form>
</body>
</html>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST['um'];
        $num2 = $_POST['dois'];
    $soma = $num1 + $num2;
    echo "Resultado: $num1 + $num2 = $soma ";
    }
    ?>
