<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Démo</h1>
    <?php //include './getDatas.php'; ?>
    <?php //include './vue_personnes.php' 
        $datas = include './getDatas.php';
        renderView('./vue_personnes.php', $datas);

        function renderView($vueFile, $datas)
        {
            include $vueFile;
        }
    ?>
                  

</body>
</html>