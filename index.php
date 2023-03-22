<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <p>hallo wereld</p>
    <div class="background">
        <header>
            <nav>
                <div class="logo-img header">
                    <img src="img/Sushi-Logo.png" alt="">
                </div>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">RESERVATIONS</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <a href="https://www.bol.com/nl/nl/p/realistische-dildo-met-zuignap-dildo-met-sterke-zuignap-ook-voor-anaal-gebruik-20-cm/9200000117546316/?s2a=&bltgh=pxgGY68y0u8X6l-zWYFCiQ.2_53_54.55.FeatureOption#productTitle"
                        target="_blank">
                        <button>ORDER</button>
                    </a>
                </ul>
                <a href="pages/login.php" class="login">
                    <svg class="user-svg" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="m16 17a6 6 0 1 1 6-6 6 6 0 0 1 -6 6zm0-10a4 4 0 1 0 4 4 4 4 0 0 0 -4-4z"></path>
                            <path
                                d="m16 31a15 15 0 0 1 -11.59-5.49l-.52-.64.52-.63a15 15 0 0 1 23.18 0l.52.63-.52.64a15 15 0 0 1 -11.59 5.49zm-9.49-6.12a13 13 0 0 0 19 0 13 13 0 0 0 -19 0z">
                            </path>
                            <path
                                d="m16 31a15 15 0 1 1 11.59-5.49 15 15 0 0 1 -11.59 5.49zm0-28a13 13 0 1 0 13 13 13 13 0 0 0 -13-13z">
                            </path>
                            <path d="m5.18 24.88s10.07 11.25 20.32 1.12l1.32-1.12s-8.56-8.88-17.25-3.55z"></path>
                            <circle cx="16" cy="11" r="5"></circle>
                        </g>
                    </svg>
                </a>
            </nav>
        </header>
        <div class="box-text">
            <h1>A True Taste of Japanese Cuisine</h1>
            <h2>Made fresh when you order.</h2>
        </div>
    </div>

    <div class="discounts">
        <div class="text-box-discounts">
            <h1>DISCOUNTS</h1>
            <h2>for this week</h2>
        </div>
        <p class="text-discounts">*Login to get your discount</p>
        <div class="blackbox">
            <div class="item1 items">
                <div class="img">
                    <img src="img/item-1-img.jpg" alt="">
                </div>
                <p>SALMON NIGIRI</p>
            </div>
            <div class="item2 items">
                <div class="img">
                    <img src="img/item-2-img.jpg" alt="">
                </div>
                <p>CUCUMBER HOSOMAKI</p>
            </div>
            <div class="item3 items">
                <div class="img">
                    <img src="img/item-3-img.jpg" alt="">
                </div>
                <p>PUMPKIN CROQUETTES (3 PCS)</p>
            </div>
            <form name="discount" action="index.php" method="post">
                <input type="checkbox" name="checkDiscount" value="false" />
                <input type="submit" name="form-submit" value="Submit" />
            </form>


        </div>
    </div>
    <!-- <div class="logo-img">
        <img src="https://cdn.domestika.org/c_fit,dpr_auto,f_auto,t_base_params,w_820/v1618249105/content-items/007/651/207/Datovy%25CC%2581%2520zdroj%25203-original.png?1618249105"
            alt="">
    </div> -->
    <footer></footer>

    <?php 
        require_once 'pages/conn.php';
        // if form submitted
        if (isset($_POST['submit'])) {
            // get input from form into vars
            $checkDiscount = $_POST['checkDiscount'];
            
    
            // insert user an pass into database
            if ($_POST[$checkDiscount] == true)
            {
                $discountprice = $price / 100 * 90;
                echo $discountprice;
            }
            $query = "INSERT INTO discounts (checkDiscount)VALUES (?)";
            $stmt = $conn->prepare($query);
            $stmt->execute([$discountprice]);

    
            // header('Location: login.php');
        }
    ?>
    <script scr="js/media.js"></script>
</body>

</html>