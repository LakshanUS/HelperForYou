<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Sign In</title>
    <link rel="icon" type="images/x-icon" href="./images/logoicon.png" />
    <script src="https://kit.fontawesome.com/ca1b4f4960.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="top">
        <div class="navbar">
            <a href="./index.php"><img src="./images/logo.png" alt="logo" class="logo"></a>
            <div class="nav-link">
                <div class="normal-link">
                    <div class="nav-item item1"><a href="./index.php">Home</a></div>
                    <div class="nav-item item2"><a href="./services.php">Services</a></div>
                    <div class="nav-item item3"><a href="./about.php">About</a></div>
                    <div class="nav-item item4"><a href="./contactus.php">Contact Us</a></div>
                </div>
                <a href="./signin.php" class="nav-signin">
                    <div class="item5"><i class="fa-solid fa-right-from-bracket"></i> &nbsp; Sign In</div>
                </a>
                <div class="divider"></div>
                <a href="./signup.php" class="nav-signin">
                    <div class="item5"><i class="fa-solid fa-arrow-up-from-bracket"></i> &nbsp; Sign Up</div>
                </a>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="wrapper">

            <div class="container">
                <div class="container_content">
                    <div class="container_content_inner">

                        <form class="form-signin" action="#" method="POST">
                            <h2 class="form-signin-heading">Sign In</h2>
                            <div class="par">
                                <p class="form-signin-username">User Name</p>
                                <input type="text" class="form-control" name="username"
                                    placeholder="Enter username here" required="" autofocus="true" /><br />

                                <p class="form-signin-password">Password</p>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter password here" required="" />

                                <div class="forgot-password">
                                    <a href="pwd-forgetpassword.php" class="forgot-password">Forgot password?</a>
                                </div>

                                <br />
                                <br />

                                <a href="signup.php" class="donothave-account">Do not have an account?</a>

                                <button class="btn-signin" name="submit" type="submit"> <span> Sign In </span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
</body>

</html>