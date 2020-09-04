<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Birayi Product Store</title>
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
     <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="styles\test.css">
</head>
<body>
    <!-- -------------------------- HEADER INCLUDE TOPdiv -------------------------  -->
<div id="top">
    <div class="container">
        <div class="col-md-6 offer">
            <a href="#" class="btn btn-success btn-sm">Welcome</a>
            <a href="checkout.php">4 items in your Cart| Total Price is 300$ </a>
        </div>

        <div class="col-md-6">
            <ul class="menu">
                <li><a href="cutomerRegister.php">Register</a></li>
                <li><a href="checkout.php">My Account</a></li>
                <li><a href="cart.php">Go to Cart</a></li>
                <li><a href="checkout.php">Login</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- ---------------------------- END HEADER----------------------------------------- -->

<!-- --------------------------  NAV BAR UNDER HEADER------------------------------------ -->

<div id="navbar" class="navbar navbar-default">
    <div class="container">
    
<!-- --------------------------  NAV BAR HEADER ------------------------------------ -->
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand home">
                <img src="images\ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                <img src="images\ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
            </a>

            <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle Navigation</span>

                <i class="fa fa-align-justify"></i>
            </button>

            <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                <span class="sr-only">Toggle Search</span>

                <i class="fa fa-search"></i>
            </button>


        </div>
        
<!-- --------------------------  NAV BAR HEADER FINISH------------------------------------ -->

<!-- --------------------------  NAV BAR COLLAPSSE BEGIN------------------------------------ -->
        <div class="navbar-collapse collapse" id="navigation">
            <div class="padding-nav">
                <ul class="nav navbar-nav left">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="contact.php">Contuct Us</a>
                    </li>
                </ul>
            </div>
<!-- ------------ Under Padding Nav Put Buttons Search And Shopping cart--------------------- -->
            <a href="cart.php" class="btn navbar-btn btn-primary right">
                <i class="fa fa-shopping-cart"></i>
                <span>4 Items on Your Cart</span>
            </a>

            <div class="navbar-collapse collapse right">
                <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                
                    <span class="sr-only">Toggle Search</span>

                    <i class="fa fa-search"></i>
                
                </button>

            </div>
<!-- ------------ End  Buttons Search And Shopping cart--------------------- -->

<!-- ------------ Search Form in Collapse div--------------------- -->

            <div class="collapse clearfix" id="search">
                <form action="results.php" method="get" class="navbar-form">
                    <div class="input-group">

                        <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary" name="search" value="Search">
                        </span>
                        <i class="fa fa-search"></i>

                        </button>
                    </div>
                </form>
            </div>

<!-- ------------ END Search Form in Collapse div--------------------- -->
        </div>
        
<!-- --------------------------  NAV BAR COLLAPSSE collapse end ------------------------- -->
    </div>
</div>

<!-- ---------------------------- END NAV BAR----------------------------------------- -->


<!-- ---------------------------- CONTAINER OF SLIDES----------------------------------------- -->
<div class="container" id="slider">
    <div class="col-mid-12"><!-- start COL-MD-12 -->
        <div class="carousel slide" id="myCarousel" data-ride="carousel">

        <ol class="carousel-indicators">
            <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        
        <div class="carousel-inner"> <!-- CAROUSEL INNER CODE START-->
            <div class="item active">
                <img src="admin_area\slides_images\slide-1.PNG" alt="Slider Image 1">
            </div>
            <div class="item">
                <img src="admin_area\slides_images\slide-2.PNG" alt="Slider Image 2">
            </div>
            <div class="item">
                <img src="admin_area\slides_images\slide-3.PNG" alt="Slider Image 3">
            </div>
            <div class="item">
                <img src="admin_area\slides_images\slide-4.PNG" alt="Slider Image 4">
            </div>

        </div>  <!-- END CAROUSEL INNER -->
        <!-- END CAROUSEL CONTROL <PREV AND NEXT> -->
        <a href="#myCarousel" class="left carousel-control" data-slide="prev">

            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a href="#myCarousel" class="right carousel-control" data-slide="next">
            
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>

        </div> <!-- END CAROUSEL SLIDE #myCarousel -->
    </div> <!-- END COL-MD-12 -->
</div>
<!-- ---------------------------- END CONTAINER OF SLIDES----------------------------------- -->
<!-- ---------------------------- START ADVANTAGES 4 columns----------------------------------- -->
<div id="advantages">
    <div class="container">
        <div class="same-height-row">
            <!-- First Column -->
            <div class="col-sm-4">
                <div class="box same-height">
                    <div class="icon">
                        <i class="fa fa-heart"></i>
                    </div>
                    <h3><a href="#">Best Offer</a></h3>
                    <p>We know to provide best services ever 
                        krjehgrethtjbtrbghbgbsddsb Lorem 
                    </p>
                </div>
            </div>
            <!-- Second Column -->
            <div class="col-sm-4">
                <div class="box same-height">
                    <div class="icon">
                        <i class="fa fa-tag"></i>
                    </div>
                    <h3><a href="#">Best Prices</a></h3>
                    <p>Compare us with another site, who have the best price! 
                        ipsum dolor sit adipisicing elit.</p>
                </div>
            </div>
            <!-- Third Column -->
            <div class="col-sm-4">
                <div class="box same-height">
                    <div class="icon">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                    <h3><a href="#">100% Original</a></h3>
                    <p>We just offer you the Best and Original products
                        krjehgrethtjbtrbghbgbsddsb Lorem 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>      
