<?php 
session_start();
require_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link rel="stylesheet" href="../css/user.css">
    <link rel="icon" type="image" href="../img/sushi-logo-favicon.png">
</head>

<body>
    <div class="background">
        <header>
            <nav>
                <a class="logo-img header" href="../index.php">
                    <img src="../img/Sushi-Logo.png" alt="">
                </a>
                <ul>
                    <li><a href="../index.php">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">RESERVATIONS</a></li>
                    <li><a href="#">CONTACT</a></li>

                    <!-- <a href="https://www.bol.com/nl/nl/p/realistische-dildo-met-zuignap-dildo-met-sterke-zuignap-ook-voor-anaal-gebruik-20-cm/9200000117546316/?s2a=&bltgh=pxgGY68y0u8X6l-zWYFCiQ.2_53_54.55.FeatureOption#productTitle"
                        target="_blank">
                        <button>ORDER</button>
                    </a> -->
                    <?php 
                    if($_SESSION['rol'] <= 3)
                    {
                        echo '<li><a class="owner" href="manager.php">MANAGE</a></li>';
                        echo '<li><a class="owner" href="menu-items.php">MENU ITEMS</a></li>';
                    }
                    ?>
                </ul>
                <form name="logout" action="user.php" method="post">
                    <input type="submit" name="submit" value="LOGOUT">
                </form>
                <!-- <div class="box-login">
                    <?php 
                    // if (isset($_SESSION['username']))
                    // { 
                    //     echo '<a href="pages/user.php" class="user">
                    //     <svg class="user-svg" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                    //         <g>
                    //             <path d="m16 17a6 6 0 1 1 6-6 6 6 0 0 1 -6 6zm0-10a4 4 0 1 0 4 4 4 4 0 0 0 -4-4z">
                    //             </path>
                    //             <path
                    //                 d="m16 31a15 15 0 0 1 -11.59-5.49l-.52-.64.52-.63a15 15 0 0 1 23.18 0l.52.63-.52.64a15 15 0 0 1 -11.59 5.49zm-9.49-6.12a13 13 0 0 0 19 0 13 13 0 0 0 -19 0z">
                    //             </path>
                    //             <path
                    //                 d="m16 31a15 15 0 1 1 11.59-5.49 15 15 0 0 1 -11.59 5.49zm0-28a13 13 0 1 0 13 13 13 13 0 0 0 -13-13z">
                    //             </path>
                    //             <path d="m5.18 24.88s10.07 11.25 20.32 1.12l1.32-1.12s-8.56-8.88-17.25-3.55z"></path>
                    //             <circle cx="16" cy="11" r="5"></circle>
                    //         </g>
                    //     </svg>
                    // </a>';
                    //     echo '<p>Hello!, ' . $_SESSION['username'];
                    //     echo '</p>';
                    // }
                    // else 
                    // {
                    //     echo '<a href="pages/login.php" class="login">

                    //     <svg class="user-svg" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                    //         <g>
                    //             <path d="m16 17a6 6 0 1 1 6-6 6 6 0 0 1 -6 6zm0-10a4 4 0 1 0 4 4 4 4 0 0 0 -4-4z">
                    //             </path>
                    //             <path
                    //                 d="m16 31a15 15 0 0 1 -11.59-5.49l-.52-.64.52-.63a15 15 0 0 1 23.18 0l.52.63-.52.64a15 15 0 0 1 -11.59 5.49zm-9.49-6.12a13 13 0 0 0 19 0 13 13 0 0 0 -19 0z">
                    //             </path>
                    //             <path
                    //                 d="m16 31a15 15 0 1 1 11.59-5.49 15 15 0 0 1 -11.59 5.49zm0-28a13 13 0 1 0 13 13 13 13 0 0 0 -13-13z">
                    //             </path>
                    //             <path d="m5.18 24.88s10.07 11.25 20.32 1.12l1.32-1.12s-8.56-8.88-17.25-3.55z"></path>
                    //             <circle cx="16" cy="11" r="5"></circle>
                    //         </g>
                    //     </svg>


                    // </a>';
                    // }

                    ?>
                </div> -->
            </nav>
        </header>
    </div>

    <?php 
    if (isset($_POST['submit'])) {
        session_start();
        session_destroy();
        header ("location: ../index.php");
    }

    ?>
</body>

</html>