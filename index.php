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


function getFirstValue ($data){
    return $data[0]."</br>";
}

echo getFirstValue([1,2,3]);
echo getFirstValue([80,5,10]);
echo getFirstValue([-500,0,50]);



    ?>
    </p>
</body>

</html>