<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        
        .container-background{
        margin-top: 80px;
        position: relative;
        border-radius: 20px;
        background-color: #D7E5EE;
        }
        
        .table-container{
        padding:  10px 0 100px;
        display:flex;
        justify-content: space-around;
        }

        .icon{
        position: absolute;
        top: -40px;
        left: 20px;
        }
        .icon img{
        width: 110px;
        }

        .table{
            margin-top: 100px;
            width: 45%
        }
        .table table tr th{
            color: white;
            font-size: 12px;
        }
        .table table tr{
            background-color:#d9e2f3;
        }
        .table table tr td{
            font-size: 11px;
            padding: 3px 2px;
        }
        .table-right .table-right tr, .table-right td, .table-right th{
            border: 1px solid #E38034;
        }
        .table-right tr {
            background-color: #fbe4d6;
        }
        .table-right tr th{
            background-color: #ed7d2f;
        }
        .table-left table tr:nth-child(even){
            background-color: white;
        }
        .table-right table tr:nth-child(even){
            background-color: white;
        }
        .table-left tr th{
            background-color: #4472c4;
        }

        
        .table .btn-down{
            color: black;
            border-radius: 20px;
            width: 150px;
            float: right;
            font-size: 15px;
            margin-top: 10px;
            font-weight: bold;
            border: none;
            padding: 10px;
        }

        .btn-left{
            background-color: #649aba
        }
        .btn-right{
            background-color: #E38034
        }
        .table h3{
            margin: 0 0 0 -10px;
        }

        .tittle{
            text-align: center;
            font-weight: 600;
            margin-top: 10px;
            font-size: 45px;
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

<a href="./index.php" class="tombolkembali" >Kembali</a>

    <div class="container">
        <div class="">
        <?php include_once '../parts/navbaradmin.php' ?>
        </div>

        <div class="container-background">
            <h1 class="tittle">Laporan</h1> 
        <div class="table-container">

            <div class="icon">
                <img src="../assets/a.png" alt="">
            </div>

            <div class="table table-left">
                <h3>DI TERIMA</h3>
            <table  border="" style="border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA SISWA</th>
                            <th>JK</th>
                            <th>ASAL SEKOLAH</th>
                            <th>ALAMAT</th>
                            <th>TTL</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                require_once '../koneksi.php';
                $no = 1;
                $result = mysqli_query($koneksi,"SELECT * FROM tb_siswa WHERE status='Diterima'");        
                   
                if(mysqli_num_rows($result)){
                    while($val = mysqli_fetch_array($result) ){
                        ?>
                        
                <tr>
                    <td><?=$no++?></td>
                    <td style="max-width: 200px"><?= $val['nama']?></td>
                    <td><?= $val['jk']?></td>
                    <td><?= $val['asal_sekolah']?></td>
                    <td style="max-width: 250px"><?=$val['alamat']?></td>
                    <td><?= $val['ttl']?></td>
                    <td><?=$val['status']?></td>
                </tr>
                        <?php
                    }
                }
                ?>
                    </tbody>
                </table>
                <button class="btn-down btn-left"><a href="diterima.php">Download</a></button>
            </div>

            <div class="table table-right">
                <h3>TIDAK DITERIMA</h3>
            <table  border="" style="border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA SISWA</th>
                            <th>JK</th>
                            <th>ASAL SEKOLAH</th>
                            <th>ALAMAT</th>
                            <th>TTL</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                require_once '../koneksi.php';
                $no = 1;
                $result = mysqli_query($koneksi,"SELECT * FROM tb_siswa WHERE status='Belum_Diterima'");        
                   
                if(mysqli_num_rows($result)){
                    while($val = mysqli_fetch_array($result) ){
                        ?>
                        
                <tr>
                    <td><?=$no++?></td>
                    <td style="max-width: 200px"><?= $val['nama']?></td>
                    <td><?= $val['jk']?></td>
                    <td><?= $val['asal_sekolah']?></td>
                    <td style="max-width: 250px"><?=$val['alamat']?></td>
                    <td><?= $val['ttl']?></td>
                    <td><?=$val['status']?></td>
                </tr>
                        <?php
                    }
                }
                ?>
                    </tbody>
                </table>
                <button class="btn-down btn-right" ><a href="tidakditerima.php"> Download</a></button>
            </div>

        </div>

        </div>

    </div>
</body>

<?php include '../footer.php' ?>

</html>