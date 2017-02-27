<?php
try {
    $koneksi = new PDO("mysql:host=localhost;port=3306;dbname=jomb;","root","pelangibaru");
    //echo "koneksi berhasil";

    }catch(PDOException $e)
    {
    echo $e->GetMessage();
    }

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $id = $_POST['id'];
 
        $sql = "UPDATE `login` SET `username`='$username',`password` = '$password' WHERE `login`.`id`='$id'";
        $ins = $koneksi->prepare($sql);
        $r = $ins->execute();
        if ($r) {
            header("location:indexuser.php");
        }else{
            echo "gagal";
        }
       
    }
?>
