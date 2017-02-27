<?php
session_start();
if(!isset($_SESSION['username'])) {
	header('location:admin.php');
}
else {
	$username = $_SESSION['username'];
}
try {
	$koneksi = new PDO("mysql:host=localhost;port=3306;dbname=jomb","root","pelangibaru");
	//echo "koneksi berhasil";

	}catch(PDOException $e)
	{
	echo $e->getMessage();
	}
$hasil = $koneksi->prepare("SELECT * FROM login");
$hasil->execute();
$data = $hasil->fetchAll();

function excerpt($string){
                $string = substr($string, 0, 250);
                return $string . "...";
            }
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/indexstyle.css">
	<title></title>
	<style>
	body {
		background-color:green; 
		margin: 0 auto;

	}
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: yellow;
    font-size: 1.5rem;
    text-align: center;
    padding: 10px 1px;
    text-decoration: none;
}
</style>
</head>
<body>
	<ul>
  <li style="margin-left: 85%;"><a href="logoutadmin.php">Logout Admin!</a></li>
</ul>
<br>
<center><h1>User Email dan Password</h1></center>
<br>
<?php

foreach ($data as $key) {

?>
<div class="container">

	<div class="div-card" style="width:100%;">
	<div class="div-pri-content">
	<font color="yellow" font-size:4;>
	<div><p>Email user: <?= $key['username']?></p></div>
	<hr>
	<div style="display:block;width:100%;">Password user: <?= $key['password']?></div></font>
	<br>
</div>
<table style="width:100%;color: #fff; background-color: #616161">
	<tr>
		<td><a class="buttons" href="edituser.php?id=<?=$key['id'];?>">Edit User</a></td>
		<td><a class="buttons" <a onclick="return confirm('Yakin ingin Menghapus User dengan email <?=$key['username'];?> ?')" href="deleteuser.php?id=<?=$key['id'];?>">Delete</a></td>
		</tr>
		</table>
		</div>
		</div>
		<br>
	<?php
}
?>
	</body>
</html>