<?php include('./request/request.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Tout apprendre sur le S.E.O</title>
</head>
<body>

    <header>
        <?php include('./component/navbar.php'); ?>

        <h1>Tout apprendre sur le S.E.O</h1>    
    </header>
    
    <main>

        <?php
            $req = $bdd -> query("SELECT content FROM article WHERE id=13");

            $result = $req -> fetch();

            echo $result['content'];
        ?>

    </main>

    <footer>
        <ul>
            <li>
                <a href="./otherPage/privacy.html">Privacy policity</a>
            </li>
        </ul>
    </footer>
</body>
</html>