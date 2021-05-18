<!DOCTYPE html>
<html>
  <title>WeLoveMaMa</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
      body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
  </style>

  <body class="w3-blue-grey w3-content" style="max-width:1600px">
    
    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
      <div class="w3-container">
        <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
          <i class="fa fa-remove"></i>
        </a>
        
        <img src="photo/noodle.jpg" style="width:65%; " class="w3-round">
        <br><br>
        <h4><b>MENU</b></h4>
      </div>

      <div class="w3-bar-block">
        <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>BRAND</a> 
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-credit-card fa-fw w3-margin-right"></i>HOW TO ORDER</a> 
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
      </div>
      <div class="w3-panel w3-large">
        <p> <i class="fa fa-phone w3-hover-opacity"></i>02-123-1234</p>
        
      </div>
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay">

    </div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">

      <!-- Header -->
      <header id="portfolio">
        <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
        <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>

      <!--login +basket-->
        <div class="w3-container">
          <br></br>
        <h1><b>WeLoveMaMa</b></h1>
        <div class="w3-section w3-bottombar w3-padding-16">
          <br></br>
              
              <!--?php
                    if(!isset($_SESSION['customer']) && empty($_SESSION['customer'])) {
                        
                            echo  '<button class="w3-button w3-black" onclick="document.location='login.php'" ><i class="fa fa-user w3-margin-right"></i>Login</button>';
                        
                    } else {
                        echo '<button class="w3-button w3-black" onclick="document.location='login.php'" ><i class="fa fa-user w3-margin-right"></i>Logout</button>';
                    }
?-->
      
          
          
          <button class="w3-button w3-white w3-round-large" onclick="document.location='login.php'" ><i class="fa fa-user w3-margin-right"></i>Login</button>
          
          <button class="w3-button w3-indigo w3-round-large" onclick="document.location='indexbynina.php'" style="float:right;"><i class="fa fa-shopping-basket w3-margin-right"></i>Shopping</button>
        </div>
        </div>
      </header>
      
      <!-- First Photo Grid-->
      <div class="w3-row-padding">
        <h2 style="text-align: center;"><b>Our Product Brands</b></h2>  
        <br></br>
        <div class="w3-third w3-container w3-margin-bottom">
          <img src="photo/nissin.png" alt="nissin" style="width:90%" >
        </div>

        <div class="w3-third w3-container w3-margin-bottom">
          <img src="photo/mama.png" alt="mama" style="width:77%"> 
        </div>

        <div class="w3-third w3-container w3-margin-bottom">
          <img src="photo/waiwai.png" alt="waiwai" style="width:104%" >
        </div>
      </div>
      
      <!-- Second Photo Grid-->
      <div class="w3-row-padding">
        <div class="w3-third w3-container w3-margin-bottom">
          <img src="photo/samyang.png" alt="samyang" style="width:66%" >
        </div>

        <div class="w3-third w3-container w3-margin-bottom">
          <img src="photo/nongshim.png" alt="nongshim" style="width:99.5%"  >
        
        </div>
      </div>
      


      <!-- Images of Me -->
    <div class="w3-row-padding w3-padding-16" id="about">
        <div class="w3-col m6">
          <h1><b>How to order</b></h1>
          <h4> <i class="fa fa-shopping-basket w3-hover-opacity"></i> Click the shopping icon to add products to the cart</h4>
          <h4> <i class="fa fa-list-ol w3-hover-opacity"></i> Managing the product list in your shopping basket</h4>
          <h4> <i class="fa fa-location-arrow w3-hover-opacity"></i> Setting the shipping addresses </h4>
          <h4> <i class="fa fa-money w3-hover-opacity"></i> Choose the payment method </h4>
          <h4> <i class="fa fa-check-circle w3-hover-opacity"></i> Check the process of your payment </h4>
        </div>
      </div>
      <div class="w3-container w3-padding-large" style="margin-bottom:18px">
        <p></p>
      </div>

      
        
      <!-- Contact Section -->
      <div class="w3-container w3-padding-large w3-grey">
        <h3 id="contact"><b>Contact Us</b></h3>
        <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
          <div class="w3-third w3-dark-grey">
            <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
            <p>welovemama@gmail.com</p>
          </div>
          <div class="w3-third w3-teal">
            <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
            <p>Bangkok, Thailand</p>
          </div>
          <div class="w3-third w3-dark-grey">
            <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
            <p>02-123-1234</p>
          </div>
        </div>
      </div>

      <!--Footers-->
      <footer class="w3-container w3-padding-32 w3-dark-grey">
      
      <div class="w3-row-padding">
        <div class="w3-third">
          <h3>History of Instant Noodles</h3>
          <p>Momofuku Ando (1910-2007), a Taiwanese-Japanese inventor and businessman, created the world’s first instant noodles. 
            The brands Top Ramen and Cup Noodles were his. He also founded Nissin Food Products Co., Ltd. 
            Following its defeat in World War 2, Japan fell on hard times. Foods were scarce and citizens had to line up for breads handed out by the American occupation forces. 
            The problem was, bread wasn’t in the Japanese diet. But ramen, or noodle, was.</p>
        </div>
        <div class="w3-third">
          <p>   
            Therefore, Momofuku invented the dried and pre-cook noodles that come in a squared block, with flavoring powder and/or seasoning oil in a small package. Add hot water, grab a pair of chopsticks, and there you have it. </p>
            <h3>Information about us</h3>
            <p>Welovemama is a company of instant noodle retailer.We want to serve the product with love to our customers.</p>
           
        </div>

        <div class="w3-third">
          <h3>POPULAR TAGS</h3>
          <p>
            <span class="w3-tag w3-black w3-margin-bottom">Food</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">MaMa</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">InstantNoodle</span>
            <span class="w3-tag w3-grey w3-small w3-margin-bottom">Bangkok</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Thailand</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Korea</span>
            <span class="w3-tag w3-grey w3-small w3-margin-bottom">Nissin</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">WaiWai</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Samyang</span>
            <span class="w3-tag w3-grey w3-small w3-margin-bottom">Nongshim</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Shopping</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">MonosodiumGlutamate</span>
            <span class="w3-tag w3-grey w3-small w3-margin-bottom">Welovemama</span> 
             <p><a href="#">Powered by PimNinaMae</a></p>
          </p>
        </div>

      </div>
      </footer>
    
      <!-- End page content -->
    </div>
  </body> 
</html>