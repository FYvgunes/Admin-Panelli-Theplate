<?php include 'header.php'; ?>
<?php include'Sliderbar.php'; ?>

<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">AYARLAR PANELİ</h1>


        <?php 
        if($_GET['durum']=="ok"){?>
          <h1 style="color:green; font-weight: 700" class="page-subhead-line">Kayıtlarınız başarı ile güncellendi </h1>

        <?php  } elseif($_GET['durum']=="no") { ?>
          <h1 style="color:red; font-weight: 700" class="page-subhead-line">Kayıtlarınız Güncellenemedi</h1>

        <?php } else{ ?>
         <h1 class="page-subhead-line">Ayarlar sekmesinde istediğiniz ayarı değiştirebilirsiniz</h1>

       <?php } ?>



     </div>
   </div>
   <div class="col-md-6">
    <form action="netting/islem.php" method="post">
     <div class="form-group">
       <label>Telefon</label>
       <input class="form-control" type="text" name="Ayar_Telefon" value="<?php echo $sonuc['Ayar_Telefon'] ?>">
     </div>
     <div class="form-group">
       <label>Ayar Başlık</label>
       <input class="form-control" type="text" name="Ayar_Title" value="<?php echo $sonuc['Ayar_Title'] ?>">
     </div>
     <div class="form-group">
       <label>Ayar Açıklama</label>
       <input class="form-control" type="text" name="Aya_Description" value="<?php echo $sonuc['Aya_Description'] ?>">
     </div>
     <div class="form-group">
       <label>Etiketler</label>
       <input class="form-control" type="text" name="Ayar_Keywords" value="<?php echo $sonuc['Ayar_Keywords'] ?>">
     </div>
     <div class="form-group">
       <label>Footer</label>
       <input class="form-control" type="text" name="Ayar_footer" value="<?php echo $sonuc['Ayar_footer'] ?>">
     </div>
     <div class="form-group">
       <label>Adres</label>
       <input class="form-control" type="text" name="Ayar_Adres" value="<?php echo $sonuc['Ayar_Adres'] ?>">
     </div>
     <div class="form-group">
       <label>E-Posta</label>
       <input class="form-control" type="text" name="Ayar_mail" value="<?php echo $sonuc['Ayar_mail'] ?>">
     </div>

     <div class="col-md-6">
       <div class="form-group">
         <button style="width: 100%;" name="ayarkaydet" value="Ayarları kaydet" type="submit" class="btn btn-success">Güncelle</button>
       </div>
     </div>
   </div>


 </form>
 <!-- /. ROW  -->

</div>
<!-- /. PAGE INNER  -->



</div>



<?php include 'footer.php' ?>