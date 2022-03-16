<?php

require_once 'koneksi.php';
session_start();

if (isset($_SESSION['level'])) {
    if ($_SESSION['level'] == "admin") {
        header("location: admin/index.php?alert=auto_login");
    }
    else if($_SESSION['level'] == "siswa"){
        header("location: siswa/index.php?alert=auto_login");
    }
}




if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $username = $_POST['username']; 
    $password = $_POST['password'];

    $login = mysqli_query($koneksi,"CALL login('$username', '$password');");
    $user = mysqli_num_rows($login);
  
    if ($user>0) {
      
            $data = mysqli_fetch_assoc($login);
            $_SESSION['token'] = md5($data['id']);
            $_SESSION['id'] = $data['id'];
            $_SESSION['level'] = $data['level'];

            if ($data['level'] == "siswa") {
                // echo "<script>alert('success')</script>";
                header("location: siswa/index.php?alert=masuk_siswa");
        
            }
            elseif($data['level'] == "admin"){
                header("location: admin/index.php?alert=masuk_admin");
            }
    }
    else{
        header("location: index.php?alert=kesalahan");
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
  width: 60%;
  margin: auto;
  margin-top: 130px;
}

.box-login .tittle{
  text-align: center;
  font-weight: bold;
  font-size: 40px;
}

.form-group{
  margin: 24px 0;
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
        <h2 class="tittle">Login</h2>
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" id="">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="">
        </div>

        <div class="btn-login">
            <button type="submit">Masuk</button>
            <a href="register.php" style="text-decoration: none">Daftar</a>
        </div>
    </div>
    </form>

</div>
    
</body>
</html>