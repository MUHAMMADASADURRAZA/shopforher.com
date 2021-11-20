<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/
session_start();
include('connect.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($conn,"SELECT * FROM `product01` WHERE `id`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['title'];
$code = $row['id'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'title'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>

<html>
<head>
<title>mascara</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Daily Shop | Home</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    
</head>
<body>
<!-- <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div>  -->
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>   -->
    <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="img/flag/english.jpg" alt="english flag">ENGLISH
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><img src="img/flag/french.jpg" alt="">FRENCH</a></li>
                      <li><a href="#"><img src="img/flag/english.jpg" alt="">ENGLISH</a></li>
                 

                    </ul>
                  </div>
                </div>
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-usd"></i>USD
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                      <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>0307-0657703</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                
                  
                  <li class="hidden-xs"><a href="cart.php">My Cart</a></li>
                
                  <li><a href="" data-toggle="modal" data-target="#ln">Login</a></li>
    <li><a  href="#features-sec"  data-toggle="modal" data-target="#su">Register now!</a></ii>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.html">
                  <span class="fa fa-shopping-cart"></span>
                  <p>W<strong>omens</strong><strong></strong> C<strong>omestics</strong> O<strong>line</strong> S<strong>tore</strong>  <span>Her Comestics Center</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
               <?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
  <div class="aa-cartbox">
              <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <a href="cart.php"><span class="aa-cart-title">SHOPPING CART </span><span><?php echo $cart_count; ?></span></a>
                
                 
                </a>
                
              </div>

<?php
}?>
      <div class="aa-search-box">
             <form  method="post" action="">
                  <input type="text" name="search" id="" placeholder="Search here ">
                  <button type="submit" name="searchbox"><span class="fa fa-search"></span></span></button>
                </form>
              </div>
              <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->

              <!-- Tab panes -->
              
              <div class="tab-content">
                
          
               
                  
                  <?php
               if(isset($_POST['searchbox']))
               {
                   
                 $str = mysqli_real_escape_string($conn,$_POST['search']);
                $sql ="SELECT * FROM `product01` WHERE title like '%$str%' or desription like '%$str%' or category like '%$str%' ";
                $res=mysqli_query($conn,$sql);
                if(mysqli_num_rows($res)>0)
                {
                  while($row = mysqli_fetch_assoc($res)){
                      echo "<div class='tab-pane fade in active'>
                                  <ul class='aa-product-catg'>
                          <form method='post' action=''>
                                <li>
                                <figure>
                                <input type='hidden' name='code' value=".$row['id']." />
                          <div class='aa-product-img'><img src='".$row['image']."' /></div>
                          <div class='aa-product-title'>".$row['title']."</div>
                        
                  
                             <div class='aa-product-price'>$".$row['price']."</div>
                          <button type='submit' class='aa-add-card-btn'> <span class='fa fa-shopping-cart' style='width:200px;'></span>Buy Now</button>
                                </figure>
                                </li>
                          </form>
                                </ul>
                             </div>";
                          }
                }
                else
                {
                    echo "No data found";
                }
               }
                 ?>
               
              
            </div>
          </div> 
        </div>
      </div>
    </div>
              <!-- <div style="clear:both;"></div>


              <!-- / cart box -->
              <!-- search box -->
              <!-- <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Search here for 'Womens Comestics ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              / search box -->             
            <!-- </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              
              <li><a href="#">Womens Comestics <span class="caret"></span></a>
                <!-- <ul class="dropdown-menu">  
                  <li><a href="#">Kurta & Kurti</a></li>                                                                
                  <li><a href="#">Trousers</a></li>              
                  <li><a href="#">Casual</a></li>
                  <li><a href="#">Sports</a></li>
                  <li><a href="#">Formal</a></li>                
                  <li><a href="#">Sarees</a></li>
                  <li><a href="#">Shoes</a></li>
                  <li><a href="#">And more.. <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Sleep Wear</a></li>
                      <li><a href="#">Sandals</a></li>
                      <li><a href="#">Loafers</a></li>
                      <li><a href="#">And more.. <span class="caret"></span></a>
                        
                      </li>                   
                    </ul>
                  </li>
                </ul> -->
              </li>
              
            
              <li><a href="contact.php">Contact</a></li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/Moisturizer.jpg" alt="Men slide img" />
              </div>
              <div class="seq-title">
                         
                <h2 data-seq>Mens Moisturizer collection</h2>                
               
                <a data-seq href="moisturizer.php" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/Scrub.jpg" alt="Wristwatch slide img" />
              </div>
              <div class="seq-title">
                
                <h2 data-seq> Exclusive Mens Scrub collections </h2>                
               
                <a data-seq href="Scrub.php" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/Aftershave.jpg" alt="Women Jeans slide img" />
              </div>
              <div class="seq-title">
                          
                <h2 data-seq>Mens  Aftershave Collection</h2>                
               
                <a data-seq href="Aftershave.php" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->           
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/Stick.jpg" alt="Shoes slide img" />
              </div>
              <div class="seq-title">
                        
                <h2 data-seq>Exclusive Chap Stick/Lip Balm for Mens</h2>                
             
                <a data-seq href="stick.php" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->  
             <li>
              <div class="seq-model">
                <img data-seq src="img/slider/Sunscreen.jpg" alt="Male Female slide img" />
              </div>
              <div class="seq-title">
                              
                <h2 data-seq>Best Sunscreen for Mens</h2>                
              
                <a data-seq href="Sunscreen.php" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>                   
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
    <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">                    
                    <img src="img/face_poweder.jpg" alt="img">                    
                    <div class="aa-prom-content">
                     
                      <h4><a href="facepowder.php">Face Powder</a></h4>                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/Lipstick.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        
                        <h4><a href="lipstick.php">Lipstick</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/foundation.jpeg" alt="img">                      
                      <div class="aa-prom-content">
                      
                        <h4><a href="foundation.php">Foundations</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/iliner.jpg" alt="img">                      
                      <div class="aa-prom-content">
                       
                        <h4><a href="iliner.php">Iliner</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/maskara.jpg" alt="img" >                      
                      <div class="aa-prom-content">
                      <br>
                        <h4><a href="mascar.php">Mascara</a></h4>                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->

              <!-- Tab panes -->
              
              <div class="tab-content">
 


<?php


$result = mysqli_query($conn,"SELECT * FROM `product01` WHERE `category`='moisturizer'");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='tab-pane fade in active'>
                <ul class='aa-product-catg'>
			  <form method='post' action=''>
              <li>
              <figure>
			  <input type='hidden' name='code' value=".$row['id']." />
			  <div class='aa-product-img'><img src='".$row['image']."' /></div>
			  <div class='aa-product-title'>".$row['title']."</div>
			

		   	  <div class='aa-product-price'>$".$row['price']."</div>
			  <button type='submit' class='aa-add-card-btn'> <span class='fa fa-shopping-cart' style='width:200px;'></span>Buy Now</button>
              </figure>
              </li>
			  </form>
              </ul>
		   	  </div>";
        }
mysqli_close($conn);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<br /><br />

</div>
          </div> 
        </div>
      </div>
    </div>
    <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          
          <div class="aa-footer-top-area">
            <div class="row">
            <div class="col-md-2 col-sm-6">
                <div class="aa-footer-widget">
                  <h3></h3>
                 
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Main Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Our Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
              </div>
             
             
              <div class="col-md-4 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                      <p> aptechLearning NN</p>
                      <p><span class="fa fa-phone"></span>0307-0657703</p>
                      <p><span class="fa fa-envelope"></span>muhammadasaad561.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="https://www.youtube.com/"><span class="fa fa-youtube"></span></a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Designed by <a href="asad.html">Asad.com</a></p>
           
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 
</body>
</html>