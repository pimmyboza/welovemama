<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       
        <a href="indexbynina.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> Shopping Cart
            </h3>
        </a>
        
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
         >
            <span class="navbar-toggler-icon"></span>
        </button>
       
       <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            My account
                          </a>
                          <div class="dropdown-menu">
                                <a class="dropdown-item" href="displayorder.php">My order</a>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                          </div>
           </li>
        </ul>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
                <div class="navbar-nav">
                <!--พิมเปลี่ยน จิงๆต้อง a href carttestbynina.php-->
                    <a href="cart.php" class="nav-item nav-link active">
                        <h5 class="px-5 cart">
                            <i class="fas fa-shopping-cart"></i> Cart
                            
                            <?php
                            if (isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                            } else{
                                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                            }
                            ?>
    
                        </h5>
                    </a>
            </div>
        </div>

    </nav>
</header>


