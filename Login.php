<?php

include("adminlogin.php");
include("customerlogin.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rento</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.3/litera/bootstrap.min.css'>
    <link rel="stylesheet" href="css/AdminLR.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body>
    <!-- partial:index.partial.html -->
    <header>

        <Div class="containerfluid" id="allcontainer">

            <div class="row" id="navbar">

                <!-- logo -->
                <a href="./" class="logo mr-auto">
                    <span class="rento-logo">Rento</span>
                </a>
                <!-- links -->
            </div>
        </Div>
    </header>

    <main>
        <section class="login d-flex align-items-center ">
            <div class="container mt-2">
                <div class="row justify-content-around">
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block mr-auto">
                        <picture>
                            <img class="img-fluid" src="img/pexels-isaw-company-945688.jpg" alt="login to ">
                        </picture>
                    </div>

                    <div class="col-xl-5 col-lg-6 col-md-7 col-sm-10 d-flex align-items-center px-4 px-sm-3 px-lg-4">
                        <div class="form-toggle position-relative  w-100">

                            <fieldset class="valid-check" id="log-in">
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="valid-check" enctype="multipart/form-data" id="log-in">
                                    <span class="mb-2 text-black">Welcome back</span>
                                    <h3 class="text-black font-weight-bold mb-3">Login to your account</h3>
                                    <label class="form-group w-100">
                                        Email
                                        <input type="text" name="email" id="" class="form-control" placeholder="abbas404@example.com">
                                    </label>
                                    <label class="form-group w-100">
                                        Password
                                        <input type="password" name="password" id="" class="form-control " placeholder="*********">
                                    </label>

                                    <div class="d-flex justify-content-between mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Remember me?</label>
                                        </div>
                                        <a href="#" class="btn-link forget-toggle">Forgot password?</a>
                                    </div>
                                    <button name="submit" onclick="myFunction()" id="submit" class="btn btn-primary submit-validation  btn-submit btn-block mb-3">
                                        Login now
                                    </button>

                                </form>
                                <p class="text-grey text-center">
                                    Dont have an account?

                                    <a href="Register.php" class="text-primary sign-up-toggle" id="signUp">
                                        Signup here
                                    </a>
                                </p>

                                <div id="alert" class="alert alert-primary" name="alert" role="alert">
                                    <?php

                                    echo $error
                                    ?>
                                </div>
                            </fieldset>




                            <!-- dfdf -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br><br>

    </main>
    <footer id="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Our Newsletter</h4>
                        <p>Subscribe to our newsletter to check our latest news and offers</p>
                    </div>
                    <div class="col-lg-6">
                        <form> <input type="email" name="email" placeholder="enter your email here"><input type="submit" value="Subscribe"> </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="home.html">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="rental.html">Apartments</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="termsOfService.html">Terms of service</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="privacyPolicy.html">Privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Quick links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Villa</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Apartment</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Tokyo</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Lebanon</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="listing.html">List a property</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p> A108 Adam Street <br> New York, NY 535022<br> United States <br><br> <strong>Phone:</strong>
                            +1 5589
                            55488 55<br> <strong>Email:</strong> Travolta@example.com<br> </p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>About Rento</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt placeat iste culpa repellat
                            velit
                            ducimus repudiandae asperiores aperiam quis officia.</p>
                        <div class="social-links mt-3"> <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright"> © Copyright <strong><span>Rento</span></strong>. All Rights Reserved Designed by <a href="about.html">Rento</a> </div>
            <div class="credits"> </div>
        </div>
    </footer>

    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src="./JS/login.js">


    </script>

</body>

</html>