<?php
include("connection.php");
include("test.php");
include("proopertyCRUD.php");

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
  <link rel="stylesheet" href="css/PropertyAdd.css">
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
          <h2 class="fs-4 m-0">Add Property</h2>
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
        <div class="row clearfix mt-5">
          <form id="form" action="" enctype="multipart/form-data" method="post" class="needs-validation" novalidate>
            <div class="col-lg-12">
              <div class="card hover-shadow">
                <div class="header">
                  <h2 class="fs-3">
                    <strong class="text-primary fw-bolder">Basic</strong>
                    Information
                  </h2>
                </div>
                <input type="hidden" name="AdminId">
                <div class="body">
                  <div class="row clearfix">
                    <div class="col-sm-4">

                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Property Name" name="Pname" id="pname" required>
                        <div class="valid-feedback">
                          Looks Good!
                        </div>
                        <div class="invalid-feedback">
                          Property cannot be blank or have space
                        </div>
                      </div>

                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Property Location" name="Location" id="plocation" required>
                        <div class="valid-feedback">
                          Looks Good!
                        </div>
                        <div class="invalid-feedback">
                          Property Location cannot be blank
                        </div>

                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group form-floating">
                        <input type="date" class="form-control" name="yearbuilt" id="pdate" required>
                        <div class="valid-feedback">
                          Looks Good!
                        </div>
                        <div class="invalid-feedback">
                          Enter a valid Date
                        </div>
                        <label for="floatingSelect">Year Built</label>
                      </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                      <div class="form-outline">
                        <textarea class="form-control" id="ptextarea" name="Description" rows="2" maxlength="220" required></textarea>
                        <label for="ptextarea" class="form-label" id="Descriptioncharacter">220 characters remaining for description</label>
                        <div class="valid-feedback">
                          Looks Good!
                        </div>
                        <div class="invalid-feedback">
                          You neet to fill the text area
                        </div>


                      </div>

                    </div>
                    <div class="col-sm-4 mt-5">
                      <div class="form-group form-floating">
                        <select class="form-select form-control" name="PropertyType" id="pselectType" aria-label="Floating label select example" required>
                          <option value="">Select an option</option>
                          <option value="Villa">Villa</option>
                          <option value="Apartment">Apartment</option>
                        </select>
                        <div class="valid-feedback">
                          Looks Good!
                        </div>
                        <div class="invalid-feedback">
                          Select an option
                        </div>
                        <label for="pselectType">Property Type</label>
                      </div>
                    </div>

                    <div class="col-sm-4 mt-5">
                      <div class="form-group form-floating">
                        <input type="file" class="form-control" name="file" id="pimage" required>
                        <div class="valid-feedback">
                          Looks Good!
                        </div>
                        <div class="invalid-feedback">
                          file must be an image type
                        </div>
                        <label for="Property Image">Property Image</label>
                      </div>
                    </div>


                  </div>
                </div>
              </div>

              <div class="card mt-4 hover-shadow">
                <div class="header">
                  <h2 class="fs-3">
                    <strong class="text-primary fw-bolder">Property</strong>
                    For
                  </h2>
                </div>
                <div class="body">
                  <div class="row clearfix">
                    <div class="col-sm-6">
                      <div class="form-group form-floating">
                        <select class="form-select form-control" name="PropertyFor" id="formGroupExampleInput" aria-label="Floating label select2 example" required>
                          <option value="">Select an option</option>
                          <option value="ForRent">For Rent</option>
                          <option value="ForSale">For Sale</option>
                        </select>
                        <div class="valid-feedback">
                          Looks Good!
                        </div>
                        <div class="invalid-feedback">
                          Select an option
                        </div>
                        <label for="formGroupExampleInput">Property For</label>
                      </div>
                    </div>


                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="number" class="form-control" placeholder="Sqaure Ft" id="sqaureft" name="Areas" required>
                        <div class="valid-feedback">
                          Looks Good!
                        </div>
                        <div class="invalid-feedback">
                          Area cannot be lesser than 1000 or field cannot be empty
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix mt-4">
                    <div class="col-sm-6">
                      <div class="form-group form-floating">
                        <?php
                        require 'connection.php';
                        $result = mysqli_query($con, "SELECT * FROM admin WHERE username='" . $_SESSION['login_admin'] . "'");
                        while ($row = mysqli_fetch_array($result)) {
                          echo "<select class='form-select form-control' name='paddress' id='paddress' aria-label='Floating label select2 example' required>";
                        ?>
                          "<option value="">Select an option</option>
                        <?php
                          echo "<option value=" . $row['AID'] . ">" . $row['address'] . "</option>";
                          echo  "</select>";
                        }
                        ?>
                        <div class="valid-feedback">
                          Looks Good!
                        </div>
                        <div class="invalid-feedback">
                          Select an option
                        </div>
                        <label for="formGroupExampleInput">Property address</label>
                      </div>
                    </div>



                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="number" class="form-control" placeholder="Price" id="price" name="Price" required>
                        <div class="valid-feedback">
                          Looks Good!
                        </div>
                        <div class="invalid-feedback">
                          Price cannot be empty
                        </div>
                      </div>

                    </div>
                  </div>
                </div>





              </div>
            </div>


            <div class="card mt-4 hover-shadow">
              <div class="header">
                <h2 class="fs-3">
                  <strong class="text-primary fw-bolder">Dimension</strong>

                </h2>
              </div>
              <div class="body">
                <div class="row clearfix">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="Number of bedroom" name="Bedrooms" id="pbedroom" required>
                      <div class="valid-feedback">
                        Looks Good!
                      </div>
                      <div class="invalid-feedback">
                        Bedroom cannot be lesser than 3 or field cannot be empty
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="Number of Kitchen" name="Kitchens" id="pkitchen" required>
                      <div class="valid-feedback">
                        Looks Good!
                      </div>
                      <div class="invalid-feedback">
                        Kitchen cannot be lesser than 2 or field cannot be empty
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="Number of Living Room" name="LivingRooms" id="plivingromm" required>
                      <div class="valid-feedback">
                        Looks Good!
                      </div>
                      <div class="invalid-feedback">
                        Living Room cannot be lesser than 3 or field cannot be empty
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="Number of Bathroom" name="Bathrooms" id="pbathroom" required>
                      <div class="valid-feedback">
                        Looks Good!
                      </div>
                      <div class="invalid-feedback">
                        Bathroom cannot be lesser than 3 or field cannot be empty
                      </div>
                    </div>
                  </div>

                </div>


              </div>
            </div>




            <div class="card mt-4 mb-3 hover-shadow">
              <div class="header">
                <h2 class="fs-3">
                  <strong class="text-primary fw-bolder">Property</strong>
                  Details
                </h2>
              </div>
              <div class="body">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-check  form-check-inline">
                      <input class="form-check-input" type="checkbox" name="hasPool" id="checkboxAll" value="Pool">
                      <label class="form-check-label" for="">Pool</label><br>
                      <input class="form-check-input" type="checkbox" name="hasGarden" id="checkboxAll" value="Garden">
                      <label class="form-check-label" for="">Garden</label><br>
                      <input class="form-check-input" type="checkbox" name="hasCarParking" id="checkboxAll" value="CarParking">
                      <label class="form-check-label" for="">Car Parking</label><br>
                      <input class="form-check-input" type="checkbox" name="hasBalcony" id="checkboxAll" value="Balcony">
                      <label class="form-check-label" for="">Balcony</label><br>
                      <input class="form-check-input" type="checkbox" name="hasTerrace" id="checkboxAll" value="Terrace">
                      <label class="form-check-label" for="">Terrace</label><br>
                      <div class="valid-feedback">Look good</div>
                      <div class="invalid-feedback">Choose at least one</div>
                    </div>



                  </div>


                  <div class="col-sm-12">
                    <div class="d-grid gap-2 d-md-flex justify-content-sm-end">
                      <button class="btn btn-primary me-md-2 btn-Submit" name="submit" type="submit">Submit</button>
                      <button class="btn btn-primary me-md-2 btn-Cancle" type="reset">Cancle</button>
                    </div>

                  </div>



                </div>


              </div>
            </div>





          </form>
        </div>





      </div>

    </div>
  </div>

  <script src="./JS//PropertyAdd.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
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