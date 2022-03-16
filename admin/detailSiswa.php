<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        
    .container-background{
        margin-top: 80px;
        align-items: center;
        padding:  10px 0;
        position: relative;
        border-radius: 20px;
        background-color: #D7E5EE;
        display: flex;
        justify-content: center;
    }
    
.icon{
  position: absolute;
  top: -40px;
  left: 20px;
  }
  .icon img{
  width: 110px;
  }


    .container-formulir{
    justify-content: space-around;
    margin-top: 20px;
    width: 80%;
    display: flex;
    }
    .form-kiri{
        margin-left: 50px;

    }
    .form-tengah table{
        min-width: 600px;
    }
    .form-tengah table tr td{
        color: #484E42;
        font-weight: 600;
        padding: 9px 20px
    }
    .form-tengah table tr td .data-field{
        background-color: #D0D2D4;  
        border-radius: 20px;
        padding: 2px 10px;
        margin: 0;
    }
    .form-kanan button{
        background-color: red;
        color: white;
        border: none;
        padding: 4px 10px;
        width: 120px;
        font-weight: bold;
        border-radius: 10px;
        font-size: 15px; 
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

<a href="./dataSiswa.php" class="tombolkembali" >Kembali</a>

    <div class="container">
        <div class="">
        <?php include_once '../parts/navbaradmin.php' ?>
        </div>
        
        <div class="container-background">

            <div class="icon">
                <img src="../assets/b.png" alt="">
            </div>
            
            <div class="container-formulir">

                <div class="form-kiri">
                    <img src="../assets/profil.png" width="150px" alt="" srcset="">
                </div>
                
                <div class="form-tengah">
                    
                <?php

                    $id = $_GET['id'];
                    
                    require_once '../koneksi.php';
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_siswa WHERE id = '$id'");
                    $data = mysqli_fetch_assoc($query);
                        if (mysqli_num_rows($query)==0) {
                            ?>
                            <p>Data Tidak ditemukan</p>
                        <?php
                        }
                        else{
                         
                    ?>
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td><p  class="data-field"><?=$data['nama']?></p></td>
                        </tr>
                        
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><p  class="data-field"><?=$data['jk']?></p></td>
                        </tr>
                        
                        <tr>
                            <td>Tempat Tanggal Lahir</td>
                            <td><p  class="data-field"><?=$data['ttl']?></p></td>
                        </tr>
                        
                        <tr>
                            <td>Alamat</td>
                            <td><p  class="data-field"><?=$data['alamat']?></p></td>
                        </tr>
                        
                        <tr>
                            <td>Asal Sekolah</td>
                            <td><p  class="data-field"><?=$data['asal_sekolah']?></p></td>
                        </tr>

                        <tr>
                            <td>Nilai UN</td>
                            <td><p  class="data-field"><?=$data['nilai_un']?></p></td>
                        </tr>
                        
                        <tr>
                            <td>Nilai SKHUN</td>
                            <td><p  class="data-field"><?=$data['nilai_skhun']?></p></td>
                        </tr>

                        <tr>
                            <td>NISN</td>
                            <td><p  class="data-field"><?=$data['nisn']?></p></td>
                        </tr>

                        <tr>
                            <td>NIK</td>
                            <td><p  class="data-field"><?=$data['nik']?></p></td>
                        </tr>
                        
                        <tr>
                            <td>Jurusan</td>
                            <td><p  class="data-field"><?=$data['jurusan']?></p></td>
                        </tr>
                        
                        <tr>
                            <td>Ekstrakurikuler</td>
                            <td><p  class="data-field"><?=$data['extrakurikuler']?></p></td>
                        </tr>

                        <tr>
                            <td>Status</td>
                            <td><p  class="data-field"><?=$data['status']?></p></td>
                        </tr>
                    </table>
                    <?php 
                       
                    }
                    ?>
                </div>
                
            </div>

        </div>

    </div>
</body>

<?php include '../footer.php' ?>

</html>