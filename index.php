
<!DOCTYPE html>
<html lang="en">

<head>
  <title>GSO</title>
  ]<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 <!----------bootstrap---------->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!----------style sheet ---------->
  <script type="text/javaScript" src="Javascript/script.js"></script>
  <link rel="stylesheet" type="text/css" href="Styles/newStyle.css" />
</head>

<body>

<!----------nav bar---------->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" style="background-color: blue;">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li><a href="GroceryStore-1.html">Home</a></li>

            <li><a href="#">Aisles</a>
                <ul>
                    <li><a href="PHP/Fruits and vegetables.php">Fruits and Vegetables</a></li>
                    <li><a href="PHP/Meat.php">Meat</a></li>
                    <li><a href="PHP/Dairy.php">Dairy</a></li>
                    <li><a href="PHP/Bread.php">Bread</a></li>
                    <li><a href="PHP/drinks.php">Drinks</a></li>
                    <li><a href="PHP/pasta.php">Pasta</a></li>
                   </li>
                  </ul>

        <li><a href="#">Account</a>
            <ul>
                <li><a href="PHP/SignUp.php">Sign up</a></li>
                <li><a href="PHP/SignIn.php">Sign in</a></li>
            </ul>
        </ul>
    </div>

    <a href="PHP/ShoppingCart.php"><img src="Media/cart_logo.png" alt="Shopping Cart" width="50px" height="50px"
            style="float:right"></a>

</nav>
<!--------------header--------------->
<div class="banner-area">
  <h1 style="margin-top:0mm;color:rgb(107, 104, 104); font-size:80px;font-style:italic; font-weight:bold; margin-right:1cm;">
    GSO</h1>
  <h1 style="margin-top:0mm;color:rgb(107, 104, 104); font-size: 20px;font-style:italic; font-weight:bold; margin-right:1cm;">Fastest Online Grocery Store</h1>
  
</div>
<div class="content-area">
  <div class="wrapper">
  </div>

<!------featured aisles--------->
<h2 class="aisles">Aisles</h2>
<div class=" justify-content-md-center row">
  <div class="col-md-auto">
      <div class="fandv-aisle">
        <a href="PHP/Fruits and vegetables.php">        
              <img src="Media/pexels-mark-stebnicki-2255935.jpg" alt="aisle 1" style="width:100%">
            </a>
      </div>
    </div>
       <div class="col-md-auto">
        <div class="bread-aisle">
          <a href="PHP/Bread.php">
              <img src="Media/pexels-markus-spiske-1871024.jpg" alt="aisle 2" style="width:100%">
            </a>
     </div>
    </div>
     <div class="col-md-auto">
      <div class="meat-aisle">
        <a href="PHP/Meat.php">
              <img src="Media/pexels-matheus-gomes-2491273.jpg" alt="aisle 3" style="width:100%">
            </a>
      </div>
    </div> 
    <div class="col-md-auto">
      <div class="dairy-frontpage">
        <a href="PHP/Dairy.php">
              <img src="Media/pexels-pixabay-248412.jpg" alt="aisle 4" style="width:100%">
            </a>
      </div>
    </div> 
</div>
<!-----etra categories----->

<div class="justify-content-md-center d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">

    <div class="col-lg-auto">
      
        <div class="extra-aisle1 ">
          <a href="PHP/pasta.php">      
                <img src="Media/pexels-klaus-nielsen-6287446.jpg" alt="pasta aisle " style="width:100%">
              </a>
    
      </div>
    </div>
    <div class="col-lg-auto">
      <div class="extra-aisle2">
        <a href="PHP/drinks.php">
            <img src="Media/pexels-breakingpic-3008.jpg" alt="drinks aisle " style="width:100%">
          </a>
   </div>
    </div>
</div>


<!----------weekly deals----------->

<h2 class="weeklydeals">Weekly Deals</h2>
  <div class=" justify-content-md-center row">
  <div class="col-md-auto">
<div class="orangedeals">
  <a href="PHP/orange.php">
    <img src="Media/pexels-suzy-hazelwood-1937743.jpg" alt="Oranges" style="width:100%">
  </a>
    <h4>Oranges</h4>
    <p>$5.50</p>
  </div>
  </div>
  <div class="col-md-auto">
    <div class="lambdeals">
      <a href="PHP/rackOfLamb.php">
    <img src="Media/pexels-pascal-claivaz-410648.jpg" alt="lamb" style="width:100%">
  </a>
    <h4>Lamb</h4>
    <p>$55.00</p>
  </div>
  </div>
  <div class="col-md-auto">
    <div class="pitadeals">
      <a href="PHP/pitas.php">
    <img src="Media/pexels-karolina-grabowska-4495758.jpg" alt="pita" style="width:100%">
  </a>
    <h4>Pita Bread</h4>
    <p>$3.50</p>
  </div>
  </div>
  <div class="col-md-auto">
    <div class="yogurtdeals">
      <a href="PHP/yogurt.php">
    <img src="Media/yogurt.jpg" alt="yogurt" style="width:100%">
  </a>
    <h4>Yogurt</h4>
    <p>$5.00</p>
  </div>
  </div>
</div>

<!-------email subscription-------->
<div class="container shadow-lg pt-4 pb-3 pt-2 mt-4 w-75 text-center border rounded-pill">
  <form class="row">
    <div class="col">
      <label for="email" class="lead">Enter your email to receive notifications on deals!&nbsp
        <input type="email" name="email" id="emailSub" class="col-12 col-md-3">
  <button class="btn btn-outline-warning m-2" onclick="checkSub();">Submit</button>
      </label>
    </div>
  </form>
</div>

<!---------footer----------->
<footer class="container py-4">
  <div class="row">
    <div class="col-12 col-md">
      <small class="d-block mb-3 text-muted">&copy; 2021-2022 </br> </small>
    <ul class="list-unstyled text-small">
        
    </div>
    <div class="col-6 col-md">
      <h5>Team</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted">Fatema Akther</a></li>
        <li><a class="text-muted">Julie Trinh</a></li>
        <li><a class="text-muted">Jasmit Kalsi</a></li>
        <li><a class="text-muted">Dzmitry Fiodarau</a></li>
        <li><a class="text-muted">Alice Chen</a></li>
        <li><a class="text-muted">Georgia Pitic</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Promotions</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted">Newsletter</a></li>
        <li><a class="text-muted">Gift cards</a></li>
        <li><a class="text-muted">Contests</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a href="PHP/Contact Us.php" class="text-muted">Contact us</a></li>
        <li><a class="text-muted">Our story</a></li>
        <li><a class="text-muted">FAQ</a></li>
      </ul>
    </div>
  </div>
</footer>

</body>

</html>

