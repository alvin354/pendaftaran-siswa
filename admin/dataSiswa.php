<?php 
include_once '../koneksi.php';


if(isset($_GET['act']) && $_GET['act'] == 'delete') {
    $id = $_GET['id'];

    
    $delete = mysqli_query($koneksi,"DELETE FROM tb_siswa WHERE id='$id' ");

    if ($delete) {
        header("location: dataSiswa.php?alert=success");
    }
    else{
        header("location: dataSiswa.php?alert=failed");    
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
    <link rel="stylesheet" href="../css/style.css">
    <style>
        
        .table-peserta{
        margin-top: 80px;
        align-items: center;
        padding:  10px 0;
        position: relative;
        border-radius: 20px;
        justify-content: center;
        display: flex;
        }


        .icon{
        position: absolute;
        top: -40px;
        left: 20px;
        }
        .icon img{
        width: 110px;
        }


        .table-peserta table{
        color: #000;
        border: 2px solid #E0E5DC;
        max-width: 90%;
        min-width: 80%;
        margin-left: 100px;
        }

        .table-peserta table tr th{ /* style text table head */
        background-color: #6FAC44;
        color: white;
        padding: 10px;
        font-size: 12px;
        }
        .table-peserta table tr td{  /* syle font table data */
        font-size: 15px; 
        padding: 0 3px;
        font-weight: 600;
        color: #484E42
        }
        .table-peserta table tr:nth-child(even) {
        background-color: #E1EFD8;
        } 
        .table-peserta table tr td a{
            flex-direction: column;
            display: flex;
            margin: 4px 0;
            font-weight: 500;
        }
        .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            color: black;
            text-align: center;
            margin-top: 180px;
        }

    </style>
</head>
<body>

<a href="./index.php" class="tombolkembali" >Kembali</a>

    <div class="container">
        <div class="">
        <?php include_once '../parts/navbaradmin.php' ?>
        </div>
        
        <div class="table-peserta">

            <div class="icon">
                <img src="../assets/c.png" style="width: 100px;" alt="">
            </div>

            <table border="" style="border-collapse: collapse;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NAMA SISWA</th>
                        <th>JK</th>
                        <th>ASAL SEKOLAH</th>
                        <th>ALAMAT</th>
                        <th>TTL</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php 
                require_once '../koneksi.php';
                $no = 1;
                $result = mysqli_query($koneksi,"SELECT * FROM tb_siswa");        
                   
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
                    <td>                              
                        <a href="detailSiswa.php?id=<?=$val['id']?>">Lihat Data</a>
                        <a href="?id=<?=$val['id']; ?>&act=delete">Hapus Data</a>
                        <a href="edit.php?id=<?=$val['id']?>">Edit Data</a>
                    </td>
                </tr>
                        <?php
                    }
                }
                ?>
                </tbody>
            </table>

        </div>

    </div>
</body>

<?php include '../footer.php' ?>

</html>