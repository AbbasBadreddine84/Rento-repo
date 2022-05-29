<?php
include("connection.php");
include("test.php");
if (!isset($_SESSION['login_admin'])) {

  header("Location: Login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Test</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="css/Profile.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

  <link rel="stylesheet" href="mdb-bootstrap/css/mdb.min.css" />
</head>

<body>

  <div class="d-flex" id="wrapper">

    <div class="bg-primary" id="sidebar-wrapper">
      <!-- header -->
      <div class="sidebar-heading text-center py-4 fs-4 fw-bold border-bottom border-end">
        <i class=""></i><span class="text-white">Rento</span><br>
        <span class="fw-bold text-white" id="spanT">A home for every renter</span>
        <img src="img/download.png" class="rounded-circle mt-5" id="profile" alt=""><br>
        <span class="mt-2 text-white fs-5">Name</span>

      </div>
      <!-- content -->
      <div class="list-group list-group-flush mx-1 mt-3">

        <a href="adminDashboard.php" class="list-group-item list-group-item-action list-group-item-1  hover-shadow bg-primary">
          <i class="fas fa-home fa-fw me-3"></i> <span>Home</span>
        </a>
        <a class="list-group-item list-group-item-action list-group-item-1  mt-5 bg-primary hover-shadow" id="Property" aria-current="true" data-mdb-toggle="collapse" href="#property" aria-expanded="true" aria-controls="property">
          <i class="fas fa-building fa-fw me-3"></i><span>Property</span>
        </a>
        <!-- Collapsed content -->
        <ul id="property" class="collapse show list-group hover-shadow bg-primary list-group-flush">
          <li class="list-group-item list-group-item-2 py-1 bg-primary text-white text-center" id="proplist">
            <a href="PropertyList.html" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Property List</span></a>
          </li>
          <li class="list-group-item py-1 list-group-item-2 bg-primary text-white text-center">
            <a href="PropertyAdd.html" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Add Property</span></a>
          </li>

          <li class="list-group-item py-1 list-group-item-2 bg-primary text-white text-center" id="propdet">
            <a href="PropertyDetail.html" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Property Details<span></a>
          </li>
        </ul>

        <a class="list-group-item  list-group-item-action list-group-item-1  mt-5 hover-shadow bg-primary" aria-current="true" data-mdb-toggle="collapse" href="#propertyCategory" aria-expanded="true" aria-controls="propertyCategory">
          <i class="fas fa-list fa-fw me-3"></i><span>Property Category</span>
        </a>
        <!-- Collapsed content -->
        <ul id="propertyCategory" class="collapse hover-shadow show list-group list-group-flush">
          <li class="list-group-item list-group-item-2 py-1 bg-primary text-white text-center" id="propdVilla">
            <a href="PropertyCVilla.html" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Villa</span></a>
          </li>
          <li class="list-group-item list-group-item-2 py-1 bg-primary text-white text-center" id="propApp">
            <a href="PropertyCAp.html" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Apartment</span></a>
          </li>

        </ul>

        <a class="list-group-item  list-group-item-action list-group-item-1 hover-shadow  mt-5 bg-primary" aria-current="true" data-mdb-toggle="collapse" href="#Customers" aria-expanded="true" aria-controls="Customers">
          <i class="fas fa-users fa-fw me-3"></i><span>Customers</span>
        </a>
        <!-- Collapsed content -->
        <ul id="Customers" class="collapse show hover-shadow list-group list-group-flush">
          <li class="list-group-item list-group-item-2 py-1 bg-primary text-white text-center" id="tenants">
            <a href="TenantsView.html" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Tenants</span></a>
          </li>
          <li class="list-group-item list-group-item-2 py-1 bg-primary text-white text-center" id="buyer">
            <a href="BuyerView.html" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Buyer</span></a>
          </li>

        </ul>

        <a class="list-group-item list-group-item-action list-group-item-1  hover-shadow mt-5 bg-primary" aria-current="true" data-mdb-toggle="collapse" href="#Profit" aria-expanded="true" aria-controls="Profit">
          <i class="fas fa-dollar-sign fa-fw me-3"></i><label>Profit</label>
        </a>
        <!-- Collapsed content -->
        <ul id="Profit" class="collapse show hover-shadow list-group list-group-flush">
          <li class="list-group-item list-group-item-2 py-1 bg-primary text-white text-center" id="Ptenants">
            <a href="TenantProfit.html" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Tenants</span></a>
          </li>
          <li class="list-group-item list-group-item-2 py-1 bg-primary text-white text-center" id="Pbuyer">
            <a href="BuyerProfit.html" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Buyer</span></a>
          </li>
        </ul>
      </div>
    </div>
    <!-- sidebar end -->


    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light py-4 px-4">
        <div class="d-flex align-items-center">
          <i class="fas fa-align-left  fs-4 me-3" id="menu-toggle"></i>
          <h2 class="fs-4 m-0">Profile</h2>
        </div>

        <button class="navbar-toggler collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav ms-auto mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user me-2"></i>Name
              </a>
              <ul class="dropdown-menu progress-bar-animated" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="Profile.html"><i class="fas fa-home-user"></i> Profile</a></li>
                <li><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out"></i>Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid px-5">
        <div class="row clearfix mt-5">


          <div class="card hover-shadow">
            <div class="row">
              <div class="col-sm-6">
                <div class="header">
                  <form id="form" class="card hover-shadow needs-validation" novalidate>
                    <h2>
                      <strong class="text-primary ms-2 fs-3">Account</strong><br>
                    </h2>
                    <ul class="ul">
                      <li><i class="fas fa-user fs-6"></i> <label class="fs-6 ms-2"><?php
                                                                                    echo $FirstName
                                                                                    ?></label>
                      </li>
                      <li> <i class="fas fa-location fs-6"></i><label class="fs-6 ms-2"><?php echo $region ?></label></li>
                      <li> <i class="fas fa-mobile fs-6"></i><label class="fs-6 ms-2"><?php echo $phonenumber ?></label></li>
                      <li><i class="fas fa-envelope fs-6"></i><label class="ms-2 fs-6"><?php echo $email ?></label></li>
                    </ul>
                </div>
              </div>
              <div class="col-sm-2"></div>
              <div class="col-sm-4">
                <div class="image1">
                  <img src="" alt="" id="frame" class="rounded-circle img-fluid">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="span1">
                  <i class="fas fa-image"></i><span class="mt-5 ms-2">Upload Image</span>
                  <input type="file" id="imageInput" class="form-check form-control imageInput mt-4">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5 mb-4">

          <div class="header">
            <h2>
              <strong class="text-primary ms-2 fs-3">Details</strong><br>
            </h2>
          </div>
          <div class="row clearfix mt-5 ms-3">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="top">
                <a href=""><i class="fas fa-user"></i></a>
                <div class="form-group form-floating">
                  <input type="text" class="form-check form-control inputForm" value="<?php echo $username ?>" name="usernameProfile" id="usernameProfile" aria-label="Floating label select example_1" required>

                  <div class="valid-feedback">
                    Looks Good!
                  </div>
                  <div class="invalid-feedback">
                    username cannot be blank or have space
                  </div>

                  <label for="usernameProfile">Username</label>
                </div>

              </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-4">
              <a href=""><i class="fas fa-envelope"></i></a>
              <div class="form-group form-floating">
                <input type="text" class="form-check form-control inputForm" value="<?php echo $email ?>" name="email" id="email" aria-label="Floating label select example_2" required>
                <label for="email">Email</label>
                <div class="valid-feedback">
                  Looks Good!
                </div>
                <div class="invalid-feedback">
                  Please Enter a valid email
                </div>
              </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-4">
              <a href=""><i class="fas fa-lock"></i></a>
              <div class="form-group form-floating">
                <input type="password" class="form-check form-control inputForm" name="password" value="<?php echo $password ?>" id="password" aria-label="Floating label select example_3" required>

                <div class="valid-feedback">
                  Looks Good!
                </div>
                <div class="invalid-feedback">
                  Please make sure your password contains at least 8 character and (Capitalletter,number and a special charcter)with no spaces
                </div>

                <label for="floatingPassword">Password</label>
              </div>
            </div>
          </div>
          <!-- first -->
          <div class="row clearfix mt-5 ms-3">
            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
              <a href=""><i class="fas fa-user"></i></a>
              <div class="form-group form-floating">
                <input type="text" class="form-check form-control inputForm" name="FirstName" value="<?php echo $FirstName ?>" id="FirstName" aria-label="Floating label select example_3" required>
                <div class="valid-feedback">
                  Looks Good!
                </div>
                <div class="invalid-feedback">
                  first Name cannot be blank or more than 15 character
                </div>
                <label for="FirstName">First Name</label>
              </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
              <a href=""><i class="fas fa-user"></i></a>
              <div class="form-group form-floating">
                <input type="text" class="form-check form-control inputForm" name="LastName" value="<?php echo $LastName ?>" id="LastName" aria-label="Floating label select example_4" required>
                <div class="valid-feedback">
                  Looks Good!
                </div>
                <div class="invalid-feedback">
                  Last Name cannot be blank or more than 15 character
                </div>
                <label for="LastName">Last Name</label>
              </div>
            </div>



            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
              <a href=""><i class="fas fa-calendar"></i></a>
              <div class="form-group form-floating">
                <input type="date" class="form-check form-control inputForm" name="DateOfbirth" id="DateOfbirth" aria-label="Floating label select example_5" required>
                <div class="valid-feedback">
                  Looks Good!
                </div>
                <div class="invalid-feedback">
                  Enter a valid Date
                </div>

                <label for="DateOfbirth">Date of Birth</label>
              </div>
            </div>
          </div>

          <!-- second -->
          <div class="row clearfix mt-5 ms-3">
            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
              <a href=""><i class="fas fa-phone"></i></a>
              <div class="form-group form-floating">
                <input type="text" class="form-check form-control inputForm" name="PhoneNumber" value="<?php echo $phonenumber ?>" id="PhoneNumber" aria-label="Floating label select example_6" required>
                <div class="valid-feedback">
                  Looks Good!
                </div>
                <div class="invalid-feedback">
                  Enter a valid Phone Number
                </div>
                <label for="PhoneNumber">Phone Number(**-****-****)</label>
              </div>
            </div>



            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
              <a href=""><i class="fas fa-location"></i></a>
              <div class="form-group form-floating">
                <input type="text" class="form-check form-control inputForm" name="address" id="address" aria-label="Floating label select example_7" required>
                <div class="valid-feedback">
                  Looks Good!
                </div>
                <div class="invalid-feedback">
                  Address cannot be blank
                </div>
                <label for="address">Address</label>
              </div>
            </div>



            <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
              <a href=""><i class="fas fa-flag"></i></a>
              <div class="form-group form-floating">
                <input type="text" class="form-check form-control inputForm" name="Nationality" value="<?php echo $region ?>" id="Nationality" aria-label="Floating label select example_8" required>
                <div class="valid-feedback">
                  Looks Good!
                </div>
                <div class="invalid-feedback">
                  Nationality cannot be blank
                </div>
                <label for="Nationality">Nationality</label>
              </div>
            </div>
          </div>

          <!-- last -->



          <div class="row clearfix mt-4 mb-2">
            <div class="d-grid gap-2 d-md-flex justify-content-sm-end">
              <button class="btn btn-primary me-md-2 btn-Submit" type="submit">Submit</button>
            </div>
          </div>
          </form>
        </div>

      </div>
    </div>
  </div>


  <script src="JS/Profile.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <script type="text/javascript" src="mdb-bootstrap/js/mdb.min.js"></script>
  <script type="text/javascript"></script>
  <script>
    var element = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
      element.classList.toggle("toggled");
    };
  </script>
</body>

</html>