<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        
    .dashboard-card{
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
    background-color: #ECF1F5;
    border-radius: 20px;
    margin-top: 60px
    }
    .card-atas,.card-bawah{
    display: flex;
    justify-content: space-around;
    margin: 30px 0;
    width: 80%;
    }
    .card-atas a img, .card-bawah a img{
    width: 250px;
    }
    .logout {
        background:#2C97DF;
        color:white;
        border-top:0;
        border-left:0;
        border-right:0;
        border-bottom:5px solid #2A80B9;
        padding:10px 20px;
        text-decoration:none;
        font-family:sans-serif;
        font-size:11pt;
        margin: 40px 0 0 0;
        position: absolute;
    }
    .logout:hover {
        cursor: pointer;
        color: black;
    }
    .footer {
        left: 0;
        bottom: 0;
        width: 100%;
        color: black;
        text-align: center;
        margin-top: 30px;
    }
    
    </style>
</head>
<body>

    
    <div class="container">
        <div class="">
            <?php include_once '../header.php' ?>
            <a href="../logout.php" class="logout" >Logout</a>
        </div>
        
        <div class="dashboard-card">

            <div class="card-atas">
                <a href="./tentangKami.php">
                    <img src="../assets/tombol tentang kami.png" alt="" srcset="">
                </a>
                <a href="./registrasipeserta.php">
                    <img src="../assets/tombol daftar.png" alt="" srcset="">
                </a>
                <a href="./panduan.php">
                    <img src="../assets/tombol panduan psb.png" alt="" srcset="">
                </a>
            </div>
            
            <div class="card-bawah" >
                <a href="./galeri.php">
                    <img src="../assets/tombol galeri.png" alt="" srcset="">
                </a>
                <a href="./pengumuman.php">
                    <img src="../assets/tombol pengumuman.png" alt="" srcset="">
                </a>
                <a href="./hubungiKami.php">
                    <img src="../assets/tombol hubungi kami.png" alt="" srcset="">
                </a>
            </div>

        </div>

    </div>
</body>

<?php include '../footer.php' ?>

</html>