<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="style. scss">
    <title>Document</title>
</head>

<body>
    <h1>Coucou</h1>
    <?php
    $ville = "Lyon";
    $department = "Rhône";
    $addition = 'La ville de ' .$ville. ' se trouve dans le département du ' .$department.'<br/>' ;
//echo "demain <br/> ";
echo $addition;
echo "return True";
?>
</body>

</html>