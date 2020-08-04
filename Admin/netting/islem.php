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


	if(isset($_POST['Login'])){
		$Admin_Adi=$_POST['Admin_Adi'];
		$Admin_sifre =$_POST['Admin_sifre'];


		if($Admin_Adi && $Admin_sifre)
		{
			$sorgula = $conn ->query("SELECT * FROM Admin Where Admin_Adi='$Admin_Adi' and Admin_sifre='$Admin_sifre'", PDO::FETCH_ASSOC);
			$verisay = $sorgula->rowCount();



			if($verisay>0)
			{
				$_SESSION['Admin_Adi']=$Admin_Adi;
				header('location:../index.php');

			}
			else
			{
				header('location:../Login.php?Login=no');
			}
		}


	}




 ?>