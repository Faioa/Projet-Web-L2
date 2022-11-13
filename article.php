<?php
    session_start();
    require_once 'scripts/config.php';

    if(isset($_GET['product']))
    {
        $product = $_GET['product'];
        if($check = $DB -> query("SELECT Name from product WHERE Name = '$product'"))
        {
            if($DB -> affected_rows == 1)
            {
                $images = array("images/".$product."/".$product."1.jpg", "images/".$product."/".$product."2.jpg", "images/".$product."/".$product."3.jpg", "images/".$product."/".$product."4.jpg", "images/".$product."/".$product."5.jpg");

                if($query = $DB -> query("SELECT Price, Producer, Description, Caracteristics FROM product WHERE Name = '$product'"))
                {
                    if($DB -> affected_rows == 1)
                    {
                        $array = $query -> fetch_assoc();
                        $price = $array['Price'];
                        $producer = $array['Producer'];
                        $description = $array['Description'];
                        $caracteristics = $array['Caracteristics'];
                    }else header('Location:landing.php?method=error');
                }else header('Location:landing.php?method=error');
            }else header('Location:landing.php?method=error');
        }else header('Location:landing.php?method=error');
    }else header('Location:landing.php?method=error');
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
        <link rel="stylesheet" href="css/article_styles.css">
        <title>Welcome to PickaGuitar</title>
    </head>
    <body>
        <?php
            require_once('scripts/header.php');
        ?>

    <main>
        <div class="container p-4">
            <div class="row">
                <div class="col-md-8" id="guitar-images">
                    <div class="row">
                        <?php
                            echo "
                                <img class=\"img-fluid\" src=\"$images[0]\" alt=\"$images[0]\" />
                            ";
                        ?>
                    </div>
                    <div class="row">
                        <?php
                            echo "
                                <div id=\"miniatures\">
                                    <img class=\"img-fluid col-md-2 miniature\" src=\"$images[1]\" alt=\"$images[1]\" />
                                    <img class=\"img-fluid col-md-2 miniature\" src=\"$images[2]\" alt=\"$images[2]\" />
                                    <img class=\"img-fluid col-md-2 miniature\" src=\"$images[3]\" alt=\"$images[3]\" />
                                    <img class=\"img-fluid col-md-2 miniature\" src=\"$images[4]\" alt=\"$images[4]\" />
                                </div>
                            ";
                        ?>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <p>
                        <?php
                            echo "
                                <h2>$product</h2>
                                <h3>Producer : $producer</h3>
                                <h4 id=\"prix\">$price$</h4>
                            ";
                        ?>
                        <hr>
                        <div class="text-right">Available</div>
                        <hr>
                        <div class="float-right">
<!--essayer de faire un bouton qui gère aussi la quantité-->
                            <a href="" class="btn btn-primary">
                                Add To Cart<i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    </p>
                </div>
            </div>
            <div class="row">
              <div class="row">
                <div class="col-8">
                    <h3>Description</h3>
                    <div id="description">
                        <?php
                            echo "$description";
                        ?>
                    </div>
                    <h3>Caracteristics</h3>
                    <div id="caracteristics">
                        <?php
                            echo "$caracteristics";
                        ?>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </main>

        <?php
            require_once('scripts/footer.php');
        ?>
    </body>
</html>