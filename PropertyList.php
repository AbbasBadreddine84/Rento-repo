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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="css/PropertyList.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

  <link rel="stylesheet" href="mdb-bootstrap/css/mdb.min.css" />
</head>

<body>

  <div class="d-flex" id="wrapper">

    <div class="bg-primary" id="sidebar-wrapper">
      <div class="sidebar-heading text-center py-4 fs-4 fw-bold border-bottom border-end">
        <i class=""></i><span class="text-white">Rento</span><br>
        <span class="fw-bold text-white" id="spanT">A home for every renter</span>
        <img src="<?php print 'img/' . $imageInput ?>" class="rounded-circle mt-5" id="profile" alt=""><br>
        <span class="mt-2 text-white fs-5"><?php print $FirstName . " " . $LastName ?></span>

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
            <a href="PropertyList.php" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Property List</span></a>
          </li>
          <li class="list-group-item py-1 list-group-item-2 bg-primary text-white text-center">
            <a href="PropertyAdd.php" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Add Property</span></a>
          </li>

          <li class="list-group-item py-1 list-group-item-2 bg-primary text-white text-center" id="propdet">
            <a href="PropertyDetail.php" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Property Details<span></a>
          </li>
        </ul>

        <a class="list-group-item  list-group-item-action list-group-item-1  mt-5 hover-shadow bg-primary" aria-current="true" data-mdb-toggle="collapse" href="#propertyCategory" aria-expanded="true" aria-controls="propertyCategory">
          <i class="fas fa-list fa-fw me-3"></i><span>Property Category</span>
        </a>
        <!-- Collapsed content -->
        <ul id="propertyCategory" class="collapse hover-shadow show list-group list-group-flush">
          <li class="list-group-item list-group-item-2 py-1 bg-primary text-white text-center" id="propdVilla">
            <a href="PropertyCVilla.php" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Villa</span></a>
          </li>
          <li class="list-group-item list-group-item-2 py-1 bg-primary text-white text-center" id="propApp">
            <a href="PropertyCAp.php" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Apartment</span></a>
          </li>

        </ul>

        <a class="list-group-item  list-group-item-action list-group-item-1 hover-shadow  mt-5 bg-primary" aria-current="true" data-mdb-toggle="collapse" href="#Customers" aria-expanded="true" aria-controls="Customers">
          <i class="fas fa-users fa-fw me-3"></i><span>Customers</span>
        </a>
        <!-- Collapsed content -->
        <ul id="Customers" class="collapse show hover-shadow list-group list-group-flush">
          <li class="list-group-item list-group-item-2 py-1 bg-primary text-white text-center" id="tenants">
            <a href="TenantsView.php" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Tenants</span></a>
          </li>
          <li class="list-group-item list-group-item-2 py-1 bg-primary text-white text-center" id="buyer">
            <a href="BuyerView.php" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Buyer</span></a>
          </li>

        </ul>

        <a class="list-group-item list-group-item-action list-group-item-1  hover-shadow mt-5 bg-primary" aria-current="true" data-mdb-toggle="collapse" href="#Profit" aria-expanded="true" aria-controls="Profit">
          <i class="fas fa-dollar-sign fa-fw me-3"></i><label>Profit</label>
        </a>
        <!-- Collapsed content -->
        <ul id="Profit" class="collapse show hover-shadow list-group list-group-flush">
          <li class="list-group-item list-group-item-2 py-1 bg-primary text-white text-center" id="Ptenants">
            <a href="TenantProfit.php" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Tenants</span></a>
          </li>
          <li class="list-group-item list-group-item-2 py-1 bg-primary text-white text-center" id="Pbuyer">
            <a href="BuyerProfit.php" class="text-reset"><i class="fas fa-arrow-circle-right me-1"></i> <span>Buyer</span></a>
          </li>
        </ul>
      </div>
    </div>
    <!-- sidebar end -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light py-4 px-4">
        <div class="d-flex align-items-center">
          <i class="fas fa-align-left  fs-4 me-3" id="menu-toggle"></i>
          <h2 class="fs-4 m-0">Property List</h2>
        </div>

        <button class="navbar-toggler collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav ms-auto mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user me-2"></i><?php print $FirstName ?>

              </a>
              <ul class="dropdown-menu progress-bar-animated" aria-labelledby="navbarDropdown">

                <li><a class="dropdown-item" href="Profile.php"><i class="fas fa-home-user"></i> Profile</a></li>
                <li><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out"></i>Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid px-5">
        <div class="row clearfix mt-1 g-4">
          <div class="col-lg-12">
            <div class="card mt-3 hover-shadow">
              <div class="header">
                <strong class="text-primary fw-bolder fs-4">Search</strong>
              </div>
              <div class="body">
                <div class="row clearfix">
                  <div class="col-sm-4 mt-3">
                    <div class="form-group form-floating">
                      <select class="form-select form-control" id="floatingSelectRental" aria-label="Floating label select example1">

                        <option value="Rent">For Rent</option>
                        <option value="Sale">For Sale</option>
                      </select>
                      <label for="floatingSelectRental">Rental</label>
                    </div>
                  </div>

                  <div class="col-sm-4 mt-3">
                    <div class="form-group form-floating">
                      <select class="form-select form-control" id="floatingSelectLocation" aria-label="Floating label select example2">

                        <option value="Rent">England</option>
                        <option value="Sale">Japan</option>
                      </select>
                      <label for="floatingSelectLocation">Location</label>
                    </div>
                  </div>


                  <div class="col-sm-4 mt-3">
                    <div class="form-group form-floating">
                      <input type="number" class="form-control" id="floatingPrice" aria-label="Floating label select example3">
                      <label for="floatingPrice">Price</label>
                    </div>
                  </div>
                </div>

                <div class="row clearfix">
                  <div class="col-sm-4 mt-3">
                    <div class="form-group form-floating">
                      <input type="number" class="form-control" id="floatingRoom" aria-label="Floating label select example4">
                      <label for="floatingRoom">Number of Room</label>
                    </div>
                  </div>

                  <div class="col-sm-4 mt-3">
                    <div class="form-group form-floating">
                      <select class="form-select form-control" id="floatingSelectType" aria-label="Floating label select example5">

                        <option value="Rent">Villa</option>
                        <option value="Sale">Apartment</option>
                      </select>
                      <label for="floatingSelectType">Type</label>
                    </div>
                  </div>


                  <div class="col-sm-4 mt-4">
                    <div class="form-group">
                      <button class="btn btn-primary btn-Submit form-control" type="button">Search</button>
                    </div>

                  </div>

                </div>

              </div>
            </div>
            <br>
            <br>
            <br>
          </div>
          <div class="col-lg-12">
            <div class="card property_list hover-shadow">
              <div class="body">
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="property_image">
                      <img src="/img/images (1).jpg" class="img-thumbnail img-fluid image-class" alt="img">
                      <span class="badge badge_Sale">For Sale</span>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-6">
                    <div class="property-content">
                      <div class="detail">
                        <h5 class="text-success fs-5 mt-0 mb-0">$390,0000</h5>
                        <h3 class="mt-1">
                          <a href="#" class="text-black fs-5">Villa</a>
                        </h3>
                        <h4 class="mt-0">
                          <a href="#" class="text-primary fs-5">Japan</a>
                        </h4>
                        <p class="text-muted mb-0">
                          In the Westminster Borough district of London, close to Madame Tussaud's, 6-bedroom house on Marble Arch has a garden, free WiFi and a washing machine.


                        </p>
                      </div>
                      <div class="property-icon mt-3 ms-1">
                        <a href="#" title="Square Feet"><i class="fas fa-bed "></i>
                          <span class="ms-2 mb-1">Bedroom: 5</span>
                        </a>
                        <a href="#" title="Square Feet"><i class="fa-solid fa-couch "></i>
                          <span class="ms-2 mb-1">Living Room: 8</span>
                        </a>
                        <a href="#" title="Square Feet"><i class="fas fa-bath "></i>
                          <span class="ms-2 mb-1">Bathroom: 3</span>
                        </a>
                        <a href="#" title="Square Feet"><i class="fas fa-utensils"></i>
                          <span class="ms-2 mb-1">kitchen: 3</span>
                        </a>
                        <a href="#" title="Square Feet"><i class="fas fa-building"></i>
                          <span class="ms-2 mb-1">Square:800</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <br>

            <div class="card property_list hover-shadow">
              <div class="body">
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="property_image">
                      <img src="/img/images.jpg" class="img-thumbnail img-fluid image-class" alt="img">
                      <span class="badge badge_Rent"> For Rent</span>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-6">
                    <div class="property-content">
                      <div class="detail">
                        <h5 class="text-success fs-5 mt-0 mb-0">$390,0000</h5>
                        <h3 class="mt-1">
                          <a href="#" class="text-black fs-5">Apartment</a>
                        </h3>
                        <h4 class="mt-0">
                          <a href="#" class="text-primary fs-5">England</a>
                        </h4>
                        <p class="text-muted mb-0">
                          In the Westminster Borough district of London, close to Madame Tussaud's, 6-bedroom house on Marble Arch has a garden, free WiFi and a washing machine.

                        </p>
                      </div>
                      <div class="property-icon mt-3 ms-1">
                        <a href="#" title="Square Feet"><i class="fas fa-bed "></i>
                          <span class="ms-2 mb-1">Bedroom: 5</span>
                        </a>
                        <a href="#" title="Square Feet"><i class="fa-solid fa-couch "></i>
                          <span class="ms-2 mb-1">Living Room: 8</span>
                        </a>
                        <a href="#" title="Square Feet"><i class="fas fa-bath "></i>
                          <span class="ms-2 mb-1">Bathroom: 3</span>
                        </a>
                        <a href="#" title="Square Feet"><i class="fas fa-utensils"></i>
                          <span class="ms-2 mb-1">kitchen: 3</span>
                        </a>
                        <a href="#" title="Square Feet"><i class="fas fa-building"></i>
                          <span class="ms-2 mb-1">Square:800</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <br>
            <br>

            <div class="card property_list hover-shadow">
              <div class="body">
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="property_image">
                      <img src="/img/images.jpg" class="img-thumbnail img-fluid image-class" alt="img">
                      <span class="badge badge_Rent"> For Rent</span>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-6">
                    <div class="property-content">
                      <div class="detail">
                        <h5 class="text-success fs-5 mt-0 mb-0">$390,0000</h5>
                        <h3 class="mt-1">
                          <a href="#" class="text-black fs-5">Villa</a>
                        </h3>
                        <h4 class="mt-0">
                          <a href="#" class="text-primary fs-5">England</a>
                        </h4>
                        <p class="text-muted mb-0">
                          In the Westminster Borough district of London, close to Madame Tussaud's, 6-bedroom house on Marble Arch has a garden, free WiFi and a washing machine.

                        </p>
                      </div>
                      <div class="property-icon mt-3 ms-1">
                        <a href="#" title="Square Feet"><i class="fas fa-bed "></i>
                          <span class="ms-2 mb-1">Bedroom: 5</span>
                        </a>
                        <a href="#" title="Square Feet"><i class="fa-solid fa-couch "></i>
                          <span class="ms-2 mb-1">Living Room: 8</span>
                        </a>
                        <a href="#" title="Square Feet"><i class="fas fa-bath "></i>
                          <span class="ms-2 mb-1">Bathroom: 3</span>
                        </a>
                        <a href="#" title="Square Feet"><i class="fas fa-utensils"></i>
                          <span class="ms-2 mb-1">kitchen: 3</span>
                        </a>
                        <a href="#" title="Square Feet"><i class="fas fa-building"></i>
                          <span class="ms-2 mb-1">Square:800</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <br>

            <div class="card property_list hover-shadow">
              <div class="body">
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="property_image">
                      <img src="/img/images.jpg" class="img-thumbnail img-fluid image-class" alt="img">
                      <span class="badge badge_Sale">For Sale</span>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-6">
                    <div class="property-content">
                      <div class="detail">
                        <h5 class="text-success fs-5 mt-0 mb-0">$390,0000</h5>
                        <h3 class="mt-1">
                          <a href="#" class="text-black fs-5">Apartment</a>
                        </h3>
                        <h4 class="mt-0">
                          <a href="#" class="text-primary fs-5">Japan</a>
                        </h4>
                        <p class="text-muted mb-0">
                          In the Westminster Borough district of London, close to Madame Tussaud's, 6-bedroom house on Marble Arch has a garden, free WiFi and a washing machine.

                        </p>
                      </div>
                      <div class="property-icon mt-3 ms-1">
                        <a href="#" title="Square Feet"><i class="fas fa-bed "></i>
                          <span class="ms-2 mb-1">Bedroom: 5</span>
                        </a>
                        <a href="#" title="Square Feet"><i class="fa-solid fa-couch "></i>
                          <span class="ms-2 mb-1">Living Room: 8</span>
                        </a>
                        <a href="#" title="Square Feet"><i class="fas fa-bath "></i>
                          <span class="ms-2 mb-1">Bathroom: 3</span>
                        </a>
                        <a href="#" title="Square Feet"><i class="fas fa-utensils"></i>
                          <span class="ms-2 mb-1">kitchen: 3</span>
                        </a>
                        <a href="#" title="Square Feet"><i class="fas fa-building"></i>
                          <span class="ms-2 mb-1">Square:800</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <br>
            <br>


          </div>




        </div>






      </div>
    </div>
  </div>


  <script src="./JS/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="mdb-bootstrap/js/mdb.min.js"></script>
  <script type="text/javascript"></script>
  <script src="/js/Bootstrap/Select/bootstrap-select.js"></script>
  <script>
    var element = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
      element.classList.toggle("toggled");
    };
  </script>
</body>

</html>