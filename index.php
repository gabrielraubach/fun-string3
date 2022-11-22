<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            text-align: center;
        }
        h2{
            height: 100px;
            font-size: 50pt;
        }

        form {
            margin-top: 20px;
            margin-left: 500px;
            border: black 2px solid;
            width: 300px;
            height: 500px;
            text-align: center;
        }

        p {
            padding-top: 120px;
        }
    </style>
    <title>Data</title>
</head>

<body>
    <form method="POST">
        <h1>
            Digite uma data
        </h1>
        <h2><?php

if (isset($_POST['C'])) {
    $palavra = $_POST['texto'];
    $d = substr($palavra,0,2);
    $m =  substr($palavra, 3,2);
    $a =  substr($palavra,6,4);

echo "dia ".$d."\n Mes ".$m."\nAno ".$a;
}
?></h2>
        <p>Digite seu CEP</p>
        <input type="text" name="texto">
        <input type="submit" name="C" value="Contar">
    </form>
</body>

</html>
