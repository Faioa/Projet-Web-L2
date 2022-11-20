<?php
    session_start();
    require_once 'scripts/config.php';

    $query = $DB->query("SELECT FirstName, LastName, Gender, Age, Address, PhoneNumber, Email, Password FROM user WHERE Email='$_SESSION[0]'");


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
        <link rel="stylesheet" href="css/profile_styles.css">
        <title>My Profile - PickaGuitar</title>
    </head>
    <body>
        <?php
            require_once('scripts/header.php');
        ?>
        <header>
            <nav>
                <div id="firstheader">
                    <li><a href="index.html" title="home">HOME</a></li>
                    <li><a href="store.html" title='store'>STORE</a></li>
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
                        <a href="cart.html" title="cart">
                            <span class="material-symbols-outlined">shopping_cart</span>
                        </a>
                    </li>
                </div>
            </nav>
        </header>
        <main>
            <form action="" method="post" class="container p-4">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-10">
                        <h1 class="titre1">My Informations</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="name">First Name</label>
                        <input type="text" id="firstname" name="firstname" value="Matt" readonly="readonly">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="lastname">Name</label>
                        <input type="text" id="name" name="name" value="LPB" readonly="readonly">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="age">Age</label>
                        <input type="text" id="age" name="age" value="12" readonly="readonly">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="gender">Gender</label>
                        <input type="text" id="gender" name="gender" value="Unknown" readonly="readonly">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="tel region">Phone Number</label>
                        <input type="text" id="tel" name="tel" value="112" readonly="readonly">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" value="mattlpb@gmail.com" readonly="readonly"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" value="80 rue de la convention 75015 Paris" readonly="readonly">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="password">Password</label>
                        <input class="pswd" type="text" id="password" name="password" value="******" readonly="readonly">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <button id="buttonmodify" class="button1" type="button" onclick=modify()>
                            <script src="profile.js"></script>
                            Modify my Informations
                        </button>
                    </div>
                    <div class="col-3">
                        <button class="button2" type="button" onclick="alert('Are you sure ? We will miss you !')">Delete Account</button>
                    </div>
                </div>
            </form>
        </main>
        <?php
            require_once('scripts/footer.php');
        ?>
        <footer class="footer">
            <hr/>
            <h1><span>Contact us</span></h1>
            <div>
                <div>
                    <p>
                        You can contact our Customer Service Available 24/7 for any Questions or Demands.
                    </p>
                    <div id="footercontact1">
                        <li>
                            <a href="tel:+33641567139" title="tel"><span class="material-symbols-outlined">call</span>&nbsp;<span>+33641567139</span></a>
                        </li>
                        <li>
                            <a href="mailto:pickaguitar@gmail.com" title="email"><span class="material-symbols-outlined">mail</span>&nbsp; <span>pickaguitar@gmail.com</span></a>
                        </li>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>