<!-- PDO classe qui permet de faire UNE CONNEXION à bdd -->

<a href=""></a>

<?php

// super lgobal, récupère l'id du payload
echo $_GET['id'];

$cnx = new PDO("mysql:host=localhost;dbname=gestion_produit;charset=utf8;port=3306", "root", "");

var_dump($cnx);

//attention aux injections sql
//$stmt = $cnx->query("SELECT * FROM produit WHERE idProduit=" . $_GET['id']);

//pour s'en prémunir :
$stmt = $cnx->prepare("SELECT * FROM produit WHERE idProduit=:id");
$stmt->bindParam(':id', $GET['id']);
var_dump(($stmt));

$stmt-> execute();

$produit = $stmt-> fetchAll(PDO::FETCH_ASSOC);

var_dump($produit);
echo json_encode($produit);
