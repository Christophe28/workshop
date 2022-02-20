<?php 
    $type="article";
    include('../../request/request.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php echo $result['subtitle'];?>">
    <link rel="stylesheet" href="<?php echo $server_url; ?>src/styles/stylesheets/styles.css">
    <title><?php echo $result['title'] ?></title>
</head>
<body>
    <header>
        <?php 
            include("../../component/navbar.php");
            echo $fil_arianne;
        ?>
        <h1> 
            <?php 
                echo $result['title'];
            ?>
        </h1>
    </header>
    <main>
    <?php echo $result['content']; ?>
    </main>
</body>
</html>