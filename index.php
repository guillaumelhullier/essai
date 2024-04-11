<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js" defer></script>
    <!-- <script src="jquery.js" async></script>-->
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <h1 class="essai">Coucou les gens<h1>

            <?php
            function addition($a,$b){
                return $a + $b;
            }
    echo addition(3,2).'<br/>';
    echo addition(-3,-6).'<br/>';
    echo addition(7,3).'<br/>';   
    ?>

</body>

</html>