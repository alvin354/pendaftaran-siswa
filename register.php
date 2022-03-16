<?php
require_once 'koneksi.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $username = $_POST['username']; 
    $password = md5($_POST['password']);

    $email = $_POST['email'];

    $email_password = md5($_POST['email_password']);


    $regis = mysqli_query($koneksi,"
    INSERT INTO 
    `tb_user` (`id`, `username`, `password`, `email`, `email_password`, `level`) 
    VALUES (
        NULL, 
        '$username', 
        '$password', 
        '$email', 
        '$email_password', 
        'siswa');");

    if ($regis) {
        echo "<script>alert('Berhasil Mendaftar Silahkan Login')</script>";
    }   
    else{
        echo "<script>alert('Kesalahan')</script>";
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        
.box-login{
  width: 70%;
  margin: auto;
  margin-top: 100px;
  /* background-color: red; */
}

.box-login .tittle{
  text-align: center;
  font-weight: bold;
  font-size: 40px;
}

.form-group label{
    color: #94979A;
    margin: 0 10%;
    font-size: 18px;
    font-weight: bolder;
}

.form-group input{
  background-color: #D4D4D4;
  color: #000;
  font-size: 20px;
  border: none;
  height: 35px;
  width: 60%;
  padding: 5px 20px;
  border-radius: 20px;
  margin: 10px 0;
}

.btn-login{
  margin-top: 40px;
  justify-content: center;
  display: flex;
}
.btn-login button, .btn-login a{
  background-color: #635F5E;
  border: none;
  width: 200px;
  text-align: center;
  border-radius: 30px;
  margin: 0 10%;
  padding: 10px;
  color: white;
  font-size: 25px;
}



    </style>
</head>
<body>

<div class="container">
    
    <div>
        <?php include_once 'header.php' ?>
    </div>

    <form action="" method="post">
        
    <div class="box-login">
    <h2 class="tittle">Register</h2>
        
        <table style="width: 100%">
            <tr class="form-group">
                <td>
                    <label for="">Username</label>
                </td>
                <td>
                    <input required type="text" name="username" id="">
                </td>
            </tr>
            
            <tr class="form-group">
                <td>
                    <label for="">Password</label>
                </td>
                <td>
                    <input required type="password" name="password" id="">
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    <label for="">E-mail</label>
                </td>
                <td>
                    <input required type="text" name="email" id="">
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    <label for="">Password E-mail</label>
                </td>
                <td>
                    <input required type="password" name="email_password" id="">
                </td>
            </tr>
        </table>
        <div class="form-group">
        </div>
        

        <div class="btn-login">
            <button type="submit">Daftar</button>
            <button type="submit"> <a href="index.php"> Login</a></button>
        </div>
    </div>
    </form>

</div>
    
</body>
</html>