<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="../css/style.css" rel="stylesheet" />
    <style>
        .container-background{
        margin-top: 80px;
        align-items: center;
        padding:  10px 0;
        position: relative;
        }
        .icon{
        position: absolute;
        top: -40px;
        left: 20px;
        }
        .icon img{
        width: 110px;
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

<a href="./index.php" class="tombolkembali">Kembali</a>

    <div class="container">
        <?php include '../parts/navbar.php' ?>

        <div class="container-background">
            <div class="icon">
                    <img src="../assets/f.png" alt="">
                </div>

                <img src="../assets/ALUR PSB.jpg" width="100%" height="100%" alt="">
            
            </div>

        </div>
        
    </div>
        
</body>

<?php include '../footer.php' ?>

</html>


