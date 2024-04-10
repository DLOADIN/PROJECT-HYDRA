<?php
  require "connection.php";
  if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $check = mysqli_query($con,"SELECT * FROM `admin` WHERE id=$id ");
  $row = mysqli_fetch_array($check);
  }
  else{
  header('location:loginadmin.php');
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/Capture.JPG" type="image/x-icon" class="link">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/14ff3ea278.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./CSS/website.css">
  <title>HOME PAGE</title>
</head>
<body>
  <div class="full-gravity">
    <div class="dribble">
      <img src="./images/Captured.JPG" alt="">
      <div class="grapple">
        <form action="" method="post">
          <input type="text" placeholder="ALL Categories">
          <button>SEARCH</button>
        </form>
      </div>
      <div class="grapple">
        <div class="grappled">
          <ion-icon name="person-circle-outline"></ion-icon>
        </div>
        <div class="grappled">
          <h2>SUPPORT</h2>
        <h3>0789059405/0786394551</h3>
        </div>
        
      </div>
    </div>
    <div class="gravel">
      <ul>
        <li>
          <a href="#">HOME</a>
        </li>
        <li>
          <a href="#UNCHOSEN">MISSION</a>
        </li>
        <li>
          <a href="#categories">CATEGORIES</a>
        </li>
        <li>
          <a href="#services">SERVICES</a>
        </li>
        <li>
          <a href="#partners">PARTNERS</a>
        </li>
        <li>
          <a href="loginadmin.php">ADMIN</a>
        </li>
        <li>
          <a href="users/loginuser.php">LOGIN</a>
        </li>
      </ul>
    </div><div class="home-dot">
      <div class="text">
    <p class="fired">fire extinguisher</p>
    <h1>For Sale &<br> We refill</h1>
    <p class="firedd">Co2: 3 - 50kg</p>
    <h4 class="fired">Powder: 0.5 - 50kg</h4>
    <button>
      <a href="users/registrationuser.php">
      SHOP NOW</a></button></div>
  </div>
  <div class="safari" id="UNCHOSEN">
  <h4 class="all-my-life">
    SOFARU HARDWARE has become one of the top hardware shops in Kigali with 30 years of<BR>
experience in construction, electrical, and Plumbing Materials & Wall Master.
  </h4>
  <div class="unchosen">
    <div class="mission">
    <h4>
      MISSION
    </h4>
    <P>
      Our mission is to promote essential components of an <br>organization's identity and purpose.
    </P></div>
    <div class="mission">
    <h4>
      Vision
    </h4>
    <P>
      Our mission is to promote essential components of an <br>organization's identity and purpose.
    </P>
  </div>
  </div>
</div>
<h1 id="categories" class="categories-1">TOP CATEGORIES</h1>
  <div class="categories">
    <div class="cause">
      <div class="just-cause">
      <img src="./images/hammer.jpeg" alt="">
      <div class="texto">
      <h1> Makita Tools- Corded</h1>
      <p>Hammer Drill</p>
      <p>Vacuum Cleaner</p>
      <p>Rotary Hammer</p>
      <p>Angle glinder</p>
    </div>
      </div>
    </div>

    <div class="cause">
      <div class="just-cause">
      <img src="./images/Cordless chain saw.jpeg" alt="">
      <div class="texto">
      <h1> Makita Tools- Cordless</h1>
      <p>Angle grinder</p>
      <p>Cordless chain saw</p>
      <p>Pressure Washer</p>
      <p>hammer driver drill</p>
    </div>
      </div>
    </div>

    <div class="cause">
      <div class="just-cause">
      <img src="./images/Cut-off wheel.jpeg" alt="">
      <div class="texto">
      <h1>Accessories</h1>
      <p>Abrasive belt</p>
      <p>Bim hole saw</p>
      <p>Cut-off wheel</p>
      <p>Center Caps</p>
    </div>
      </div>
    </div>

    <div class="cause">
      <div class="just-cause">
      <img src="./images/Miniature Circuit Breakers.jpeg" alt="">
      <div class="texto">
      <h1>Safety Equipments</h1>
      <p>Fire extinguishers</p>
      <p>Fire blanket</p>
      <p>Safety jacket | helmet | shoes</p>
      <p>Fire ball</p>
    </div>
      </div>
    </div>

    <div class="cause">
      <div class="just-cause">
      <img src="./images/Fire extinguishers.jpeg" alt="">
      <div class="texto">
      <h1>Construction Tools</h1>
      <p>Wires for fence</p>
      <p>Tiles</p>
      <p>Construction Plastic Roll</p>
      <p>Construction Scaffolding Net</p>
    </div>
      </div>
    </div>

    <div class="cause">
      <div class="just-cause">
      <img src="./images/Led Home & Street Light.jpeg" alt="">
      <div class="texto">
      <h1>Electrical Tools</h1>
      <p>Miniature Circuit Breakers</p>
      <p>Back up UPS</p>
      <p>Contactors & Thermal
        Relays</p>
      <p>Led Home & Street Light</p>
    </div>
      </div>
    </div>
  </div>
  <div class="toil">
    <div class="toil-1">
      <p class="paint">
        Professional Tools<br>
        & DIY equipment</p>
      <p class="pain">
        Just for your needs</p>
        <button>
          <a href="users/registrationuser.php">
          SHOP NOW</a></button>
    </div>
    <div class="toil-2">
      <p class="paint">
        Plumbing materials <br>
& Bathroom sets</p>
      <p class="pain-2">
        tiles tubs, toilet… Off</p>
        <button>
          <a href="users/registrationuser.php">
          SHOP NOW</a></button>
    </div>
  </div>
  <h1 class="categories-1" id="services">OTHER SERVICES</h1><br><br>
  <div class="division">
    <div class="div">
      <h2>Fire Extinguisher Refill</h2>
      <hr><br>
      <p>
        Existing water, foam and powder extinguishers <br>
can potentially be refilled,not replaced.
      </p>
    </div>
    <div class="div">
      <h2>Transportation</h2>
      <hr><br>
      <p>
        We offer land transport service and tailor-made <br>
distribution services across the entire African region.
      </p>
    </div>
    <div class="div">
      <h2>Service Center for all Makita machines</h2>
      <hr><br>
      <p>
        We provide repair services or provide maintenance for all <br>
Makita products in Rwanda.
      </p>
    </div>
  </div>

  <div class="foil">
    <h3>
      Live.Excel.Enjoy
    </h3>
    <button>
      <a href="users/registrationuser.php">
      SHOP NOW</a></button>
  </div><br><br>

  <h1 class="categories-1" id="partners">PARTNERS</h1><br><br>
  <div class="fat">
    <div class="fat-1">
      <img src="./images/ff2a89dd1efe38d99fd4f9acb210e519.jpg" alt="">
    </div>
    <div class="fat-1">
      <img src="./images/gacia-ensure-your-safety-200.png" alt="">
    </div>
    <div class="fat-1">
      <img src="./images/sassin.png" alt="">
    </div>
  </div>
  <footer>
    <div class="divident">
    <div class="dare">
      <i class="fa-solid fa-address-book"></i>
      <div class="talk">
        <h4>KN 1 Rd 48, Kigali</h4>
        <h5>Muhima road, P.O BOX:3290</h5>
      </div>
    </div>
    <div class="vl"></div>
    <div class="dare">
      <i class="fa-solid fa-recycle"></i>
      <div class="talk">
        <h4>Repair & maintenance</h4>
        <h5>If goods have problems</h5>
      </div>
    </div>
    <div class="vl"></div>
    <div class="dare">
      <i class="fa-solid fa-envelope"></i>
      <div class="talk">
        <h4>Get In touch</h4>
        <h5>info@bafraco.com</h5>
      </div>
    </div>
    <div class="vl"></div>
    <div class="dare">
      <i class="fa-solid fa-comments"></i>
      <div class="talk">
        <h4>KN 1 Rd 48, Kigali</h4>
        <h5>0789059405 | 0786394551</h5>
      </div>
    </div>
    </div>
    <hr class="hr-hr">
    <div class="divident">
      <div class="dividends">
      <h3>Our brands</h3><br>
      <p>Makita</p>
      <p>Sassin</p>
      <p>Gacia</p>
      </div>
      <div class="dividends">
      <h3>Our brands</h3><br>
      <p>About Sofaru</p>
      <p>Shop</p>
      <p>Our gallery</p>
      <p>Contact us</p>
      </div>
      <div class="dividends">
      <h3>User Guidelines</h3><br>
      <p>Policy</p>
      <p>Terms & Conditions</p>
      <p>FAQs</p>
      </div>
      <div class="dividends">
      <h3>We use safe payments</h3><br>
      <p>
        <img src="./images/mtn-momo-1024x576.jpg" alt="">
      </p>
      <p>*182*8*1*077780#</p>
      </div>
    </div>
    <hr class="hr-hr">
    <div class="divident">
      <h4 class="©-2023">© 2024 Bafraco Ltd. All Rights Reserved.</h4><br>
  </footer>
  </div>
</body>
</html>