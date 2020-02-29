<!DOCTYPE html>

<html>

<head>

	<title>ecommerce-project</title>

<!----------custom style link ----------------->


<link rel="stylesheet" type="text/css" href="../css/style.css">


	<!---- font awesome  ------>


	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


	<!--------------bootstrap --- -->


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >


	<!------- jquery link -------------->


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" >

	</script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" >
		
	</script>


<!-- link for scroll-button.php  -->

	<link rel="stylesheet" type="text/css" href="../css/scroll-button.css">

</head>


<body>

<!------- Navbar ------------------>

	
	<section class="header">


		<nav class="navbar navbar-expand-lg navbar-light" id="header-bar" style="background:linear-gradient(to top, #33ccff 0%, #ffccff 90%);">
  			

  			<a class="navbar-brand" href="#" style="font-size: 36px;">
  				<img src="../image/logo/1-red-star-png-image-thumb-removebg-preview (1).png" style="width: 60px">
  			</a>

  			<a class="navbar-brand-life" href="#">
  				<i>lifestyle</i>
  			</a>

  			
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="
  					#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

		    		<i class="fa fa-bars"></i>
		  	</button>

		  <div class="collapse navbar-collapse" id="navbarNav">


		    <ul class="navbar-nav">
		      	

      			<li class="nav-item">
			        <a class="nav-link" href="index.php"><strong>Home</strong></a>
			    </li>



			    <li class="dropdown">

			       <button class="dropbtn"> <a class="nav-link" href="#">

			       	<strong>My account</strong></a>

			       </button> 

			       <div class="dropdown-content">

			         <a class="nav-link" href="#" >

			         	<strong>Account-Details</strong>

			         </a> 

			         <a class="nav-link" href="#">

			         	<strong>Order</strong>

			         </a> 

			         <a class="nav-link" href="#">

			         	<strong>Billing Address</strong>

			         </a>

			          <a class="nav-link" href="#">

			          	<strong>Logout</strong>

			          </a> 

			          <a class="nav-link" href="login-page1.php">

			          	<strong>Login</strong>

			          </a>

			       </div>

			    </li>


			    <li class="nav-item">

			        <a class="nav-link" href="#">

			        	<strong>About us</strong>
			        </a>

			    </li>

			    <li class="nav-item">

			        <a class="nav-link" href="contact-page.php">

			        	<strong>Contact page</strong>

			        </a>

			    </li>


			    <li class="nav-item">

			        <a class="nav-link" href="#">

			        	<strong>Wishlist</strong>

			        </a>

			    </li>


			    <li class="nav-item">

			        <a class="nav-link" href="#">

			        	<strong>Blog</strong>

			        </a>

			    </li>

			    
			</ul>

			<ul class="right-menu ml-auto">


					<li><i class="fa fa-cart-plus">

						<div class="cart-item-zero">0</div></i>

					</li>

					<li>

						<i class="fa fa-facebook" style="color:#0d539ee0;"></i>
					</li>

					<li><i class="fa fa-instagram" style="color:#ae22c7;"></i>
					</li>

					<li><i class="fa fa-twitter" style="color:#0d539ee0;" ></i>
					</li>

					<li>

						<div class="input-group mb-3">
							
						 	<input type="text" class="form-control" placeholder="search">

							<div class="input-group-append">

							    <span class="input-group-text">

							    	<i class="fa fa-search">
							    	
							        </i>

							    </span>

							</div>

						</div>

					</li>

			</ul>

 </div>

 </nav>

</section>



<!----------------end of narbar -------------------->


<!----------------hero and banner  -------------------->

<!-- <header class="hero">

	<div class="banner">

		<h1 class="banner-title">Furniture Collection</h1>

		<button class="banner-btn" style="	font-size:10px;">

			<b>SHOP NOW </b>
			

		</button>


	</div>

</header> -->



<!------------  slider bar  ---------->




<?php
	include('slider-banner.php');

