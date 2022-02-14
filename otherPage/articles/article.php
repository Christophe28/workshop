<?php include("../../request/request.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="<?php echo $result['subtitle'];?>">
    <link rel="stylesheet" href="../../style/style.css">
    <title><?php echo $result['title'] ?></title>
</head>
<body>
    <header>
        <?php include("../../component/navbar.php");?>

        <h1> <?php echo $result['title']?></h1>
    </header>

    <?php echo $result['content']; ?>

 
</body>
</html>