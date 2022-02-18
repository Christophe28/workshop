<?php
$server_url = "http://localhost/workshop/";

try{
    $bdd = new PDO('mysql:host=127.0.0.1; dbname=SEO_articles', '', '');
}
catch(Exception $e){
    die('Erreur :'.$e->getMessage());
}

function cleanCategoryName($category_name) {
  $category_name = str_replace(" ", "_", $category_name);
  $category_name = str_replace("é", "e", $category_name);
  return $category_name;
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

    $article_from_category="(a.category_id=".$result_category['id'];

    if ($result_category['parent_id']==0) {
        $fil_arianne.="<li><a href='".$server_url.$result_category['name']."'>".$result_category['name']."</a></li>";
        $parent_category_for_link_article=$result_category['name'];
        $req = $bdd -> query("SELECT id
                          FROM category 
                          WHERE parent_id=" .$result_category['id']); 
        while ($result_child_category = $req->fetch()){
            $article_from_category = $article_from_category . " OR a.category_id=".$result_child_category['id'];
        }
    }

    if ($result_category['parent_id']!=0) {
        $req = $bdd -> query("SELECT name 
                              FROM category 
                              WHERE id=" .$result_category['parent_id']);  
        $fil_arianne_parent_response = $req -> fetch();

        $category_name=cleanCategoryName($result_category['name']);
        $parent_category_for_link_article=$fil_arianne_parent_response['name'];

        $fil_arianne.="<li><a href='".$server_url.$fil_arianne_parent_response['name']."'>".$fil_arianne_parent_response['name']."</a></li>";

        $fil_arianne.="<li><a href='".$server_url.$fil_arianne_parent_response['name']."/".$category_name."'>".$result_category['name']."</a></li>";

        $show_canonical=true;
        $canonical_url="<link rel='canonical' href='".$server_url.$fil_arianne_parent_response['name']."' />";
    }

    $article_from_category.=") AND c.id=a.category_id";
    $req_article_from_category = $bdd -> query("SELECT a.id, a.title, a.subtitle, a.content, a.image_url, a.image_alt, a.rewriting_url, c.name AS categoryCurrent
                          FROM article a, category c
                          WHERE " .$article_from_category. "
                          ORDER BY id desc
                          LIMIT 10");
    $fil_arianne .= "</ul>";
}

if ($type=="article") {
    $carac_to_kill = array(" ", "’", "'", ",", ".", ":", ";");
    $fil_arianne="<ul><li><a href='".$server_url."'>Homepage</a></li>";
    $req = $bdd -> query("SELECT id, title, subtitle, category_id, content, image_url, image_alt, rewriting_url 
                          FROM article 
                          WHERE id=" .$_ENV['id']);
    $result = $req -> fetch();

    $req = $bdd -> query("SELECT name, parent_id 
                          FROM category 
                          WHERE id=" .$result['category_id']);  
    $result_category = $req -> fetch();

    $category_name_fil_ariane=cleanCategoryName($result_category['name']);

    $req = $bdd -> query("SELECT name 
                          FROM category 
                          WHERE id=" .$result_category['parent_id']);  
    $fil_arianne_parent_response = $req -> fetch();

    $fil_arianne.="<li><a href='".$server_url.$fil_arianne_parent_response['name']."'>".$fil_arianne_parent_response['name']."</a></li>";
    $fil_arianne.="<li><a href='".$server_url.$fil_arianne_parent_response['name']."/".$category_name_fil_ariane."'>".$result_category['name']."</a></li>";
    $fil_arianne.="<li><a href='".$server_url.$fil_arianne_parent_response['name']."/".$category_name_fil_ariane."/".$result['rewriting_url']."'>".$result['title']."</a></li>";
    $fil_arianne.="</ul>";
}


if ($type=="index") {
    $req = $bdd -> query("SELECT content 
                          FROM article 
                          WHERE id=" .$_ENV['id']);
    $result = $req -> fetch();
}
