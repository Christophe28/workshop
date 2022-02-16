<?php 
    include('./request/request.php');

    $req_navbar = $bdd -> query("SELECT * FROM category WHERE parent_id=0");
    $req_navbar_submenu = $bdd -> query("SELECT * FROM category");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./style/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
</head>
<body>
    <header>
        <?php include('./component/navbar.php'); ?>
        <h1>Navbar</h1>

    <nav>
        <ul class="menu">
            <li>
                <a href="<?php echo $server_url;?>index.php">Accueil</a>
            </li>
            <?php
                while($result_navbar = $req_navbar -> fetch()){
            ?>
            <li>
                <a href="<?php echo $server_url.$result_navbar['name'];?>"><?php echo $result_navbar['name']; ?></a>
                
                <ul class="sub-menu">
                    <?php
                        while($result_navbar_submenu = $req_navbar_submenu -> fetch()){
                    ?>
                    <li>
                        <a href=""><?php echo $result_navbar_submenu['name'];?></a>
                    </li>
                    <?php
                        }
                    ?>
                    
                </ul>
            </li>
            <?php   
                }
            ?>
        </ul>
    </nav>
    </header>
</body>
</html>