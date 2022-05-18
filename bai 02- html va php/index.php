<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai 02--html va php</title>
</head>
<body>
    <!--Header-->
    <?php include_once './inc/header.php' ?>
    <?php include_once './inc/header.php' ?>
    <h1>html va php</h1>
    <?php echo 'hello word' ?>
    <?php
        $langue = 'ngon ngu lap trinh php';
        var_dump($langue);
        ?>
        <?php include_once './inc/content.php'; ?>
        <?php include_once './inc/content.php'; ?>
        <!--Footer-->
        <?php include_once './inc/footer.php' ?>
        <?php include_once './inc/footer.php' ?>
</body>
</html>