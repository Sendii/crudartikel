<?php
try {
    $koneksi = new PDO("mysql:host=localhost;port=3306;dbname=jomb","root","pelangibaru");
    //echo "koneksi berhasil";

    }catch(PDOException $e)
    {
    echo $e->getMessage();
    }
$id = $_GET['id'];

$data = $koneksi->prepare("SELECT * FROM login WHERE id='$id'");
$data->execute();
$row = $data->fetch(PDO::FETCH_OBJ);

// print_r($row);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Article Update</title>
</head>
<body bgcolor="cyan">
<font color="red" size="4">
<center>Your Account<hr>
    <form method="POST" action="updateadmin.php">
    <input type="hidden" name="id" value="<?=$row->id;?>">
        <table>
        <tr>
        <div>

            <td>Username user: <input type="text" name="username" style="width:450px;" placeholder="Username" value="<?=$row->username;?>" required></td>
        </tr>
        <tr>
            <td>Password user: <textarea name="password" placeholder="Password User" required style="width:450px;height:50px;" ><?=$row->password;?> </textarea></td>
        </tr>
        <tr>
                <td><button type="submit" name="submit">Submit</button></td>
            </tr>

            </div>
        </tr>
    </table>
</form>
</center>
</body>
</html>