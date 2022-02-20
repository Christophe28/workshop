<?php include("../request/request.php");

$req = $bdd -> query("SELECT * FROM article");
$result = $req -> fetch();

$id_page_accueil = 13;

// if(isset($_GET['id'])) {
//     $_
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="<?php echo $result["title"]?>">
    <title><?php echo $result['title']?></title>
</head>
<body>
    <h1>Page dynamique</h1>

    <?php 
        echo $result['title'];
    ?>
</body>
</html>