<?php
    session_start();
    require_once 'scripts/config.php';
?>

<html lang="en" id="head">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
        <link rel="stylesheet" href="css/common_styles.css">
        <link rel="stylesheet" href="css/index_styles.css">
        <title>Welcome to PickaGuitar</title>
    </head>
   <body>
        <?php
            require_once('scripts/header.php');
        ?>

        <main>
        </main>
        
        <?php
            require_once('scripts/footer.php');
        ?>
    </body>
</html>