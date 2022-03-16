<?php
    
    include_once '../koneksi.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {        
        session_start();
        
        $id = $_SESSION['id'];

        $cek = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id_user = $id");
        
        if (mysqli_num_rows($cek) >0) {
            echo "<script>alert('sudah Pernah Mendaftar')</script>";
        }
        else{
                

        $id = $_SESSION['id'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $ttl = $_POST['ttl'];
        $alamat = $_POST['alamat'];
        $asal_sek = $_POST['asal_sekolah'];
        $un = $_POST['nilai_un'];
        $skhun = $_POST['nilai_skhun'];
        $nisn = $_POST['nisn']; 
        $nik = $_POST['nik'];
        $extra = $_POST['extrakurikuler'];
        $jurusan = $_POST['jurusan'];
        if( $un > 22 ){
            $status = "Diterima";
        }
        else{
            $status = "Belum_Diterima";
        }
        // var_dump($status);
    
        
    
    
        $regis = mysqli_query($koneksi,"
        INSERT INTO 
        tb_siswa VALUES( NULL, $_SESSION[id],
        '$nama',
        '$jk', 
        '$ttl',
        '$alamat', 
        '$asal_sek', 
        '$un', 
        '$skhun', 
        '$nisn', 
        '$nik', 
        '$jurusan', 
        '$extra', 
        '$status',
        '')");

        if ($regis) {
            echo "<script>alert('Terimakasih sudah mendaftar. Silahkan cek hasil pengumuman dengan cara masuk ke menu pengumuman')</script>";
        }
        else{
            echo "ea";
        }


        }

}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi Peserta Didik</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .img-c {
            position: absolute;
            margin: 25px 0 0 20px;
            /* opacity: 0.8; */
        }
        .wraper-form-registrasi {
            background-color: #c2d4ef;
            width: 100%;
            /* height: 80%; */
            border-radius: 60px;
            padding: 50px;
            /* margin-top: 7%; */
            margin: 50px 100px 0 50px;
            /* margin-inline: 5%; */
        }
        .wraper-registrasi {
            display: flex;
            flex-direction: row;
            /* height: 100%; */
        }
        .wraper-all-input {
            width: 40%;
        }
        .wraper-one {
            margin-top: 10px;
        }
        .inputpesertadidik {
            background-color: #ffffff;
            border-radius: 15px;
            border: none;
            border-color: white;
            height: 28;
            width: 100%;
            padding-right: 10px;
            padding-left: 10px;
        }
        .jurusan {
            margin-left: 90px;
            width: 35%;
        }
        #btn-submit {
            position: absolute; 
            right: 20px; 
            border: none; 
            background-color: #5e97ec; 
            width: 140px; 
            height: 30px; 
            border-radius: 20px; 
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
        
    </div>
    <div class="img-c">
        <img src="../assets/c.png" width="80px" alt="">
    </div>
        
        <div class="wraper">
            <div class="wraper-form-registrasi">
                <span style="font-weight: bold;">FORM Registrasi Peserta Didik</span>
                <hr style="background-color: black; color: black; border-color: black;"/>
                <form class="form-for-registrasi-peserta" method="post" >
                    <div class="wraper-registrasi" style="width: 100%; height:470px" >
                        <div class="wraper-all-input">
                            <div class="wraper-one">
                                <label for="nama" >Nama</label>
                                <br>
                                <input type="text" id="nama" name="nama" class="inputpesertadidik"/>
                            </div> 
                            <div class="wraper-one">
                                <span>Jenis Kelamin</span>
                                <br>
                                <input type="radio" value="Laki-Laki" id="Laki-laki" name="jk"><label for="laki-laki">Laki-Laki</label>
                                <input type="radio" value="Perempuan" id="perempuan" name="jk"><label for="perempuan">Perempuan</label>
                            </div>
                            <div class="wraper-one">
                                <label for="tempattanggallahir" >Tempat&Tanggal Lahir</label>
                                <br>
                                <input type="text" id="tempattanggallahir" name="ttl" class="inputpesertadidik"/>
                            </div> 
                            <div class="wraper-one">
                                <label for="alamat" >Alamat</label>
                                <br>
                                <input type="text" id="alamat" name="alamat" class="inputpesertadidik"/>
                            </div> 
                            <div class="wraper-one">
                                <label for="asalsekolah" >Asal Sekolah</label>
                                <br>
                                <input type="text" id="asalsekolah" name="asal_sekolah" class="inputpesertadidik"/>
                            </div>
                            <div class="wraper-one">
                                <label for="nilai"un >Nilai UN</label>
                                <br>
                                <input type="number" id="nilaiun" min="1" max="30" name="nilai_un" class="inputpesertadidik"/>
                            </div>  
                            <div class="wraper-one">
                                <label for="nilaiskhun" >Nilai SKHUN</label>
                                <br>
                                <input type="number" id="nilaiskhun" name="nilai_skhun" class="inputpesertadidik"/>
                            </div> 
                            <div class="wraper-one">
                                <label for="nisn" >NISN</label>
                                <br>
                                <input type="number" id="nisn" name="nisn" class="inputpesertadidik"/>
                            </div> 
                            <div class="wraper-one">
                                <label for="nik" >NIK</label>
                                <br>
                                <input type="number" id="nik" name="nik" class="inputpesertadidik"/>
                            </div> 
                        </div>
                        <div class="jurusan">
                            <div>
                                <span>Jurusan</span>
                                <br>
                                <input type="radio" name="jurusan" value="Ipa" id="ipa"><label for="ipa" style="margin-right: 100px;">IPA</label>
                                <input type="radio" name="jurusan" value="Ips" id="ips"><label for="ipa">IPS</label>
                            </div>
                            <div style="margin-top: 50px;">
                                <span>Ekstrakulikuler</span>
                                <br>
                                <input type="radio" name="extrakurikuler" value="Pramuka" id="pramuka"><label for="pramuka" style="margin-right: 100px;">Pramuka</label>
                                <input type="radio" name="extrakurikuler" value="Musik" id="musik"><label for="musik">Musik</label>
                                <br>
                                <input type="radio" name="extrakurikuler" value="Karate" id="karate"><label for="karate" style="margin-right: 118px;margin-top: 20px;">Karate</label>
                                <input type="radio" name="extrakurikuler" value="Sepak Bola" id="sepakbola"><label for="sepakbola">Sepak Bola</label>
                            </div>
                            <div style="margin-top: 20px; width: 90%;">
                                *Upload file ijazah dan SKHUN dalam bentuk PDF, format: Nama siswa.pdf
                                <input type="file" style="border: none; margin-top: 10px; ">
                            </div>
                        </div>
                    </div>
                    
                        <div style="position: relative;">
                            <button id="btn-submit" type="submit">
                            MENDAFTAR </button>
                        </div>
                        
    </form>
                    
                
        </div>
    </div>
</body>

<?php include '../footer.php'?>

</html>