<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>single product view | NEW TECH</title>

        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bulma.css" />

        <link rel="icon" href="img/icon1.jpg">

    </head>

    <body class="body2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 bg-body ">
                    <?php include "header.php"; ?>
                </div><hr class="bg-danger">
             <div class="row bg-white">
                <div class="col-12 col-lg-6 pt-2 mb-2 bg-white">
                    <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="Home.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Single Product view</li>
                        </ol>
                    </nav>
                    </div>
                    <div class="row">
                        <img src="img/product/61nPj7Rb-4L.jpg" alt="">
                    </div>
                    <div class="offset-2 offset-lg-2 mt-1  bg-white">
                        <div class="row">
                           <div class="col-3 col-lg-3 card border-info mb-3 " style="max-width: 18rem;">
                                <img src="img/singlproductimg/Gamepad-PN.png" class="mt-4">                        
                            </div>

                            <div class="col-3 col-lg-3 card border-info mb-3 ml-2" style="max-width: 18rem;">
                                <img src="img/singlproductimg/Gamepad-Transparent.png" class="mt-4">                        
                            </div>

                            <div class="col-3 col-lg-3 card border-info mb-3 ml-2" style="max-width: 18rem;">
                                <img src="img/singlproductimg/gamepad_p.png" class="mt-4">                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 pt-2 mb-2 bg-white ">
                    <div class="row">
                        <div class="card has-background-danger-light  mb-3" >
                            <div class="row border-bottom border-dark">
                                    <div class="col-12 my-2">
                                        <span class="fs-4 text-black-50 fw-bolder">USB Game Control</span>
                                    </div>
                            </div>

                            <div class="row border-bottom border-dark">
                                <div class="col-12 my-2">
                                    <span class="badge">
                                        <i class="bi bi-star-fill text-warning fs-5"></i>
                                        <i class="bi bi-star-fill text-warning fs-5"></i>
                                        <i class="bi bi-star-fill text-warning fs-5"></i>
                                        <i class="bi bi-star-fill text-warning fs-5"></i>
                                        <i class="bi bi-star-fill text-black-50 fs-5"></i>
                                        <i class="bi bi-star-fill text-black-50 fs-5"></i>
                                        &nbsp;&nbsp;

                                        <label class="fs-5 text-dark fw-bold">4 Stars | 56 Reviews & Ratings</label>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="row border-bottom border-dark">
                                <div class="col-12 my-2">
                                <span class="text-dark fw-bolder"> Rs. 11,000.00</span>
                                </div>
                            </div>

                            <div class=" border-bottom border-dark">
                                <div class="row col-12 my-2">
                                <span class="fs-5 text-success fw-bolder">Available : In stok </span>
                                <span class="fs-5 text-success fw-bolder">AProduct Code : 14658# </span>
                                <span class="fs-5 text-success fw-bolder">Tags : best gaming expirience, entetainmet </span>
                                <span class="fs-5 text-success fw-bolder">Warrenty : 6 Months Warrenty </span>
                                </div>
                            </div>

                            <div class="col-12 mt-5">
                                    <div class="row">                                      
                                        <div class="col-6 d-grid">
                                            <div>
                                                <span class="text-dark col-6 offset-2 fs-3"> Color</span>
                                            </div>
                                            
                                            <div class="dropdown d-grid">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Select colour
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><span class="dropdown-item">White</span></li>
                                                <li><span class="dropdown-item">Black</span></li>
                                                <li><span class="dropdown-item">yellow</span></li>
                                            </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="col-6 d-grid">                                        
                                        
                                    </div>
                                </div>

                            
                                <div class="col-12 mt-5">
                                    <div class="row">                                      
                                        <div class="col-6 d-grid">
                                            <button class="btn btn-dark">Add To Cart</button>
                                        </div>
                                        <div class="col-6 d-grid">
                                            <button class="btn btn-outline-secondary"><i class="bi bi-heart-fill text-black"></i> Add To Wishlist</button>                                         
                                        </div>
                                        <div class="col-12 d-grid mt-3">
                                            <button class="btn btn-outline-warning">Buy Now</button>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="border border-1 border-secondary rounded overflow-hidden 
                                                        float-left mt-1 position-relative product-qty">
                            <div class="col-12">
                                <span>Quantity : </span>
                                <input type="text" class="border-0 fs-5 fw-bold text-start" style="outline: none;" 
                                pattern="[0-9]" value="10" id="qty_input"/>

                                <div class="position-absolute qty-buttons">
                                    <div class="justify-content-center d-flex flex-column align-items-center 
                                        border border-1 border-secondary qty-inc">
                                        <i class="bi bi-caret-up-fill text-primary fs-5"></i>
                                    </div>
                                    <div class="justify-content-center d-flex flex-column align-items-center 
                                        border border-1 border-secondary qty-dec">
                                        <i class="bi bi-caret-down-fill text-primary fs-5"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                
            </div>
            <hr class="bg-danger">

                <div class="row border-bottom border-dark">
                    <div class="col-12 my-2">
                    <h3 class="text-dark fw-bolder"> Related Items</h3>
                    </div>
                </div>

                <div class="col-12">
                            <div class="row justify-content-center gap-3">
                                <div class="card " style="width: 18rem ;">
                                    <img src="img/product/iphone1.jpg" class="IMG card-img-top">
                                    <div class="card-body ms-0 m-0 text-center">
                                        <h5 class="card-title bg">iphone 12</h5>
                                        <span class="card-text text-primary fw-bold">Rs.156,000.00</span> <br />
                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                        <br>                                       
                                        <a class="btn btn-outline-primary rounded-4" href="singleProductView.php" role="button">More details</a>                                       
                                    </div>
                                </div>

                                <div class="card" style="width: 18rem;">
                                    <img src="img/product/iphone2.jpg" class="IMG card-img-top">
                                    <div class="card-body ms-0 m-0 text-center">
                                        <h5 class="card-title bg">iphone 12pro</h5>
                                        <span class="card-text text-primary fw-bold">Rs.160,000.00</span> <br />
                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                        <br>                                  
                                        <a class="btn btn-outline-primary rounded-4" href="singleProductView.php" role="button">More details</a>                                       
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="img/product/iphone3.jpg" class="IMG card-img-top">
                                    <div class="card-body ms-0 m-0 text-center">
                                        <h5 class="card-title bg"> iphone 13</h5>
                                        <span class="card-text text-primary fw-bold">Rs.136,000.00</span> <br />
                                        <span class="card-text text-warning fw-bold">In Stock</span> <br />
                                        <br/>                                       
                                        <a class="btn btn-outline-primary rounded-4" href="singleProductView.php" role="button">More details</a>                                       
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
            
        </div>

            <?php include "footer.php"; ?>     
        <script src="bootstrap.bundle.js"></script>
    </body>
</html>