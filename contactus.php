<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <title>Contact Us</title>
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
                    <div class="nav-item item4"><a href="./contactus.php" class="active-link">Contact Us</a></div>   
                </div>  
                <a href="./signin.php" class="nav-signin"><div class="item5"><i class="fa-solid fa-right-from-bracket"></i> &nbsp; Sign In</div></a>
                <div class="divider"></div>
                <a href="./signup.php" class="nav-signin"><div class="item5"><i class="fa-solid fa-arrow-up-from-bracket"></i> &nbsp; Sign Up</div></a>
            </div>
        </div>
    </div>
    <div class="bottom">

    <div class="background">
        <div class="contact-container">
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-left">
                        <div class="screen-header-button close"></div>
                        <div class="screen-header-button maximize"></div>
                        <div class="screen-header-button minimize"></div>
                    </div>
                    <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                    </div>
                </div>

                <div class="screen-body">
                    <div class="screen-body-item left">
                        <div class="app-title">
                            <span>CONTACT</span>
                            <span>US</span>
                        </div>
                        <div class="app-content">
                            We are here to help you in any way we can, <br/>and we would love to hear from you.
                            <br/><br/>
                            <a href="#"><i class="fa-brands fa-square-facebook iconstyle"></i></a> &emsp;
                            <a href="#"><i class="fa-brands fa-square-instagram iconstyle"></i></a> &emsp;
                            <a href="#"><i class="fa-brands fa-square-twitter iconstyle"></i></a>
                        </div>
                        <div class="app-gmail"><a href="mailto:care4you@gmail.com"><i class="fa-solid fa-envelope"></i></a> &nbsp; Gmail Info : <a href="mailto:helper4you@gmail.com">helper4you@gmail.com</a></div>
                        <div class="app-contact"><i class="fa-solid fa-phone"></i> &nbsp; Contact Info : +94 112 220 666 </div>
                    </div>

                    <div class="screen-body-item">
                        <form action="" method="POST">
                        <div class="app-form">
                            <div class="app-form-group">
                                <input type="text" class="app-form-control" placeholder="Name" name="name">
                            </div>
                            <div class="app-form-group">
                                <input type="email" class="app-form-control" placeholder="Email Address" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}.$" required="">
                            </div>
                            <div class="app-form-group">
                                <input type="text" class="app-form-control" placeholder="Contact Number" name="contactnumber" pattern="[0-0]{1}[0-9]{9}">
                            </div>
                            <div class="app-form-group message">
                                <span>
                                <textarea class="app-form-control msg-textarea" placeholder="Message" cols="5" row="2" name="message" required=""></textarea>
                                </span>
                            </div>
                            <div class="app-permission">
                                <input type="checkbox" class="app-permission checkbox" name="agree" value="1">
                                I consent to the storage of my data in accordance with the privacy policy*
                            </div>
                            <br />
                            <div class="app-form-group buttons">
                                <button type="reset" class="app-form-button">Cancel</button>
                                <button type="submit" class="app-form-button" name="send">Send</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
</body>
</html>