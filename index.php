
<?php
include 'contador.php';
$n = contador();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Esta página tem um total de <?=$n ?> acessos!</h1>
</body>
</html>