<!-- ---------------------------- END ADVANTAGES----------------------------------- -->
<!-- ---------------------------- HOT DIV START ----------------------------------- -->
<div id="hot">
    <div class="box">
        <div class="container">
            <di class="col-md-12">
                <h2>Our Latest Products</h2>
            </di>
        </div>
    </div>
</div>
<!-- ---------------------------- HOT DIV END ----------------------------------- -->
<!-- ---------------------------- Product Content DIV START ----------------------------------- -->
<div id="content" class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single START1 -->
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin_area\product_images\Product-1.jpg" alt="Product 1">
                </a>
                <div class="text">
                    <h3>
                        <a href="details.php">Dressing Logo</a>
                    </h3>
                    <p class="price">$30</p>

                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>

                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"> Add To Cart</i>
                        </a>
                    </p>
                </div>
            </div>
        </div><!-- col-sm-4 col-sm-6 single END1 -->
        <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single START2 -->
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin_area\product_images\Product-2s.jpg" alt="Product 2">
                </a>
                <div class="text">
                    <h3>
                        <a href="details.php">Dressing Logo Fashion</a>
                    </h3>
                    <p class="price">$30</p>

                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>

                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"> Add To Cart</i>
                        </a>
                    </p>
                </div>
            </div>
        </div><!-- col-sm-4 col-sm-6 single END2 -->
        <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single START3 -->
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin_area\product_images\Product-1.jpg" alt="Product 1">
                </a>
                <div class="text">
                    <h3>
                        <a href="details.php">Dressing Logo</a>
                    </h3>
                    <p class="price">$30</p>

                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>

                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"> Add To Cart</i>
                        </a>
                    </p>
                </div>
            </div>
        </div><!-- col-sm-4 col-sm-6 single END3 -->
        <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single START3 -->
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin_area\product_images\Product-2s.jpg" alt="Product 2">
                </a>
                <div class="text">
                    <h3>
                        <a href="details.php">Dressing Logo Fashion</a>
                    </h3>
                    <p class="price">$30</p>

                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>

                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"> Add To Cart</i>
                        </a>
                    </p>
                </div>
            </div>
        </div><!-- col-sm-4 col-sm-6 single END3 -->
        <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single START1 -->
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin_area\product_images\Product-1.jpg" alt="Product 1">
                </a>
                <div class="text">
                    <h3>
                        <a href="details.php">Dressing Logo</a>
                    </h3>
                    <p class="price">$30</p>

                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>

                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"> Add To Cart</i>
                        </a>
                    </p>
                </div>
            </div>
        </div><!-- col-sm-4 col-sm-6 single END1 -->
        <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single START2 -->
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin_area\product_images\Product-2s.jpg" alt="Product 2">
                </a>
                <div class="text">
                    <h3>
                        <a href="details.php">Dressing Logo Fashion</a>
                    </h3>
                    <p class="price">$30</p>

                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>

                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"> Add To Cart</i>
                        </a>
                    </p>
                </div>
            </div>
        </div><!-- col-sm-4 col-sm-6 single END2 -->
        <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single START3 -->
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin_area\product_images\Product-1.jpg" alt="Product 1">
                </a>
                <div class="text">
                    <h3>
                        <a href="details.php">Dressing Logo</a>
                    </h3>
                    <p class="price">$30</p>

                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>

                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"> Add To Cart</i>
                        </a>
                    </p>
                </div>
            </div>
        </div><!-- col-sm-4 col-sm-6 single END3 -->
        <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single START3 -->
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin_area\product_images\Product-2s.jpg" alt="Product 2">
                </a>
                <div class="text">
                    <h3>
                        <a href="details.php">Dressing Logo Fashion</a>
                    </h3>
                    <p class="price">$30</p>

                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>

                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"> Add To Cart</i>
                        </a>
                    </p>
                </div>
            </div>
        </div><!-- col-sm-4 col-sm-6 single END3 -->
        <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single START1 -->
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin_area\product_images\Product-1.jpg" alt="Product 1">
                </a>
                <div class="text">
                    <h3>
                        <a href="details.php">Dressing Logo</a>
                    </h3>
                    <p class="price">$30</p>

                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>

                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"> Add To Cart</i>
                        </a>
                    </p>
                </div>
            </div>
        </div><!-- col-sm-4 col-sm-6 single END1 -->
        <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single START2 -->
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin_area\product_images\Product-2s.jpg" alt="Product 2">
                </a>
                <div class="text">
                    <h3>
                        <a href="details.php">Dressing Logo Fashion</a>
                    </h3>
                    <p class="price">$30</p>

                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>

                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"> Add To Cart</i>
                        </a>
                    </p>
                </div>
            </div>
        </div><!-- col-sm-4 col-sm-6 single END2 -->
        <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single START3 -->
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin_area\product_images\Product-1.jpg" alt="Product 1">
                </a>
                <div class="text">
                    <h3>
                        <a href="details.php">Dressing Logo</a>
                    </h3>
                    <p class="price">$30</p>

                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>

                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"> Add To Cart</i>
                        </a>
                    </p>
                </div>
            </div>
        </div><!-- col-sm-4 col-sm-6 single END3 -->
        <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single START3 -->
            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin_area\product_images\Product-2s.jpg" alt="Product 2">
                </a>
                <div class="text">
                    <h3>
                        <a href="details.php">Dressing Logo Fashion</a>
                    </h3>
                    <p class="price">$30</p>

                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>

                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"> Add To Cart</i>
                        </a>
                    </p>
                </div>
            </div>
        </div><!-- col-sm-4 col-sm-6 single END3 -->
    </div>
</div>
<!-- ---------------------------- product content div END ----------------------------------- -->

<?php 
    include("includes/footer.php");
    
?>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>
</html>