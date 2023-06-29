<?php
require_once '../conn.php';
session_start();
if($_SESSION['rol'] > 3)
{
    header ("location: ../../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage</title>
    <link rel="stylesheet" href="../../css/manager.css">
    <link rel="icon" type="image" href="../../img/sushi-logo-favicon.png">
</head>

<body>
    <div class="background">
        <header>
            <a class="logo-img header" href="../../index.php">
                <img src="../../img/Sushi-Logo.png" alt="">
            </a>
            <!-- <nav>
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">RESERVATIONS</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <a href="https://www.bol.com/nl/nl/p/realistische-dildo-met-zuignap-dildo-met-sterke-zuignap-ook-voor-anaal-gebruik-20-cm/9200000117546316/?s2a=&bltgh=pxgGY68y0u8X6l-zWYFCiQ.2_53_54.55.FeatureOption#productTitle"
                            target="_blank">
                            <button>ORDER</button>
                        </a>
                    </ul>
                </nav> -->

        </header>

        <div class="button-group">
            <a href="add.php">
                <button>
                    <p>Add</p>
                </button>
            </a>
            <a href="edit.php">
                <button>
                    <p>Edit</p>
                </button>
            </a>
            <a href="delete.php">
                <button>
                    <p>Delete</p>
                </button>
            </a>
        </div>

    </div>
</body>

</html>