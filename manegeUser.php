<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Manege Users | NEW TECH</title>

        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="style.css"/>

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
                        <img class="offset-1 offset-lg-4 mt-6 text-bg-warning rounded-4" style="width: 80px;height: 80px;" src="img/yousergroup.png">
                        <h2 class="text-center overflow-hidden">Users</h2>

                        <a href="adminpanel.php"><div class="DB col-lg-12 col-6  text-center text-warning fs-4 overflow-hidden mt-6 ">
                            DASH BORD
                        </div></a>

                        <div class="DB col-lg-12 col-6  text-center text-warning fs-4 overflow-hidden mt-6 bg-primary">
                            Manege Users
                        </div>

                        <a href="manegeProduct.php"><div class="DB col-lg-12 col-6  text-center text-warning fs-4 overflow-hidden mt-6">
                            Manege Product
                        </div></a>

                        <div class="DB col-lg-12 col-6  text-center text-warning fs-4 overflow-hidden mt-6">
                            Messages
                        </div>

                        

                        <div class="DB col-lg-12 col-6  text-center text-warning fs-4 overflow-hidden mt-6">
                        Attendence
                        </div>
                        </div>
                    </div>

                    

                    <div class="col-9 col-lg-9 bg-body border border-3 border-success ">
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="Home.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">  MANEGE USERS  </li>
                                </ol>
                            </nav>
                        <div class="text-center text-success fw-bolder text-decoration-underline">
                            <h2>MANEGE USERS</h2>
                        </div>

                        <nav class="navbar bg-light">
                            <div class="container-fluid">
                                <div class="text-success"><i class="bi bi-people-fill fs-2"></i></div>
                                <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search Users..." aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </nav>

                        <div class="chat_box col-12 col-lg-12 row">
                        
                            <div class=" card ml-3 mt-2 border border-danger " style="width: 10rem; height: 5rem;">                              
                                <div class="card-body">
                                <h6 class="text-warning ">New Users</h6>
                                    <p class="card-text"><i class="bi bi-people-fill fs-4"> 7200</i> </p>
                                </div>
                            </div>

                            <div class="card ml-4 mt-2 border border-danger" style="width: 10rem; height: 5rem;">
                                
                                <div class="card-body">
                                <h6 class="text-warning ">Total Orders</h6>
                                    <p class="card-text"><i class="bi bi-box2-heart-fill fs-4">11,300</i></p>
                                </div>
                            </div>

                                <div class="card ml-4 mt-2 border border-danger" style="width: 10rem; height: 5rem;">
                                
                                    <div class="card-body">
                                    <h6 class="text-warning ">Total Selling</h6>
                                        <p class="card-text"><i class="bi bi-send-check-fill fs-4">21,520</i></p>
                                    </div>
                                </div>

                            <div class=" card ml-4 mt-2 border border-danger" style="width: 10rem; height: 5rem;">
                                <div class="card-body">
                                    <h6 class="text-warning ">Total Earn</h6>
                                    <p class="card-text"><i class="bi bi-coin fs-4">110300</i></p>
                                </div>
                            </div>

                            <div class=" d-lg-bloc border border-2 rounded-3 bg-white mt-3 row ">
                                <div class="col-12 col-lg-12 row bg-secondary">                                  
                                    <div class="col-3 text-center fs-4 text-dark "> Name</div>
                                    <div class="col-3 text-center fs-4 text-dark "> Title</div>
                                    <div class="col-3 text-center fs-4 text-dark "> Status</div>
                                    <div class="col-3 fs-4 text-dark "> Ratings</div>                                 
                                
                                </div>
                                
                                    <div class="row bg-white col-12">
                                        <div class="col-1 text-center fs-4 text-black "><img src="img/admin_icon.svg"></div>
                                        <div class="col-3  fs-4 text-black "> A.saman</div>
                                        <div class="col-3  fs-4 text-black ">seller</div>
                                        <div class="col-2  fs-4 text-black "><button class="btn btn-danger">Active</button></div>
                                        <div class="col-3  fs-4 text-black "> 100 ratings</div>
                                        

                                        <hr>

                                        <div class="col-1 text-center fs-4 text-black "><img src="img/admin_icon.svg"></div>
                                        <div class="col-3  fs-4 text-black "> p.K amal</div>
                                        <div class="col-3  fs-4 text-black ">seller</div>
                                        <div class="col-2  fs-4 text-black "><button class="btn btn-danger">Active</button></div>
                                        <div class="col-3  fs-4 text-black "> 80 ratings</div>

                                        <hr>

                                        <div class="col-1 text-center fs-4 text-black "><img src="img/admin_icon.svg"></div>
                                        <div class="col-3  fs-4 text-black "> sanjiva</div>
                                        <div class="col-3  fs-4 text-black ">seller</div>
                                        <div class="col-2  fs-4 text-black "><button class="btn btn-danger">Active</button></div>
                                        <div class="col-3  fs-4 text-black "> 150 ratings</div>
                                        <hr>

                                        <div class="col-1 text-center fs-4 text-black "><img src="img/admin_icon.svg"></div>
                                        <div class="col-3  fs-4 text-black "> vimal</div>
                                        <div class="col-3  fs-4 text-black ">seller</div>
                                        <div class="col-2  fs-4 text-black "><button class="btn btn-danger">Active</button></div>
                                        <div class="col-3  fs-4 text-black "> 110 ratings</div>

                                        

                                        <hr>
                                        
                                    </div>
                                
                            </div>
                            
                        </div>


                       
                    </div>

                    

                    <?php include "footer.php"; ?>     
            </div>
        </div>   
    </body>
</html> 



