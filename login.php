<?php
//cek tombol submit
if (isset($_POST["submit"])){


//cek username & password
if ($_POST["username"]== "admin"&& $_POST ["password"]== "123"){


//jika benar,redirect ke halaman admin
header("Location: admin.php");
exit:

}else
//jika salah ,pesan error
$error = true;


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login</title>
</head>
<body>
    <h1>login admin</h1>
    <?php if (isset($error)): ?>
    <p style="color: red; front-style: italic;"> username / password Anda salah</p>
    <?php endif; ?>
    <ul>
        <form action=""method= "POST"">
        <li>
            <label for="username">username :</label>
            <input type="text"name= "username" id= "username">
        </li>
        <li>
            <label for="password">password :</label>
            <input type="password"name= "password" id= "password">
        </li>
        <li>
            <button type= "submit" name= "submit" >login</button>
        </li>
    
    
    
    </form>
    </ul>
    
</body>
</html>