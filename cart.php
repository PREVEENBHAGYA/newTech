<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Cart | NEW TECH</title>

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

                    <div class="col-12  bg-body ">
                        <div class="row">
                            <div class=" col-12 ">
                                <div class="row">               
                                    <div class="col-12 text-center">
                                            <p class="fs-1 text-bg-secondary fw-bold mt-2 pt-1"> ...Cart.. <i class="bi bi-cart4 fs-1 text-dark"></i> </p>
                                    </div>
                                    
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="Home.php">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">  cart  </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-12 col-lg-10 has-background-primary-light
                             rounded-5 mb-1" style="width: 100%;">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                            <div class="col-12 col-lg-6 mb-2">
                                                <div class="col-12 col-lg-6">
                                                    <label class="form-label fs-1 fw-bolder">Cart Items</label>
                                                </div>
                                                
                                            </div>
                                            <hr class="bg-danger ">

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="offset-lg-2 col-12 col-lg-6 mb-4">
                                                        <div class="control has-icons-left has-icons-right">
                                                            <input class="input is-rounded border-success" placeholder="Search cart item.."/>
                                                            <span class="icon is-small is-right">
                                                            <i class="bi bi-search"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-2 d-grid mb-3">
                                                        <button class="btn btn-success button is-rounded ">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                                                                               
                                            <div>
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 ">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                            <div class="col-md-4">
                                                                <img src="img/product/iphone-13-pro.png" class="img-fluid rounded-start img-thumbnail mt-1 mb-1">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="card-body">
                                                                <h2 class="card-title  fs-4">iphone 13 pro</h2>
                                                                <span class="card-text">Price Rs.156,000.00</span>
                                                                <p class="card-text text-danger"><small>Discount : 10%</small></p>
                                                                <span class="fw-bold text-black-50 fs-6">Quantity :</span>&nbsp;
                                                                    <input type="number" class="mt-1 border border-1 border-secondary  fw-bold px-3 cardqtytext" value="1">
                                                                    <br><br>
                                                                <button type="button" class="btn btn-success btn-sm"><i class="bi bi-check2-circle"></i> BUY  </button>
                                                                <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-x-circle-fill"></i> REMOVE </button>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-lg-6 ">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                            <div class="col-md-4">
                                                                <img src="img/product/apple_wotch.jpg" class="img-fluid rounded-start img-thumbnail mt-1 mb-1">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="card-body">
                                                                <h2 class="card-title fs-4">Apple Wotch</h2>
                                                                <span class="card-text ">Price Rs.480,000.00</span>
                                                                <p class="card-text text-danger"><small>Discount : 10%</small></p>
                                                                <span class="fw-bold text-black-50 fs-6">Quantity :</span>&nbsp;
                                                                    <input type="number" class="mt-1 border border-1 border-secondary  fw-bold px-3 cardqtytext" value="2">
                                                                    <br><br>
                                                                <button type="button" class="btn btn-success btn-sm"><i class="bi bi-check2-circle"></i> BUY  </button>
                                                                <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-x-circle-fill"></i> REMOVE </button>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-lg-6 ">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                            <div class="col-md-4">
                                                                <img src="img/product/drone.jpg" class="img-fluid rounded-start img-thumbnail mt-1 mb-1">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="card-body">
                                                                <h2 class="card-title fs-4">Drone camera</h2>
                                                                <span class="card-text">Price Rs.116,000.00</span>
                                                                <p class="card-text text-danger"><small>Discount : 9%</small></p>
                                                                <span class="fw-bold text-black-50 fs-6">Quantity :</span>&nbsp;
                                                                    <input type="number" class="mt-1 border border-2 border-secondary  fw-bold px-2 cardqtytext" value="1">
                                                                    <br><br>
                                                                <button type="button" class="btn btn-success btn-sm"><i class="bi bi-check2-circle"></i> BUY  </button>
                                                                <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-x-circle-fill"></i> REMOVE </button>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-lg-6 ">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                            <div class="col-md-4 img2">
                                                                <img src="img/product/61nPj7Rb-4L.jpg" class="img-fluid rounded-start img-thumbnail mt-1 mb-1">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="card-body">
                                                                <h2 class="card-title fs-4">USB Game pad</h2>
                                                                <span class="card-text">Price Rs.33,000.00</span>
                                                                <p class="card-text text-danger"><small>Discount : 8%</small></p>
                                                                <span class="fw-bold text-black-50 fs-6">Quantity :</span>&nbsp;
                                                                    <input type="number" class="mt-1 border border-1 border-secondary  fw-bold px-3 cardqtytext" value="3">
                                                                    <br><br>
                                                                <button type="button" class="btn btn-success btn-sm"><i class="bi bi-check2-circle"></i> BUY  </button>
                                                                <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-x-circle-fill"></i> REMOVE </button>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-12 col-lg-6 offset-lg-3">
                                                        <div class="card text-bg-warning mb-3 d-grid " style="max-width: 530px;">                                                         
                                                            <div class="card-body">
                                                                <div class="cart-total">

                                                                    <p>                                      
                                                                        <span class="fs-4">Total Price</span>                                       
                                                                        <span>Rs 785,000</span>                                        
                                                                    </p>
                                                        
                                                                    <p>                                        
                                                                        <span class="fs-4">Number of Items</span>                                       
                                                                        <span>7</span>                                       
                                                                    </p>
                                                        
                                                                    <p>                                       
                                                                        <span class="fs-4" >You Save</span>                                        
                                                                        <span>Rs 78,500</span>                                       
                                                                    </p>                                       
                                                                    <a href="invoice.php" >Check Out</a>
                                                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                                                                       
                                            <hr class="bg-black">                                                                                   
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                

                <?php include "footer.php"; ?>     
                </div>
            </div>   
    </body>
</html> 