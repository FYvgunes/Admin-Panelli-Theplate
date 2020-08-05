
<?php 
include 'Admin/netting/Baglan.php';

$sorgu = $conn ->query("SELECT * FROM Ayarlar");
$sonuc = $sorgu->fetch(PDO::PARAM_INT);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $sonuc['Ayar_Title']; ?></title>
  <meta name="description" content="<?php echo $sonuc['Aya_Description'] ?>">
  <meta name="keywords" content="Tamirci Themlate uygulama yaparak php öğreniyorum ">
  <meta name="author" content="Veysel GÜneş">
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
  <script src="js/jquery-1.6.3.min.js"></script>
  <script src="js/cufon-yui.js"></script>
  <script src="js/cufon-replace.js"></script>
  <script src="js/NewsGoth_BT_400.font.js"></script>
  <script src="js/FF-cash.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery.equalheights.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/tms-0.3.js"></script>
  <script src="js/tms_presets.js"></script>
  <script src="js/easyTooltip.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page1">
  <div class="extra">
    <div class="main">
      <!--==============================header=================================-->
      <header>
        <div class="indent">
          <div class="row-top">
            <div class="wrapper">
              <img src="<?php echo $sonuc['Ayar_logo'] ?>" style="margin-top: 30px; margin-left: 20px;" alt="">
              <strong class="support"><?php echo $sonuc['Ayar_Telefon'] ?></strong> </div>
            </div>
            <nav>
              <ul class="menu">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="prices.html">Prices</a></li>
                <li><a href="staff.html">Our Staff</a></li>
                <li class="last"><a href="contacts.html">Contacts</a></li>
              </ul>
            </nav>
          </div>
          <div class="wrapper">
            <div class="slider">
              <ul class="items">
                <li><img src="images/slider-img1.jpg" alt=""></li>
                <li><img src="images/slider-img2.jpg" alt=""></li>
                <li><img src="images/slider-img3.jpg" alt=""></li>
              </ul>
            </div>
            <a class="prev">prev</a> <a class="next">next</a>
            <div class="banner1-bg"></div>
            <div class="banner-1"></div>
          </div>
        </header>