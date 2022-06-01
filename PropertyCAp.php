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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="css/PropertyCAp.css">
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
          <h2 class="fs-4 m-0">Appartment</h2>
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
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid px-5">
        <div class="row clearfix g-5 pt-5 pe-5">
          <?php
          require 'connection.php';
          $query = "SELECT * FROM `admin`,`property` WHERE
           username='" . $_SESSION['login_admin'] . "' 
           AND admin.AID=property.AdminId AND PropertyType='Apartment'";
          $result = mysqli_query($con, $query);
          while ($row = mysqli_fetch_array($result)) {
          ?>

            <div class="col-md-6 col-sm-12 col-lg-4  d-flex align-items-stretch">
              <div class="card property_list hover-shadow">
                <div class="property_Image">
                  <img src="<?php print 'img/' . $row['Pimage'] ?>" class="img-thumbnail img-fluid" alt="England">
                  <span class="badge badge_Sale"><?php print $row['PropertyFor'] ?></span>
                </div>
                <div class="body">
                  <div class="property-content">
                    <div class="detail">
                      <h5 class="text-success ms-3 price mt-3 mb-0">$<?php print $row['Price'] ?></h5>
                      <h4 class="mt-2 mb-0">
                        <a href="#" class="Location ms-3 text-primary"><?php print $row['Location'] ?></a>
                      </h4>
                      <p class="contentText ms-3  mt-3 mb-0">
                        <?php print $row['Description'] ?> </p>
                    </div>
                    <div class="property-icon mt-3 ms-1">
                      <a href="#" title="Square Feet"><i class="fas fa-bed "></i>
                        <span class="ms-2 mb-1">Bedroom: <?php print $row['Bedrooms'] ?></span>
                      </a>
                      <a href="#" title="Square Feet"><i class="fa-solid fa-couch "></i>
                        <span class="ms-2 mb-1">Living Room: <?php print $row['LivingRooms'] ?></span>
                      </a>
                      <a href="#" title="Square Feet"><i class="fas fa-bath "></i>
                        <span class="ms-2 mb-1">Bathroom: <?php print $row['Bathrooms'] ?></span>
                      </a>
                      <a href="#" title="Square Feet"><i class="fas fa-utensils"></i>
                        <span class="ms-2 mb-1">kitchen: <?php print $row['Kitchens'] ?></span>
                      </a>
                      <a href="#" title="Square Feet"><i class="fas fa-building"></i>
                        <span class="ms-2 mb-1">Square:<?php print $row['Areas'] ?></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php

          }

          ?>

          <!-- <div class="col-md-6 col-sm-12 col-lg-4  d-flex align-items-stretch">
            <div class="card property_list hover-shadow">
              <div class="property_Image">
                <img src="img/appartment/appart4.jpg" class="img-thumbnail card-img" alt="England">
                <span class="badge badge_Sale"> For Sale</span>
              </div>
              <div class="body">
                <div class="property-content">
                  <div class="detail">
                    <h5 class="text-success ms-3 price mt-3 mb-0">$390,000</h5>
                    <h4 class="mt-2 mb-0">
                      <a href="#" class="Location ms-3 text-primary">England,London,Knightsbridge</a>
                    </h4>
                    <p class="contentText ms-3  mt-3 mb-0">
                      Sursock house for Rent 70787801. 5BD apartment furnished kitchen Huge Living Rooms. Premium Location in achrafieh Sursock. Amenities: 24/7 Electricity & Gen, 24/7 Security, 24/7 Onsite help. </p>
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


          <div class="col-md-6 col-sm-12 col-lg-4  d-flex align-items-stretch">
            <div class="card property_list hover-shadow">
              <div class="property_Image">
                <img src="img/appartment/appart3.jpg" class="img-thumbnail img-fluid" alt="England">
                <span class="badge badge_Rent"> For Rent</span>
              </div>
              <div class="body">
                <div class="property-content">
                  <div class="detail">
                    <h5 class="text-success ms-3 price mt-3 mb-0">$490,000</h5>
                    <h4 class="mt-2 mb-0">
                      <a href="#" class="Location ms-3 text-primary">England,London,Knightsbridge</a>
                    </h4>
                    <p class="contentText ms-3  mt-3  mb-0">
                      Sursock house for Rent 70787801. 5BD apartment furnished kitchen Huge Living Rooms. Premium Location in achrafieh Sursock. Amenities: 24/7 Electricity & Gen, 24/7 Security, 24/7 Onsite help. </p>
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

          <div class="col-md-6 col-sm-12 col-lg-4  d-flex align-items-stretch">
            <div class="card property_list hover-shadow">
              <div class="property_Image">
                <img src="img/appartment/appart4.jpg" class="img-thumbnail img-fluid" alt="England">
                <span class="badge badge_Rent"> For Rent</span>
              </div>
              <div class="body">
                <div class="property-content">
                  <div class="detail">
                    <h5 class="text-success ms-3 price mt-3 mb-0">$390,000</h5>
                    <h4 class="mt-2 mb-0">
                      <a href="#" class="Location ms-3 text-primary">England,London,Knightsbridge</a>
                    </h4>
                    <p class="contentText ms-3  mt-3 mb-0">
                      Sursock house for Rent 70787801. 5BD apartment furnished kitchen Huge Living Rooms. Premium Location in achrafieh Sursock. Amenities: 24/7 Electricity & Gen, 24/7 Security, 24/7 Onsite help. </p>
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
          </div> -->

          <!-- <div class="col-md-6 col-sm-12 col-lg-4  d-flex align-items-stretch">
            <div class="card property_list hover-shadow">
              <div class="property_Image">
                <img src="img/appartment/appart5.jpg" class="img-thumbnail img-fluid" alt="England">
                <span class="badge badge_Sale"> For Sale</span>
              </div>
              <div class="body">
                <div class="property-content">
                  <div class="detail">
                    <h5 class="text-success ms-3 price mt-3 mb-0">$390,000</h5>
                    <h4 class="mt-2 mb-0">
                      <a href="#" class="Location ms-3 text-primary">England,London,Knightsbridge</a>
                    </h4>
                    <p class="contentText ms-3  mt-3 mb-0">
                      Sursock house for Rent 70787801. 5BD apartment furnished kitchen Huge Living Rooms. Premium Location in achrafieh Sursock. Amenities: 24/7 Electricity & Gen, 24/7 Security, 24/7 Onsite help. </p>
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
          </div> -->

          <!-- <div class="col-md-6 col-sm-12 col-lg-4  d-flex align-items-stretch">
            <div class="card property_list hover-shadow">
              <div class="property_Image">
                <img src="img/appartment/appart6.jpg" class="img-thumbnail img-fluid" alt="England">
                <span class="badge badge_Sale"> For Sale</span>
              </div>
              <div class="body">
                <div class="property-content">
                  <div class="detail">
                    <h5 class="text-success ms-3 price mt-3 mb-0">$390,000</h5>
                    <h4 class="mt-2 mb-0">
                      <a href="#" class="Location ms-3 text-primary">England,London,Knightsbridge</a>
                    </h4>
                    <p class="contentText ms-3  mt-3  mb-0">
                      Sursock house for Rent 70787801. 5BD apartment furnished kitchen Huge Living Rooms. Premium Location in achrafieh Sursock. Amenities: 24/7 Electricity & Gen, 24/7 Security, 24/7 Onsite help. </p>
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
          </div> -->




        </div>


      </div>

    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script type="text/javascript" src="mdb-bootstrap/js/mdb.min.js"></script>
  <script type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
    var element = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
      element.classList.toggle("toggled");
    };
  </script>
</body>

</html>