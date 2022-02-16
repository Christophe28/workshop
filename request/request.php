<?php
$server_url = "http://localhost/workshop/";
$carac_to_kill = array(" ", "’", "'");

try{
    $bdd = new PDO('mysql:host=127.0.0.1; dbname=SEO_articles', '', '');
}
catch(Exception $e){
    die('Erreur :'.$e->getMessage());
}

$_ENV['id'] = 13;

if(isset($_GET['id']) && intval($_GET['id'])) {
    $_ENV['id'] = $_GET['id'];
}

if ($type=="category") {
    $fil_arianne="<ul><li><a href='".$server_url."'>Homepage</a></li>";
    $req = $bdd -> query("SELECT id, name, description, content, parent_id 
                          FROM category 
                          WHERE id=" .$_ENV['id']);  
    $result_category = $req -> fetch();

    $article_from_category="category_id=".$result_category['id'];

    if ($result_category['parent_id']==0) {
        $fil_arianne.="<li><a href='".$server_url.$result_category['name']."'>".$result_category['name']."</a></li>";
        $req = $bdd -> query("SELECT id
                          FROM category 
                          WHERE parent_id=" .$result_category['id']); 
        while ($result_child_category = $req->fetch()){
            $article_from_category = $article_from_category . " OR category_id=".$result_child_category['id'];
        }
    }

    if ($result_category['parent_id']!=0) {
        $req = $bdd -> query("SELECT name 
                              FROM category 
                              WHERE id=" .$result_category['parent_id']);  
        $fil_arianne_parent_response = $req -> fetch();

        $fil_arianne.="<li><a href='".$server_url.$fil_arianne_parent_response['name']."'>".$fil_arianne_parent_response['name']."</a></li>";

        $fil_arianne.="<li><a href='".$server_url.$result_category['name']."'>".$result_category['name']."</a></li>";
    }

    $req_article_from_category = $bdd -> query("SELECT id, title, subtitle, content, image_url, image_alt, rewriting_url 
                          FROM article 
                          WHERE " .$article_from_category. "
                          ORDER BY id desc
                          LIMIT 10");
    $fil_arianne .= "</ul>";
}

if ($type=="article") {
    $fil_arianne="<ul><li><a href='".$server_url."'>Homepage</a></li>";
    $req = $bdd -> query("SELECT id, title, subtitle, category_id, content, image_url, image_alt, rewriting_url 
                          FROM article 
                          WHERE id=" .$_ENV['id']);
    $result = $req -> fetch();

    $req = $bdd -> query("SELECT name, parent_id 
                          FROM category 
                          WHERE id=" .$result['category_id']);  
    $result_category = $req -> fetch();


    $req = $bdd -> query("SELECT name 
                          FROM category 
                          WHERE id=" .$result_category['parent_id']);  
    $fil_arianne_parent_response = $req -> fetch();

    $fil_arianne.="<li><a href='".$server_url.$fil_arianne_parent_response['name']."'>".$fil_arianne_parent_response['name']."</a></li>";
    $fil_arianne.="<li><a href='".$server_url.$result_category['name']."'>".$result_category['name']."</a></li>";
    $fil_arianne.="<li><a href='".$server_url.str_replace($carac_to_kill, '-', $result['title'])."'>".$result['title']."</a></li>";
    $fil_arianne.="</ul>";
}


if ($type=="index") {
    $req = $bdd -> query("SELECT content 
                          FROM article 
                          WHERE id=" .$_ENV['id']);
    $result = $req -> fetch();
}