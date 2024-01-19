<?php session_start(); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        Bonjour 
        <?php 
        //utilisateur existant en bdd
            $toto= [
                'id'=>1,
                'pseudo'=>'Toto',
                'email'=>'toto@tot.fr',
                'password'=>'toto'
            ];
        //test des valeurs du formulaire
            if(isset($_POST['email']) && isset($_POST['password'])) {
                if (($_POST['email'] === $toto['email']) && ($_POST['password'] === $toto['password'])) {
                    $_SESSION["user"] = $toto;
                }
            }
        
        //affichage du pseudo si l'utilisateur est connecté
        if(isset($_SESSION['user'])){
            echo $_SESSION['user']['pseudo'];
        }
        ?>
    </header>

    <h1>Démo Session</h1>

    <form action="" method="POST">
        <input type="text" name="email">
        <input type="password" name="password">
        <input type="submit" value="Connexion">
    </form>


    <?php
       // $user= [
           // "id" => 1,
            //"name" => "<?php echo 'ha ha'; ",
           // "name" => "<script>console.log(document.cookie);</script>"
       // ];
       // echo htmlspecialchars($user['name']);
        //echo strip_tags($user['name']);
        //echo $user['name'];
    ?>
    <?php
        //echo 'ok';
        //var_dump($_GET["id"]);
        // if(isset($_POST['email']) && isset($_POST['password'])) {
        //     if (($_POST['email'] === $toto['email']) && ($_POST['password'] === $toto['password'])) {
        //         $_SESSION["user"] = $toto;
        //     }
        // }
        
        //$_SESSION["id_user"] = 12;
        //var_dump($_SESSION);
        //var_dump($_POST);
    ?>

    <!-- <script>
        console.log(document.cookie);
    </script> -->
</body>
</html>