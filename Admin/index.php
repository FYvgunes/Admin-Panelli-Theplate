<?php include 'header.php'; 
 include'Sliderbar.php';
if(!isset($_SESSION['kadi'])){
    header('location:Login.php');
}



  ?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">ADMİN PANELİNE HOŞ GELDİNİZ</h1>
                <h1 class="page-subhead-line">Bütün işlemlerinizi bu panel üzerinden yapabilirsiniz </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        
    </div>
    <!-- /. PAGE INNER  -->
</div>



<?php include 'footer.php' ?>


