
<?php
header("Content-Type: application/vnd.msword");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=laporanditerima.doc");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<style>
    body{
        font-family:  Arial, Helvetica, sans-serif;
    }
    table{
        border-collapse: collapse; 
        width:100%;
    }
        .table table tr td{
        font-size: 11px;
        padding: 3px 2px;
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

<div class="table ">
                <h3>DI TERIMA</h3>
            <table border style="">
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
                // $status = $_GET['status'];

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
            </div>    
</body>

<?php include '../footer.php' ?>

</html>

