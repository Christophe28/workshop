<?php
try{
    $bdd = new PDO('mysql:host=127.0.0.1; dbname=SEO_articles', 'Kriss', 'Sommation01');
}

catch(Exception $e){
    die('Erreur :'.$e->getMessage());
}
// <?php
// $req = $bdd->query("SELECT content FROM article WHERE id = 12");

// $result = $req->fetch();

// echo $result['content'];
//