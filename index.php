<?php 
    $type="index";
    include('./request/request.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="./style/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Comment réussir son référencement ? Nous abordons sur notre blog tout ce que vous devez savoir sur le SEO.">
    <title>SEO: Comment ça fonctionne ?</title>
</head>

<body>
    <header>
        <?php 
            include('./component/navbar.php'); 
        ?>
        <h1>Tout apprendre sur le S.E.O</h1>   
    </header>
    <main>
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