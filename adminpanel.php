<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>AdminPanel | NEW TECH</title>

        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

        <link rel="icon" href="img/icon1.jpg">

    </head>

    <body class="body2">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 bg-body ">
                    <?php include "header.php"; ?>
                </div><hr>
                
                    <div class="col-3  bg-dark border border-2 border-danger">
                      <div class="col-12  fs-4 text-success mt-2 mb-2">
                        <img class="offset-1 offset-lg-4 mt-6" style="width: 80px;height: 80px;" src="img/avatar.svg">
                        <h2 class="text-center overflow-hidden">Admins</h2>

                        <div class="DB col-lg-12 col-6  text-center text-warning fs-4 overflow-hidden mt-6 bg-primary">
                          DASH BORD
                        </div>

                        <a href="manegeUser.php"><div class="DB col-lg-12 col-6  text-center text-warning fs-4 overflow-hidden mt-6">
                          Manege Users
                        </div></a>

                        <a href="manegeProduct.php"><div class="DB col-lg-12 col-6  text-center text-warning fs-4 overflow-hidden mt-6">
                            Manege Product
                        </div></a>

                        <a href="#"><div class="DB col-lg-12 col-6  text-center text-warning fs-4 overflow-hidden mt-6">
                          Messages
                        </div></a>

                        <a href="#"><div class="DB col-lg-12 col-6  text-center text-warning fs-4 overflow-hidden mt-6">
                          Attendence
                        </div></a>
                      </div>
                    </div>

                    <div class="col-9 col-lg-9 bg-body border border-2 border-dark ">
                    <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="Home.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">  Admin Panel  </li>
                                </ol>
                            </nav>
                    <div class="text-center text-primary fw-bolder text-decoration-underline">
                      <h2>Admin Panel</h2>
                    </div>

                    <div class="row ">
                    <div class="card text-center mt-2 mb-2 ml-2" style="width: 18rem;">
                        <div class="card-body">
                          <img src="img/6415371_account_avatar_profile_user_icon.png" style="width: 80px;height: 80px;">
                          <h4 class="card-title text-secondary">Amal</h4>
                          <h6 class="card-text">PROGAMMER</h6>
                          <h5 class="card-text">Earning rate 15%</h5>
                          <a href="#" class="btn btn-outline-warning btn-sm" style="width: 80%;">Profile</a>
                        </div>
                      </div>

                      <div class="card text-center mt-2 mb-2 ml-2" style="width: 18rem;">
                        <div class="card-body">
                        <img src="img/6415371_account_avatar_profile_user_icon.png" style="width: 80px;height: 80px;">
                          <h4 class="card-title text-secondary">kamal </h4>
                          <h6 class="card-text">DESIGNER</h6>
                          <h5 class="card-text">Earning rate 12%</h5>
                          <a href="#" class="btn btn-outline-warning btn-sm" style="width: 80%;">Profile</a>
                        </div>
                      </div>

                      <div class="card text-center mt-2 mb-2 ml-2" style="width: 18rem;">
                        <div class="card-body">
                        <img src="img/6415371_account_avatar_profile_user_icon.png" style="width: 80px;height: 80px;">
                          <h4 class="card-title text-secondary">sajith</h4>
                          <h6 class="card-text">TESTER</h6>
                          <h5 class="card-text">Earning rate 12%</h5>
                          <a href="#" class="btn btn-outline-warning btn-sm" style="width: 80%;">Profile</a>
                        </div>
                      </div>

                      <div class="card text-center mt-2 mb-2 ml-2" style="width: 18rem;">
                        <div class="card-body">
                        <img src="img/6415371_account_avatar_profile_user_icon.png" style="width: 80px;height: 80px;">
                          <h4 class="card-title text-secondary">sunil</h4>
                          <h6 class="card-text">ANELISER</h6>
                          <h5 class="card-text">Earning rate 15%</h5>
                          <a href="#" class="btn btn-outline-warning btn-sm" style="width: 80%;">Profile</a>
                        </div>
                      </div>
                    </div>

                    <hr class="bg-dark ">

                    <div class="border border-2 rounded-3 bg-success row">
                    <thead class="col-12 col-lg-12 row ">
                        <div class="col-1 text-center fs-4 text-white overflow-hidden"> ID</div>
                        <div class="col-2 text-center fs-4 text-white overflow-hidden"> Name</div>
                        <div class="col-2 text-center fs-4 text-white overflow-hidden"> Depart</div>
                        <div class="col-2 text-center fs-4 text-white overflow-hidden"> Date</div>
                        <div class="col-2  fs-4 text-white overflow-hidden"> JoinTime</div>
                        <div class="col-3  fs-4 text-white overflow-hidden"> LogoutTime</div>
                    </thead>
                    </div>

                    <tbody>
                        <div class="row bg-white">
                            <div class="col-1 text-center fs-4 text-black overflow-hidden"> 01</div>
                            <div class="col-2 text-center fs-4 text-black overflow-hidden"> Amal</div>
                            <div class="col-2 text-center fs-4 text-black overflow-hidden"> coder</div>
                            <div class="col-2 text-center fs-4 text-black overflow-hidden"> 22/12/31</div>
                            <div class="col-2  fs-4 text-black overflow-hidden"> 7:00 AM</div>
                            <div class="col-3  fs-4 text-black overflow-hidden"> 3:00 PM</div>

                            <hr>

                            <div class="col-1 text-center fs-4 text-black overflow-hidden"> 02</div>
                            <div class="col-2 text-center fs-4 text-black overflow-hidden"> kamal</div>
                            <div class="col-2 text-center fs-4 text-black overflow-hidden"> Design</div>
                            <div class="col-2 text-center fs-4 text-black overflow-hidden"> 22/12/31</div>
                            <div class="col-2  fs-4 text-black overflow-hidden"> 7:00 AM</div>
                            <div class="col-3  fs-4 text-black overflow-hidden"> 3:00 PM</div>

                            <hr>

                            <div class="col-1 text-center fs-4 text-black overflow-hidden"> 03</div>
                            <div class="col-2 text-center fs-4 text-black overflow-hidden"> Sajith</div>
                            <div class="col-2 text-center fs-4 text-black overflow-hidden"> tester</div>
                            <div class="col-2 text-center fs-4 text-black overflow-hidden"> 22/12/31</div>
                            <div class="col-2  fs-4 text-black overflow-hidden"> 7:30 AM</div>
                            <div class="col-3  fs-4 text-black overflow-hidden"> 3:00 PM</div>

                            <hr>

                            <div class="col-1 text-center fs-4 text-black overflow-hidden"> 04</div>
                            <div class="col-2 text-center fs-4 text-black overflow-hidden"> Sunil</div>
                            <div class="col-2 text-center fs-4 text-black overflow-hidden"> analising</div>
                            <div class="col-2 text-center fs-4 text-black overflow-hidden"> 22/12/31</div>
                            <div class="col-2  fs-4 text-black overflow-hidden"> 7:30 AM</div>
                            <div class="col-3  fs-4 text-black overflow-hidden"> 3:00 PM</div>

                            <hr>
                        </div>
                    </tbody>
                    </div>
            
                    </div>
                </div>

      

                    <?php include "footer.php"; ?>     
            </div>
        </div>   
    </body>
</html> 

