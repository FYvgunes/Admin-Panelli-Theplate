
<?php 
include 'netting/Baglan.php';
session_start();
$sorgu = $conn ->query("SELECT * FROM Admin");
$sonuc = $sorgu->fetch(PDO::PARAM_INT);

?>
<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="assets/img/user.png" class="img-thumbnail" />

                    <div class="inner-text">
                     Hoşgeldin <?php  echo $_SESSION['Admin_adi']; ?>
                        <br />
                        <small>Last Login : 2 Weeks Ago </small>
                    </div>
                </div>

            </li>


            <li>
                <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Anasayfa</a>
            </li>
            <li>
                <a class="menu" href="Ayarlar.php"><i class="fa fa-dashboard "></i>Ayarlar</a>
            </li>

            
        </ul>

    </div>

</nav>
        <!-- /. NAV SIDE  -->