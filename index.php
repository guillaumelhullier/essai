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
    
function calcAge ($a){
    return $a*365;
}

echo calcAge(65).'</br>';
echo calcAge(0).'</br>';
echo calcAge(20).'</br>';



    ?>
    </p>
</body>

</html>