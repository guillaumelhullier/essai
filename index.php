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
            <p>
                <?php
            function convert($data){
                return $data*60;
            }

    echo convert(5).'<br/>';
    echo convert(3).'<br/>';
    echo convert(2).'<br/>';
    
    ?>
            </p>
</body>

</html>