<?php
require "assets/inc/main.php";

?>

<html>
<head>

<title>NovaShop</title>
<link href="/assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="/assets/css/style.css">

<script src="/assets/css/bootstrap.min.js"></script>
<script src="/assets/js/jquery.min.js"></script>

<link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
</head>


<body>

    <div class="p-3 bg-glass">
      <header class="blog-header py-3 pb-2 border-bottom border-dark">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Subscribe</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo color-seconde h1 font-Gugi" href="#">NovaShop</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3" style="--darkreader-inline-fill:none; --darkreader-inline-stroke:currentColor;" data-darkreader-inline-fill="" data-darkreader-inline-stroke=""><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2 border-bottom border-dark">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 color-seconde font-Com" href="#"><span class="fa fa-phone"></span> World</a>
		  <a class="p-2 color-seconde font-Com" href="#"><span class="fa fa-search"></span> U.S.</a>
		  <a class="p-2 color-seconde font-Com" href="#"><span class="fa fa-shopping-cart"></span> Technology</a>
          <a class="p-2 color-seconde font-Com" href="#"><span class="fa fa-shopping-bag "></span> Design</a>
          <a class="p-2 color-seconde font-Com" href="#"><span class="fa fa-shopping-cart "></span> Culture</a>
          <a class="p-2 color-seconde font-Com" href="#"><span class="fa fa-phone"></span> World</a>
          <a class="p-2 color-seconde font-Com" href="#"><span class="fa fa-phone"></span> World</a>
          <a class="p-2 color-seconde font-Com" href="#"><span class="fa fa-phone"></span> World</a>
          <a class="p-2 color-seconde font-Com" href="#"><span class="fa fa-phone"></span> World</a>
        </nav>
      </div>

      <div class="p-3 p-md-5 mt-5 text-dark rounded bg-glass-1">
      <div class="row">
        <div class="col-md-6 px-0">
          <h1 class="display-4 te font-MrRobot color-primare">Welcome To NOVA_SHOP</h1>
          <p class="lead my-3 font-gugi">The Future Of The Ecomerse Shop All Is Free For Me But You, You Buy . Any Founds Here Is Not Free You Can Sell With Paypals And BitCoins !</p>
          <p class="lead mb-0"><a href="#" class="btn btn-primary">Go To Shopings <span class="fa fa-arrow-right"></span> </a></p>
        </div>
		<div class="col-md-6 row flex-nowrap justify-content-center align-items-center">
			<img src="assets/img/undraw_shopping_app_flsj.svg" width="400"/>
		</div>
        </div>
      </div>



		<?php
		/*
		while ($row = mysqli_fetch_assoc($products1111))
		{
			echo '<div class="col-md-4 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="assets/img/product/'.$row["coverImage"].'">
                        <img class="pic-2" src="assets/img/product/testimonial-img-1.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search pt-2"></i></a></li>

                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag pt-2""></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart pt-2""></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">'.$row["name"].'</a></h3>
                    <div class="price">$'.$row["prix"].'
                        <!--<span>$20.00</span>-->
                    </div>
                    <a class="btn  btn-warning add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>';



		}
		*/
		
		?>
    </div>

</div>

<div class="circle1"></div>
<div class="circle2"></div>
</body>
</html>
