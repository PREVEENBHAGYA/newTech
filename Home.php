<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Home | NEW TECH</title>

        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bulma.css" />

        <link rel="icon" href="img/icon1.jpg">

    </head>

    <body class="body2">
    <div class="container-fluid">
        <div class="bg-white">
            <?php include "header.php"?>
        </div>
            <hr class="bg-black fw-fw-bolder"/>
            
            <div class="col-12 bg-white ">
                
                    <nav class="navbar navbar-expand-lg bg-light">
                        <div class="container-fluid">
                            <span class="navbar-brand mt-1" >Serching Bar</span>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <a class="btn btn-outline-success rounded-4" href="advancedSearch.php" role="button">Advanced Search</a>                       
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search ..." aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            </div>
                        </div>
                    </nav>   

            <hr class="bg-black fw-fw-bolder"/>

            <div class="col-12  carrosal align-items-center d-none d-lg-block mb-2 mt-3 bg-dark">
                <div class="row">
                    
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="Cimg" src="img/divice/3047773_PFCNP90.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img class="Cimg" src="img/divice/4386414_20424.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img class="Cimg" src="img/divice/3454186_PISXGE0.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img class="Cimg" src="img/divice/headdphone.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img class="Cimg" src="img/divice/laptop-with-joystick.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                </div>
            </div>

            <section class="products bg-white">
                
                <h1 class="title h1 offset-1"> our <span class="h2"> products</span> 
                <a href="#" class="text-decoration-none fs-6 offset-8 see">See All &nbsp; &rarr;</a>
                </h1>
                

                <div class="col-12  bg-dark">
                    <div class="row  border-danger">
                        <div class="col-12">
                            <div class="row justify-content-center gap-3">
                                <div class="card " style="width: 18rem ;">
                                    <img src="img/product/iphone-13-pro.png" class="card-img-top">
                                    <div class="card-body ms-0 m-0 text-center">
                                        <h5 class="card-title bg">iphone 13 pro</h5>
                                        <span class="card-text text-primary fw-bold">Rs.156,000.00</span> <br />
                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                        <br>                                       
                                        <a class="btn btn-outline-primary rounded-4" href="singleProductView.php" role="button">More details</a>                                       
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="img/product/head.jpg" class="card-img-top">
                                    <div class="card-body ms-0 m-0 text-center">
                                        <h5 class="card-title bg">Gaming Head set</h5>
                                        <span class="card-text text-primary fw-bold">Rs.6,000.00</span> <br />
                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                        <br>                                  
                                        <a class="btn btn-outline-primary rounded-4" href="singleProductView.php" role="button">More details</a>                                       
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="img/product/lap.jpg" class="IMG card-img-top">
                                    <div class="card-body ms-0 m-0 text-center">
                                        <h5 class="card-title bg">DEL laptop</h5>
                                        <span class="card-text text-primary fw-bold">Rs.136,000.00</span> <br />
                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                        <br/>                                       
                                        <a class="btn btn-outline-primary rounded-4" href="singleProductView.php" role="button">More details</a>                                       
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="img/product/61nPj7Rb-4L.jpg" class="card-img-top IMG">
                                    <div class="card-body ms-0 m-0 text-center">
                                        <h5 class="card-title bg">Gaming Console</h5>
                                        <span class="card-text text-primary fw-bold">Rs.11,000.00</span> <br />
                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                        <br/>                                       
                                        <a class="btn btn-outline-primary rounded-4" href="singleProductView.php" role="button">More details</a>                                       
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="img/product/tv.jpg" class="IMG card-img-top">
                                    <div class="card-body ms-0 m-0 text-center">
                                        <h5 class="card-title bg">Innovex T.V</h5>
                                        <span class="card-text text-primary fw-bold">Rs.79,000.00</span> <br />
                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                        <br/>                                      
                                        <a class="btn btn-outline-primary rounded-4" href="singleProductView.php" role="button">More details</a>                                       
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="img/product/apple_wotch.jpg" class="card-img-top">
                                    <div class="card-body ms-0 m-0 text-center">
                                        <h5 class="card-title bg"> Apple WOTCH</h5>
                                        <span class="card-text text-primary fw-bold">Rs.240,000.00</span> <br />
                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                        <br/>                                       
                                        <a class="btn btn-outline-primary rounded-4" href="singleProductView.php" role="button">More details</a>                                       
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="img/product/drone.jpg" class="card-img-top">
                                    <div class="card-body ms-0 m-0 text-center">
                                        <h5 class="card-title bg">Drone</h5>
                                        <span class="card-text text-primary fw-bold">Rs.116,000.00</span> <br />
                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                        <br/>                                       
                                        <a class="btn btn-outline-primary rounded-4" href="singleProductView.php" role="button">More details</a>                                       
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="img/product/virtual.jpg" class="IMG card-img-top">
                                    <div class="card-body ms-0 m-0 text-center">
                                        <h5 class="card-title bg"> Virtual Riyality BOX</h5>
                                        <span class="card-text text-primary fw-bold">Rs.1,500.00</span> <br />
                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                        <br/>                                       
                                        <a class="btn btn-outline-primary rounded-4" href="singleProductView.php" role="button">More details</a>                                       
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    
                </div>
                <div class="box-container">

                </div>

            </section>

            <?php include "footer.php"; ?>
        </div>
    </div>
           



        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>
    </body>

</html>