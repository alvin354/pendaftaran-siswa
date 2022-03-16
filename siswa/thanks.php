

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima kasih</title>
    <link href="../css/style.css" rel="stylesheet" />
    <style>
        .font-thanks {
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            text-transform: capitalize;
        }
        .bg-thanks {
            background-color: rgb(202, 202, 255); 
            width: 80%; 
            height: 70%; 
            border-radius: 20px;
            display: flex; 
            align-items: center; 
            justify-content: center;
        }
        .bg-center {
            display: flex;
            justify-content: center; 
            width: 80%; 
            position: absolute; 
            top:0; 
            margin-left: 10%;
        }
    </style>
</head>
<body class="background" style="display: flex; align-items: center; justify-content: center;">

<a href="./index.php" class="tombolkembali">Kembali</a>

    <div class="bg-center">
        <?php include '../parts/navbar.php' ?>

        <img src="../assets/c.png" width="80px" alt="" style="position: absolute; margin-top: -220px;">
    </div>
    <div class="bg-thanks" >
    <div class="wraper" style="width: 50%;">
        <p class="font-thanks">Terimakasih sudah mendaftar di SMA Gloria 2 Surabaya. 
        Silahkan cek hasil pengumuman dengan cara masuk ke menu pengumuman</p>
    </div>
    </div>
</body>
</html>