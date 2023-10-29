<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--==title=========================-->
    <title>Signup - StarWar</title>
    <!--==CSS===========================-->
    <link rel="stylesheet" href="css/style.css">
    <!--==Import-Poppins-Font===========-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!--==fontAwesome-for-icons=========-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--==fav-icon======================-->
    <link rel="shortcut icon" href="images/fav-icon.png">
</head>

<body>

    <!--==Header================================-->
    <header>
        <nav class="navigation">
            <!--**menu-btn************-->
            <input type="checkbox" class="menu-btn" id="menu-btn">
            <label for="menu-btn" class="menu-icon">
                <span class="nav-icon"></span>
            </label>
            <!--**logo***************-->
            <a href="index.php" class="logo">
                <img src="images/logo.webp" alt="StarWar Logo">
            </a>
            <!--**menu*********************-->
            <ul class="menu">
                <li><a href="characters.php">Characters</a></li>
                <li><a href="movies.php">Movies & TV Shows</a></li>
                <li><a href="games.php">Games</a></li>
                <li><a href="community.php">Community</a></li>
            </ul>
            <!--**right-nav-(cart-like)*****-->
            <div class="right-nav">
                <?php if($_SESSION['logged'] == TRUE){ ?>
                    <!--user-->
                    <a href="login.php"  style="color: white; background:none;">
                        <i class="fa fa-user-circle fa-flip"></i><?php echo $_SESSION['username']; ?><i class="fa fa-user-circle fa-flip"></i>
                    </a>

                    <?php }else{ ?>

                    <!--user-->
                    <a href="login.php" class="user" title="login">
                        <i class="fa-solid fa-user"></i>
                    </a>
                <?php } ?>
            </div>
        </nav>
    </header>
    <!--Header-end-->


    <!--==search-container===============-->
   


    <!--==SignUp======================================-->
    <section id="items" class="login">
        <!--**heading***********-->
        <div class="items-heading">
            <h1>SingUp</h1>
        </div>


        <form action="php/signupScript.php" method="post">
            <input type="text" placeholder="Full Name" name="name" required>
            <input type="text" placeholder="Username" name="username" required>
            <input type="email" placeholder="Example@gmail.com" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="password" placeholder="Re-Password" name="re-password" required>
            <button type="submit" name="signup">SignUp</button>
            <a href="login.php">Already Have A Account?</a>
        </form>


    </section>


    <!--==footer==============================-->
    <footer>
        <span>© StarWar</span>
        <span>Copyright 2023 - StarWar</span>
    </footer>

</body>

</html>