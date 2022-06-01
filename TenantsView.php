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
  <link rel="stylesheet" href="css/TenantsView.css">
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
          <h2 class="fs-4 m-0">Tenant View</h2>
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



      <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header clearfix">
              <img class="modal-title" id="modal-title" src="/img/tenants/tenant1.jpg"></img>
              <div class="fw-bold titlename ms-3">John</div>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row g-3">
                <div class="mb-3 col-md-6 input-P">
                  <label for="formGroupExampleInput" class="form-label">Arrive</label>
                  <input type="date" class="form-control rounded-pill  hover-shadow" id="formGroupExampleInput">

                </div>


                <div class="mb-3 col-md-6 input-L">
                  <label for="formGroupExampleInput" class="form-label">Depart</label>
                  <input type="date" class="form-control rounded-pill hover-shadow" id="formGroupExampleInput">

                </div>

              </div>




              <div class="row g-3">
                <div class="mb-3 col-md-6 input-P">
                  <label for="formGroupExampleInput" class="form-label">Payment</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="formGroupExampleInput" id="formGroupExampleInput1">
                    <label class="form-check-label" for="formGroupExampleInput1">
                      Paid
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="formGroupExampleInput" id="formGroupExampleInput2" checked>
                    <label class="form-check-label" for="formGroupExampleInput2">
                      Not Paid
                    </label>
                  </div>

                </div>



              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>










      <div class="container-fluid px-4">
        <section>
          <div class="table-responsive mt-5 col-lg-12">
            <table class="table table-borderless table-sm table-hover table-striped caption-top" id="Table">
              <caption class="text-black fw-bolder"><label class="List">List of Tenants</label>
                <label class="Search">Search:<input type="search" id="SearchInput" class="form-control form-control-sm input-search" placeholder="Search For Tenants names" onkeyup="myFunction()"></label>
              </caption>
              <thead class="table-primary">
                <tr>

                  <th scope="col" class="center">Name</th>
                  <th scope="col" class="centerName" onclick="sortName(1)">PropertyID<i class="fas fa-sort d-inline"></i></th>

                  <th scope="col" class="centerName">Arrive</i></th>
                  <th scope="col" class="centerName">Depart</th>
                  <th scope="col" class="centerName" onclick="sortName(4)">Location<i class="fas fa-sort d-inline"></i></th>
                  <th scope="col" class="center">Mobile</th>
                  <th scope="col" class="centerName" onclick="sortName(6)">Payment <i class="fas fa-sort"></i></th>
                  <th scope="col" class="center">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row" class="center">
                    <div class="d-flex align-items-center">
                      <img src="img/tenants/tenant1.jpg" class="rounded-circle imgProfile" alt>
                      <div class="ms-2">
                        <p class="fw-bold mb-1">John</p>
                        <p class="text-muted mb-0">john@gmail.com</p>
                      </div>
                    </div>
                  </td>

                  <td class="center">1</td>
                  <td class="center">2/23/2021</td>
                  <td class="center">9/23/2021</td>
                  <td class="center">England</td>
                  <td class="center">4545252</td>
                  <td class="center"><a href="" class="btn btn_status btn-light btn-xs" role="button"><label class="text-success" for="">Paid</label></a></td>
                  <td class="center"><a href="" class="btn btn-tbl-edit btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-tbl-delete btn-xs" role="button" onclick="deleteR(this)"><i class="fa fa-trash"></i>
                  </td>
                </tr>

                <tr>
                  <td scope="row" class="center">
                    <div class="d-flex align-items-center">
                      <img src="img/tenants/tenant2.jpg" class="rounded-circle imgProfile" alt>
                      <div class="ms-2">
                        <p class="fw-bold mb-1">Mike</p>
                        <p class="text-muted mb-0">Mike@gmail.com</p>
                      </div>
                    </div>
                  </td>

                  <td class="center">2</td>
                  <td class="center">7/23/2021</td>
                  <td class="center">12/23/2021</td>
                  <td class="center">USA</td>
                  <td class="center">41341341</td>
                  <td class="center"><a href="" class="btn btn_status btn-light btn-xs" role="button"><label class="text-danger" for="">Unpaid</label></a></td>
                  <td class="center"><a href="" class="btn btn-tbl-edit btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-tbl-delete btn-xs" role="button" onclick="deleteR(this)"><i class="fa fa-trash"></i>
                  </td>
                </tr>

                <tr>
                  <td scope="row" class="center">
                    <div class="d-flex align-items-center">
                      <img src="img/tenants/tenant3.jpg" class="rounded-circle imgProfile" alt>
                      <div class="ms-2">
                        <p class="fw-bold mb-1">Marie</p>
                        <p class="text-muted mb-0">Marie@gmail.com</p>
                      </div>
                    </div>
                  </td>

                  <td class="center">3</td>
                  <td class="center">2/23/2021</td>
                  <td class="center">6/25/2021</td>
                  <td class="center">Lebanon</td>
                  <td class="center">09897743</td>
                  <td class="center"><a href="" class="btn btn_status btn-light btn-xs" role="button"><label class="text-danger" for="">Unpaid</label></a></td>
                  <td class="center"><a href="" class="btn btn-tbl-edit btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-tbl-delete btn-xs" role="button" onclick="deleteR(this)"><i class="fa fa-trash"></i>
                  </td>
                </tr>

                <tr>
                  <td scope="row" class="center">
                    <div class="d-flex align-items-center">
                      <img src="img/tenants/tenant4.jpg" class="rounded-circle imgProfile" alt>
                      <div class="ms-2">
                        <p class="fw-bold mb-1">Alex</p>
                        <p class="text-muted mb-0">Alex@gmail.com</p>
                      </div>
                    </div>
                  </td>

                  <td class="center">4</td>
                  <td class="center">2/23/2021</td>
                  <td class="center">6/22/2021</td>
                  <td class="center">England</td>
                  <td class="center">0887422</td>
                  <td class="center"><a href="" class="btn btn_status btn-light btn-xs" role="button"><label class="text-success" for="">Paid</label></a></td>
                  <td class="center"><a href="" class="btn btn-tbl-edit btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-tbl-delete btn-xs" role="button" onclick="deleteR(this)"><i class="fa fa-trash"></i>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </section>


      </div>

    </div>
  </div>

  <script src="./JS/TenantView.js"></script>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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