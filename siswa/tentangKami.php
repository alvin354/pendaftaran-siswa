<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="../css/style.css" rel="stylesheet" />
    <style>
        .box-content{
            padding-top: 40px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 80%;
            margin: auto;
        }
        .container-background{
        margin-top: 70px;
        position: relative; 
        }
        
    .icon{
    position: absolute;
    top: -20px;
    left: 20px;
    }
    .icon img{
    width: 110px;
    }

        .card-vm{
            text-align: center;
            font-weight: bold;
            border-top: 10px solid #d7dbdd;
            border-radius: 30px;
            background-color: #d4d4d4;
            width: 340px;
            padding: 20px;
            
        }
        /* .card-img{
            position: relative;
        } */
        .bg-txt{
            position: absolute;
            z-index: 2;
            /* background-color:  rgb(116, 116, 118); */
            color: #ffff;
            padding: 10px 5px;
            border-radius: 12px;
            font-size: 14px;
            margin: 0;
            font-weight: bold;
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


    <div class="container">
        <?php include '../parts/navbar.php' ?>

        <div class="container-background">
            
        <div class="icon">
                <img src="../assets/a.png" alt="">
            </div>

        <div class="box-content">
            <div class="card-vm">
                <h2 class="tittle-vm">Visi</h2>
                <p class="text-vm">
                    Memuliakan Tuhan dengan menjadi 
                sekolah yang menerapkan nilai-nilai

                Pendidikan Kristen yang berkualitas 
                tinggi dalam intelektual, spiritual,

                mental,dan sosial</p>
            </div>
            <div class="card-img">
                <img class="img" width="300" src="../assets/kepala sekolah_deborah indriati.png" alt="">
                <p class="bg-txt" style="padding-left: 10px; background-color: #999898; width: 200px; border-radius: 20px; transform: translateY(-30px) translateX(-15px);" class="bg-txt">Kepala SMA Kristen Gloria</p>
                <p class="bg-txt" style="padding-left: 10px; background-color: #3f3e3e; width: 330px;  border-radius: 20px; transform: translateY(-30px) translateX(-15px);margin-top:30px " >Deborah Indriati</p>
            </div>
        </div>
    
        <div class="box-content">
            <div class="card-vm">
                <h2 class="tittle-vm">Misi</h2>
                <p class="text-vm">Memberikan kontribusi kepada masyarakat, 
                bangsa, dan negara melalui pendidikan 
                yang berkualitas tinggi dengan membangun 
                generasi muda yang berwawasan global, 
                menguasai iptek, memiliki kedewasaan 
                rohani, moral yang terpuji, kepedulian 
                sosial yang melayani dan jiwa 
                kepemimpinan yang berlandaskan nilai-nilai 
                Kristiani</p>
            </div>
            <div class="card-img">
                <img class="img" width="330" src="../assets/rename.jpg" alt="">
                <p class="bg-txt" style="padding-left: 10px;margin-top: 5px; width: 360px;  border-radius: 20px; transform: translateY(-20px) translateX(-15px); background-color:#999898">Guru dan Staff Karyawan SMA Kristen Gloria</p>
            </div>
        </div>
        </div>
        
    </div>
        
</body>

<?php include '../footer.php' ?>

</html>


