<?php
include('Reg.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Responsive Bootstrap Login - Signup form</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.3/litera/bootstrap.min.css'>
    <link rel="stylesheet" href="css/AdminLR.css">

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
                            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="register-form" method="post" enctype="multipart/form-data" id="registeraccount">
                                <fieldset id="sign-up">
                                    <div id="firstname-lastname">
                                        <label class="form-group w-50">
                                            First Name :
                                            <input type="text" name="FirstName" id="firstname" class="form-control" placeholder="abbas">
                                        </label>
                                        <label class="form-group w-50">
                                            Last Name :
                                            <input type="text" name="LastName" id="lastname" class="form-control" placeholder="allouch">
                                        </label>
                                    </div>


                                    <label class="form-group w-100">
                                        Username
                                        <input type="text" name="username" id="" class="form-control rounded-0" placeholder="Abbas 22">
                                    </label>
                                    <label class="form-group w-100">
                                        Email
                                        <input type="text" name="email" id="" class="form-control" placeholder="abbas404@example.com">
                                    </label>
                                    <label class="form-group w-100">
                                        Password
                                        <input type="password" name="password" id="" class="form-control " placeholder="*********">
                                    </label>


                                    <div id="country-phonenumber">
                                        <label class="form-group w-100">
                                            Region
                                            <input type="text" name="region" id="country" class="form-control " placeholder="lebanon">
                                        </label>

                                        <label class="form-group w-100">
                                            phonenumber
                                            <input type="text" name="phonenumber" id="phonenumber" class="form-control " placeholder="12-3432-1254">
                                        </label>
                                    </div>


                                    <div id="country-phonenumber">
                                        <label class="form-group">
                                            Register for <br>
                                            <input id="Adminrole" name="role" type="radio" value="1">
                                            <label for="Adminrole" id="Adminrole">1-Admin Registration</label>
                                            <input id="Customerrole" name="role" type="radio" value="2">
                                            <label for="Customerrole" id="Customerrole">2-Customer Regitration</label>
                                        </label>
                                    </div>

                                    <button class="btn btn-success btn-block mb-3" type="submit" id="submit" name="submit">
                                        Sign Up
                                    </button>

                                    <p class="mb-0 text-center">
                                        Have an account? <a href="Login.php" class="login-toggle">Login here</a>
                                    </p>
                                    <div id="alert" class="alert alert-primary" role="alert">
                                        <?php

                                        echo $error
                                        ?>
                                </fieldset>
                            </form>




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
    <script src="JS/Register.js"></script>

</body>

</html>