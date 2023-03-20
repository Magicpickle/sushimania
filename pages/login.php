<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="background">
        <header>
            <a class="logo-img header" href="../index.php">
                <img src="../img/Sushi-Logo.png" alt="">
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
        <!-- <div class="box-text">
            <h1>A True Taste of Japanese Cuisine</h1>
            <h2>Made fresh when you order.</h2>
        </div> -->
        <div class="box-form-login-register">
            <div class="box-form-login">
                <h1>LOGIN</h1>
                <form name="login" action="login.php" method="post">
                    <input type="text" name="username" placeholder="Username" require_once>
                    <input type="password" name="password" id="password" placeholder="Password" require_once>
                    <input type="submit" name="submit" value="submit" require_once>
                    <div class="box-checkbox">
                        <input type="checkbox" id="check" name="check" onclick="myFunction()">
                        <p>Show password</p>
                    </div>
                </form>
            </div>
            <a href="register.php">
                <div class="register">
                    <input type="submit" name="register" value="register" require_once>
                </div>
            </a>
        </div>
    </div>
</body>
<?php
    require_once 'conn.php';

    if (isset($_POST['submit'])) {
        // get input from form into vars
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT username, password FROM users WHERE username=:username AND password=:password");
        $stmt->execute(['username' => $username, 'password' => $password]);
        $user = $stmt->fetch();

        if ($user != false) {
            echo "login succes <br>";
            echo "welcome " .$user['username'] . "! <br> password: " . $user['password'] . "<br>";
        } else {
            echo "account does not exist.. <br>";
        }
    }
?>
<script>
function myFunction() {
    const x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
        console.log("shit")
    } else {
        x.type = "password";
    }
}
</script>

</html>