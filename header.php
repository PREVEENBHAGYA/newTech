<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>header | NEW TECH</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bulma.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
</head>

<body class="header">

    <div class="col-12">
        <div class="row mt-2 mb-2">

            <div class="offset-lg-0 col-12 col-lg-5 align-self-start mt-2">  
               <span class="new text-lg-start">NEW TECH|</span> 
               <span class=" text-text-decoration-none fw-bold span">WELCOME | </span> 
               <span class=" text-text-decoration-none fw-bold span">Kamal |</span>
               <span class="signout text-lg-start fw-bold  logout "> Log Out</span>
            </div>

            <div class="offset-lg-4 col-12 col-lg-3 align-self-end">
                <div class="row">

                    <div class="col-3 col-lg-6 dropdown">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                            <button class="button is-info is-outlined" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span >Menu Bar</span>                            
                                <i class="fas fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </button>
                            </div>
                            <div class="dropdown-menu" >
                                <div class="dropdown-item">
                                    <a href="#" class="dropdown-item">
                                       1. Profile
                                       <hr class="bg-info">
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        2. Our Product 
                                        <hr class="bg-info">
                                    </a>
                                    <a href="invoice.php" class="dropdown-item">
                                        3. Invoices
                                        <hr class="bg-info">
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        4. Purchase History
                                        <hr class="bg-info">
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        5. selling
                                        <hr class="bg-info">
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        6. Saved
                                        <hr class="bg-info">
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        7. Message 
                                        <hr class="bg-info">
                                    </a>
                                    <hr class="dropdown-divider">
                                </div>
                            </div> 
                            
                        </div>
                    </div>
                    <div class="col-1 col-lg-3 ms-5 ms-lg-0 mt-1 wishlist" onclick="window.location='watchlist.php';"></div>

                    <div class="col-1 col-lg-3 ms-5 ms-lg-0 mt-0 mt-1 cart" onclick="window.location='cart.php';"></div>

                </div>
            </div>

        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>