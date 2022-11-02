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
<!--Barre de navigation dans le header-->
        <header>
            <nav>
                <div id="firstheader">
                    <li><a href="index.php" title="home">HOME</a></li>
                    <li><a href="store.php" title='store'>STORE</a></li>
                    <li>
                        <form method="post">
                            <input type="search" placeholder="Search"></input>
                            <button>
                                <span class="material-symbols-outlined">search</span>
                            </button>
                        </form>
                    </li>
                </div>
  
                <div id="logoheaderdiv">
                    <a href="#head" title="head"><img id="logoheader" src="images/logo.png" alt=""></a>
                </div>

                <div id="secondheader">
                    <li>
                        <a href="#contact" title="contact">CONTACT</a>
                    </li>
                    <li>ACCOUNT
                        <ul id="sub-menu">
                            <?php
                                if(isset($_SESSION['user']))
                                {
                                    echo "
                                        <li>
                                            <a href=\"profile.php\" title=\"profile\">PROFILE</a>
                                        </li>
                                        <li>
                                            <a href=\"scripts/signout.php\" title=\"signout\">SIGN OUT</a>
                                        </li>";
                                }
                                else
                                {
                                    echo "
                                        <li>
                                            <a href=\"signup.php\" title=\"signup\">SIGN UP</a>
                                        </li>
                                        <li>
                                            <a href=\"signin.php\" title=\"signin\">SIGN IN</a>
                                        </li>";
                                }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <a href="cart.php" title="cart">
                            <span class="material-symbols-outlined">shopping_cart</span>
                        </a>
                    </li>
                </div>
            </nav>
        </header>

        <main>
        </main>

<!--Footer avec les contacts-->
        <footer id="contact">
            <hr/>
            <h1><span>Contact us</span></h1>
            <div>
                <div>
                    <p>
                        You can contact our <span>Customer Service</span>Available<span>24/7</span> for any Questions or Demands.
                    </p>
                    <div id="footercontact1">
                        <li>
                            <a href="tel:+33641567139" title="tel"><span class="material-symbols-outlined">call</span><span>+33641567139</span></a>
                        </li>
                        <li>
                            <a href="mailto:pickaguitar@gmail.com" title="email"><span class="material-symbols-outlined">mail</span><span>pickaguitar@gmail.com</span></a>
                        </li>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>