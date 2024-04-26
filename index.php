<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <script src="javascript.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bonjour à tous</h1>
    <p>
        <?php
    
$side1=8;
$side2=10;

$variable= ($side1>0 AND $side2>0) ? ($side1+$side2-1): "Pas de réponse";

echo $variable.'</br>';

function giveMeSomething ($a){
    return 'something'. ' '.$a;
}

echo giveMeSomething('is better than nothing').'</br>';
echo giveMeSomething('Bob Jane').'</br>';
echo giveMeSomething('something').'</br>';



    ?>
    </p>
</body>

</html>