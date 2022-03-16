
<?php


require_once '../koneksi.php'; 

session_start();

$id = $_SESSION['id']; 

$query = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id_user = '$id' "); 

$data = mysqli_fetch_assoc($query); 


if (isset($data)) { 
if($data['status'] == 'Diterima') { 
    $pesan = "Selamat Anda"; 
    $hasil = "Diterima";
}
else{
    $pesan = "Mohon Maaf Anda"; 
    $hasil = "Belum Bisa Diterima"; 
}
}

?>

<style>
    .container{ 
        width: 80%;
        margin: auto;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center; 
        height: 500px;
        background-color: #2132;
        border: 8px solid #3468;
        border-radius: 10px;
        font-family: 'Arial';
    }
    .wrap{
        width: 80%; 
    }
    .wrap h1, h2{
        color: blue;
        text-align: center;
    }
    .tombolkembali {
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
    }
    .tombolkembali:hover {
        cursor: pointer;
        color: black;
    }
</style>

<body>
<a href="./pengumuman.php" class="tombolkembali" >Kembali</a>
</body>

<div class="container">
    <div class="wrap">
    <?php 
    if (!$data) { //mencetak pesan saat data tidak ada/ belum mendaftar 
        ?>
        <h1>Silahkan Mendaftar Terlebih dahulu...!</h1>    
        <?php
    }
    else{ //hasil 
        ?>
    <h1>Dikarenakan Hasil Nilai UN Anda <?=$data['nilai_un']?></h1>
    <h1><?=$pesan?></h1>
    <h2><?=$hasil ?></h2>
    
        
        <?php
    }
    ?>
    </div>
</div>