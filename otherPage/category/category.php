<?php include('../../request/request.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="<?php echo $result_category['name']?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title><?php echo $result_category['name']?></title>
</head>
<body>
    <header>
        <?php include('../../component/navbar.php');?>
        <h1><?php echo $result_category['name'];?></h1>
    </header>
    
    <main>
        <?php
            echo $result_category['content'];
        ?>
    </main>
</body>
</html>