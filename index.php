<?php 
    $type="index";
    include('./request/request.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Comment réussir son référencement ? Nous abordons sur notre blog tout ce que vous devez savoir sur le SEO.">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/styles/stylesheets/styles.css">
    <title>SEO: Comment ça fonctionne ?</title>
</head>

<body>
    <header>

        <?php 
            include('./component/navbar.php'); 
        ?>
        <img class="header-BG" src="./assets/header-index.png" alt=""/>
        <h1>Tout apprendre sur le S.E.O</h1>   
    </header>
    <main class='index'>
        <?php
            echo $result['content'];
        ?>
    </main>
    <footer>
        <ul>
            <li>
                <a href="./otherPage/privacy.html">
                    Privacy policity
                </a>
            </li>
        </ul>
    </footer>
</body>
</html>