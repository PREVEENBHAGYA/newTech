<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Advanced serch | NEW TECH</title>

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
                                            <p class="fs-1 text-bg-secondary fw-bold mt-2 pt-1"> Advanced Search </p>
                                    </div>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="Home.php">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">  Advanced Search </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>

                            <div class=" container  col-12 col-lg-10 has-background-success-light rounded-3 mb-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                            <div class="col-12 col-lg-6 mb-2">
                                                <div class="col-12 col-lg-6">
                                                    <h2>Find Items</h2>
                                                </div>
                                            </div>
                                            <hr class="bg-black">
                                                                                               
                                        <div>
                                            
                                             <div>
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 mt-2">
                                                        <div class="col-12 col-lg-6 text-center  mb-2">
                                                            <h5>Enter keywords</h5>
                                                        </div>
                                                        <div class="control has-icons-left has-icons-right">
                                                            <input class="input is-rounded border-success" placeholder="Enter keyword"/>
                                                            <span class="icon is-small is-right">
                                                            <i class="bi bi-search"></i>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-lg-6 mt-2">
                                                    <div class="col-12 col-lg-6 text-center mb-2">
                                                        <h5>Keyword options</h5>
                                                    </div>
                                                    <select class="form-select input is-rounded border-success" aria-label="Default select example">
                                                        <option selected>All WORDS, ANY ORDER</option>
                                                        <option value="1">HIGH TO LOW PRICE</option>
                                                        <option value="2">LOW TO HIGH PRICE</option>
                                                        <option value="3">HIGH TO LOW CONTITY</option>
                                                        <option value="3">LOW TO HIGH CONTITY</option>
                                                    </select>                                                                                                            
                                                    </div>
                                                </div>
                                             </div>

                                            <div>
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 ">
                                                        <div class="col-12 col-lg-6 text-center  mb-3">
                                                            <h5>Exclude words for search</h5>
                                                        </div>
                                                        <div class="control has-icons-left has-icons-right">
                                                            <input class="input is-rounded border-success" placeholder="Exclude words "/>
                                                            <span class="icon is-small is-right">
                                                            <i class="bi bi-search"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6 ">
                                                        <div class="col-12 col-lg-6 text-center  mb-3">
                                                            <h5> Categorys</h5>
                                                        </div>
                                                        <select class="form-select input is-rounded border-success" aria-label="Default select example">
                                                        <option selected> Mobile and sell Phones</option>
                                                        <option value="1"> Tab and Laptops</option>
                                                        <option value="2"> Drones </option>
                                                        <option value="3"> Game pad and game module</option>
                                                        <option value="3"> Head set and handfrees</option>
                                                        <option value="3"> LED TV </option>
                                                        <option value="3"> Wotchs</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12  text-center mt-3 ">
                                                <div class="offset-4 col-6 col-lg-4 text-center mb-3 d-grid gap-3  mx-8 ">
                                                    <button class=" btn btn-outline-success"> Search </button>
                                                </div>
                                            </div>
                                            <hr class="bg-black">

                                            <div class="col-6">
                                                <div class="mb-2 offset-2">
                                                    <h4> Condition</h4>
                                                </div>
                                                <div class="offset-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"/>
                                                        <label class="form-check-label">
                                                            Brand New
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"/>
                                                        <label class="form-check-label">
                                                            Used
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"/>
                                                        <label class="form-check-label">
                                                           Not Specified
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="bg-black">

                                            <div class="col-6">
                                                <div class="mb-2 offset-2">
                                                    <h4> Active time</h4>
                                                </div>
                                                <div class="offset-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Newest to oldest

                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Oldest to newest
                                                        </label>
                                                    </div>                                                
                                                </div>
                                            </div>
                                            <hr class="bg-black">

                                            <div class="row">
                                                <div class="col-12 col-lg-6 mt-2">                                                     
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">Rs</span>
                                                        <span class="input-group-text">0.00</span>
                                                        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" placeholder="Price From">
                                                    </div>
                                                
                                                </div>
                                                <div class="col-12 col-lg-6 mt-2">                                                     
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">Rs</span>
                                                        <span class="input-group-text">0.00</span>
                                                        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" placeholder="Price To">
                                                    </div>                                              
                                                </div>
                                            </div>
                                            
                                            <div class="col-12  text-center mt-3 ">
                                                <div class="offset-3 col-6 col-lg-6 text-center mb-3 d-grid gap-3  mx-8 ">
                                                    <button class="btn btn-outline-warning"> Search </button>
                                                </div>
                                            </div>

                                            
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