

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .bg-center {
            display: flex;
            justify-content: center; 
            width: 80%; 
            position: absolute; 
            top:0; 
            margin-left: 10%;
        }
        #btn-pdf {
            background-color: brown; 
            color: white; 
            border-radius: 10px; 
            width: 150px; 
            border: none; 
            height: 30px;
            margin: 5%;
            margin-left:600px
        }
        .bg-syarat {
            width: 90%; 
            background-color: tomato; 
            border-radius: 25px; 
            height: auto; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            padding: 10px;
            margin-top: 0;
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
<body class="background">

<a href="./index.php" class="tombolkembali">Kembali</a>

    <div class="bg-center" >
    <?php include '../parts/navbar.php' ?>
        
    </div>
    <div>
        <img src="../assets/e.png" width="110px" alt="" style="position: absolute; margin-top: 75px; margin-left: 50px;">
    </div>
    <div class="wraper" style="height: 80vh;">
        <div>
            <h1 style="font-size:40px;text-align: center; margin-top: 100px; font-family:'Arial'">PENGUMUMAN</h1>
            <!-- <div class="inputwraper" style="position: relative;">
                <label for="username" style="position: absolute; left: 0px;">Username</label>
                <input type="text" id="username" name="username" class="textinput" style="width: 400px; position: absolute; right: 0px;">
            </div>
            <div class="inputwraper" style="position: relative;">
                <label for="password" style="position: absolute; left: 0px;">Password <br>Akun</label>
                <input type="password" id="password" name="password" class="textinput" style="width: 400px; position: absolute; right: 0px; margin-top: 30px;">
            </div>
            <div class="inputwraper" style="position: relative;">
                <input type="text" id="" name="" class="textinput" style="width: 400px; position: absolute; right: 0px; margin-top: 60px;">
            </div> -->
            <div style="
            margin-top: 250px; ">
                <button id="btn-pdf" ><a href="./hasil.php" style="color: white; ">Lihat Hasil</a></button>
            </div>
        </div>
        
    </div>
    <div style="display: flex; width: 100%; justify-content: center;">
    <div class="bg-syarat">
        <p style="text-align: center; font-weight: bold; font-size:20px">YANG BERHASIL DITERIMA HARAP MELAKUKAN PENDAFTARAN ULANG KE SEKOLAH PADA JAM KERJA (08.00-12.00) DENGAN MEMBAWA FOTOCOPY IJAZAH,SKHUN,AKTA KELAHIRAN,PAS FOTO BERWARNA 2X4 2 BUAH MAKSIMAL 3 HARI SETELAH PENGUMUMAN </p>

    </div>
    </div>
</body>

<?php include '../footer.php' ?>

</html>