?>

<!------------end of hero and banner------------------>
<br><br><br>

<?php

	include('add-cart-item.php');
?>

<br><br>
<!--------------product --------------------------->
<?php

		include('second-slider-banner.php');

	?>


<section class="products" style="background-color: #ecf0f5;">

	<div class="section-tittle">

		<h2>Based on items you viewed</h2>
		
	</div>



<!----------single product---------->



	<div class="products-center">

		<article class="product" >

			<div class="img-container">

				<img src="../image/bed/bed-white-long.jfif" class="product-img">


				<button class="bag-btn" data-id="1">

					<i class="fa fa-shopping-cart"></i>

						Add to bag
					
				</button>

			</div>

			<h3 >Queen bed</h3>

			<h4>$20.00</h4>

		</article>


<!-- 2 article -->


		<article class="product">

			<div class="img-container">

				<img src="../image/bed/image-bed22.jfif" class="product-img">

				<button class="bag-btn" data-id="1">

					<i class="fa fa-shopping-cart"></i>
						
						Add to bag
						
					
					
				</button>

			</div>

			<h3 >Takai Queen Size Bed</h3>

			<h4>$10.99</h4>

		</article>


<!-- 3 article -->



		<article class="product">

			<div class="img-container">

				<img src="../image/bed/image-bed23.jfif" class="product-img">

				<button class="bag-btn" data-id="1">

					<i class="fa fa-shopping-cart"></i>
						Add to bag
						
					
					
				</button>

			</div>

			<h3 >Godrej Interio Kontrast Engineered Wood Queen</h3>

			<h4>$19.99</h4>

		</article>


<!-- 4 article -->


		
		<article class="product">

			<div class="img-container">

				<img src="../image/furnitures/sofa-red.jfif" class="product-img">

				<button class="bag-btn" data-id="1">

					<i class="fa fa-shopping-cart"></i>
						Add to bag
					
					
				</button>

			</div>

			<h3 >Stoa Paris Sofa</h3>

			<h4>$80.99</h4>

		</article>


<!----------end of single product------->


    </div>


</section>


<?php

include ('plant-container.php');

?>

<br><br>

<?php

include ('add-item.php');

?>


<!----end of product ------------->


<!------------  cart ---------------->


<section class="cart-items-method">

	
	<div class="cart-overlay">

		<div class="cart">

			<span class="close-cart">

			<i class="fa fa-window-close"></i>
				
			</span>
			
			<h2>Your Cart</h2>

			<div class="cart-content">
				


<!------------ cart item -------------->
			

				<div class="cart-item">


					<img src="../image/bed/bed-white-long.jfif" class="product-img" >
					
					</div>
				<div>

					<h4>Queen bed</h4>

					<h5>$60</h5>

					<span class="remove-item">Remove</span>

				</div>

	
<!----------end cart item --------->

		
			<div>

				<i class="fa fa-chevron-up"></i>

				<p class="item-amount">1</p>

			<i class="fa fa-chevron-down"></i>
				
			</div>

			
<!--======== end of cart item =======-->


</div>


	<div class="cart-footer">

		<h3>Your Totol:$ 
			<span class="cart-total">0

			</span>

		</h3>
		
		<button class="clear-cart banner-btn">clear cart</button>

	</div>


	</div>

</div>

</section>

<br><br><br>

<!--------- end of cart ----------->



<!---- various type of cart  ---->




<!------ <script type="text/javascript" src="app.js"></script>
 ---------------------->


<!-- php file where fashion girls banner -->


	 <?php

	include ('woman-fashion-style.php');

	?>
	
<br>


	<?php

	include('our-team.php');

	?>



<!-- client slider -->

<?php

	include('client-slider-panel.php');


?>
<br><br><br><br><br><br>
<!-- footer -->

<?php

include('footer.php');

?>


    
<!-- scroll up button -->

<?php
include('scroll-button.php');
?>

</body>

</html>