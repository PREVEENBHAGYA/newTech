<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Product | New Tech</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="img/icon1.jpg" />

</head>

<body class="body2">

    <div class="container-fluid">
        <div class="row gy-3">
        <div class="col-12 bg-body ">
                    <?php include "header.php"; ?>
                </div>
           

                <div class="col-12 border border-4 border-warning rounded-4">
                    <div class="row">

                        <div class="col-12 text-center row">
                        
                            <p class="col-8 offset-1 fs-1 text-bg-secondary rounded-5 fw-bold mt-2 pt-1 text-decoration-underline">
                                <i class="bi bi-bag-plus-fill text-warning fs-1"></i> Product adding ...! </i>
                            </p>
                            <button class="col-4 btn btn-outline-warning rounded-5 mt-2 ml-4 fs-5" style="width: 10rem; height:60px;">Update product</button>
                                
                                
                        </div>

                        <div class="col-12">
                            <div class="row border border-warning bg-white">

                                <div class="col-12 col-lg-4 offset-0 offset-lg-2">
                                    <div class="row">

                                        <div class="col-12">
                                            
                                            <label class="form-label fw-bold" style="font-size: 20px;">Select Product Category</label>
                                            
                                        </div>

                                        <div class="col-12 ">
                                            <select class="form-select  bg-warning" id="category">
                                                <option >Select Category</option>
                                                <option >Mobile phone</option>
                                                <option >Head set</option>
                                                <option >drone</option>
                                                <option > Camera</option>
                                               
                                            </select>
                                            <div class="col-12">                                                                                         
                                                <h4  class="form-label fw-bold mt-2" style="font-size: 20px;"> Add new Category</h4>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control bg-warning" placeholder="add new Category" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <button class="btn btn-outline-dark" type="button" id="button-addon2"> SAVE</button>
                                                  </div>
                                                  
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 ">
                                    <div class="row">

                                        <div class="col-12">
                                            <label class="form-label fw-bold " style="font-size: 20px;">Select Product Brand</label>
                                        </div>

                                        <div class="col-12">
                                            <select class="form-select  bg-warning" id="brand">
                                                <option value="0">Select Brand</option>
                                                <option value="0"> Apple</option>
                                                <option value="0"> Dell</option>
                                                <option value="0">Innovex</option>
                                              
                                            </select>
                                            <div class="col-12">                                                                                         
                                                <h4  class="form-label fw-bold mt-2" style="font-size: 20px;"> Add new Brand</h4>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control bg-warning" placeholder="add new Brand" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <button class="btn btn-outline-dark" type="button" id="button-addon2">SAVE</button>
                                                  </div>
                                                  
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-2">
                            <div class="row border border-warning bg-white">

                                <div class="col-12 col-lg-4 offset-0 offset-lg-2">
                                    <div class="row">

                                        <div class="col-12">
                                            <label class="form-label fw-bold" style="font-size: 20px;">Select Product Model</label>
                                        </div>

                                        <div class="col-12">
                                            <select class="form-select text-center bg-warning" id="model">
                                                <option value="0">Select Model</option>
                                                
                                            </select>
                                            <div class="col-12">                                                                                         
                                                <h4  class="form-label fw-bold mt-2" style="font-size: 20px;"> Add new Model</h4>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control bg-warning" placeholder="add new Model" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <button class="btn btn-outline-dark" type="button" id="button-addon2">SAVE</button>
                                                  </div>
                                                  
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 ">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="form-label fw-bold " style="font-size: 20px;">Select Product Colour</label>
                                        </div>
                                        <div class="col-12">
                                            

                                            <select class="form-select bg-warning" id="clr">
                                                <option>Select Colour</option>
                                                <option>Blue</option>
                                                <option>Red</option>
                                                <option>white</option>
                                                <option>Black</option>                                                   
                                            </select>
                                            <div class="col-12">                                                                                         
                                                <h4  class="form-label fw-bold mt-2" style="font-size: 20px;"> Add new Model</h4>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control bg-warning" placeholder="add new Model" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <button class="btn btn-outline-dark" type="button" id="button-addon2">SAVE</button>
                                                  </div>
                                                  
                                            </div>
                                            
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-2">
                            <div class="row border border-warning bg-white">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-lg">
                                            <label class="form-label fw-bold " style="font-size: 20px;">
                                                Add Product Title
                                            </label>
                                        </div>
                                        <div class=" col-12 col-lg-8">
                                            <input type="text" class="form-control bg-warning" id="title" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 mt-2">
                            
                                <div class="row border border-warning bg-white">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label fw-bold" style="font-size: 20px;">Select Condition</label>
                                            </div>
                                            <div class="col-12 ">
                                                <div class="form-check form-check-inline mx-5">
                                                    <input class="form-check-input bg-warning" type="radio"checked />
                                                    <label class="form-check-label fw-bold" for="b">Brandnew</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input bg-warning" type="radio" />
                                                    <label class="form-check-label fw-bold" for="u">Old</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input bg-warning" type="radio" />
                                                    <label class="form-check-label fw-bold" for="u">Used</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                          
                                <div class="row border border-warning bg-white mt-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="form-label fw-bold" style="font-size: 20px;"> Item Cost</label>
                                        </div>
                                        <div class="offset-0 offset-lg-2 col-12 col-lg-8">
                                            <div class="input-group mb-2 mt-2">
                                                <span class="input-group-text">Rs.</span>
                                                <input type="text" class="form-control bg-warning" id="cost" />
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row border border-warning bg-white mt-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="form-label fw-bold" style="font-size: 20px;"> Item Discount</label>
                                        </div>
                                        <div class="offset-0 offset-lg-2 col-12 col-lg-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-warning" aria-label="Dollar amount (with dot and two decimal places)">
                                                <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>                          

                        </div>

                        <div class="col-12 col-lg-6 mt-2">
                            
                                <div class="row border border-warning bg-white">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label fw-bold" style="font-size: 20px;">Product Description</label>
                                            </div>
                                            <div class="col-12">
                                                <textarea cols="30" rows="15" class="form-control border-warning"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                                       
                                <div class="col-12">
                                    <div class="row border border-warning bg-white">
                                        <div class="col-12">
                                            <label class="form-label fw-bold" style="font-size: 20px;">Add Product Images</label>
                                        </div>
                                        <div class="">
                                            <div class="row  offset-0 offset-lg-2">

                                            <div class="card rounded-4 bg-warning" style="width: 14rem;">
                                                <div class="card-body ">
                                                  <img style="width: 180px;" src="img/image-add-solid-240.png">
                                                </div>
                                            </div>

                                            <div class="card rounded-4 bg-warning" style="width: 14rem;">
                                                <div class="card-body mb-3 ml-2">
                                                  <img  style="width: 180px;" src="img/image-add-solid-240.png">
                                                </div>
                                            </div>

                                            <div class="card rounded-4 bg-warning" style="width: 14rem;">
                                                <div class="card-body ">
                                                  <img  style="width: 180px;" src="img/image-add-solid-240.png">
                                                </div>
                                            </div>
                                        
                                        </div>
                                        
                                        <div class="offset-2 offset-lg-3 col-8 col-lg-6 d-grid mt-3">
                                            <input type="file" class="d-none" multiple />
                                            <label for="imageuploader" class="col-12  btn btn-danger" >Upload Images</label>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <div class="offset-1 offset-lg-2 col-10 col-lg-8 d-grid mt-3 mb-3">
                                    <button class="btn btn-dark">Save Product</button>
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