<?php 

include 'Baglan.php';

if (isset($_POST['ayarkaydet'])) {
	$id = 1;

	$ayarguncelle = $conn ->prepare("update Ayarlar set Ayar_Telefon='".$_POST['Ayar_Telefon']."',Ayar_Title='".$_POST['Ayar_Title']."',Aya_Description='".$_POST['Aya_Description']."',Ayar_Keywords='".$_POST['Ayar_Keywords']."',Ayar_footer='".$_POST['Ayar_footer']."',Ayar_Adres='".$_POST['Ayar_Adres']."',Ayar_mail='".$_POST['Ayar_mail']."' where Ayar_id='$id' ");

	if($ayarguncelle)
	{
		$ayarguncelle -> execute();
		header("location:../Ayarlar.php");
	}
	else
	{

	}
	
	



	
	



	// if($ayarguncelle ->Affected_rows>0)
	// {
	// 	//header("location:../Ayarlar.php");
	// 	echo "Ayar Güncellendi";

	// }
	// else
	// {
	// 	// 
	// 	echo "ayar güncellnemedi";

	// }
}


 ?>