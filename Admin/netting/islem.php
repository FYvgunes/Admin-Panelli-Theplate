<?php 

include 'Baglan.php';

if(empty($ayarkaydet))
{


	$id = 1;

	$ayarguncelle = $conn ->exec("UPDATE Ayarlar set Ayar_Telefon='".$_POST['Ayar_Telefon']."',Ayar_Title='".$_POST['Ayar_Title']."',Aya_Description='".$_POST['Aya_Description']."',Ayar_Keywords='".$_POST['Ayar_Keywords']."',Ayar_footer='".$_POST['Ayar_footer']."',Ayar_Adres='".$_POST['Ayar_Adres']."',Ayar_mail='".$_POST['Ayar_mail']."' where Ayar_id='$id' ");
	//$ayarguncelle -> execute();

	if($ayarguncelle)
	{
		
		header("location:../Ayarlar.php?durum=ok");
	}
	else
	{
		header("location:../Ayarlar.php?durum=no");

	}
}


if(isset($_POST['loggin'])){
	
	$Admin_adi=$_POST['admin_adi'];
	$Admin_sifre =$_POST['admin_sifre'];


	if($Admin_adi && $Admin_sifre)
	{
		$sorgula = $conn ->query("SELECT * FROM Admin Where Admin_adi='$Admin_adi' and Admin_sifre='$Admin_sifre'", PDO::FETCH_ASSOC);
		$verisay = $sorgula->rowCount();


		if($verisay>0)
		{
			$_SESSION['Admin_adi']=$Admin_adi;
			header('location:../index.php');

		}
		else
		{
			header('location:../Login.php?login=no');
		}
	}


}





?>