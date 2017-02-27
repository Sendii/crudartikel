<?php

try {
	$koneksi = new PDO("mysql:host=localhost;port=3306;dbname=jomb","root","pelangibaru");
	//echo "koneksi berhasil";

	}catch(PDOException $e)
	{
	echo $e->getMessage();
	}
	$id = $_GET['id'];

$data = $koneksi->prepare("DELETE FROM login WHERE id='$id'");
$del = $data->execute();

if($del) {
			header("location:indexuser.php");
		}else 
		{
			echo("gagal");
		}
?>