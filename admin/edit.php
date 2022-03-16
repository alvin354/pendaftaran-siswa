<?php
    
    include_once '../koneksi.php';
    $id = $_GET['id'];
    $siswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id='$id'");
    // var_dump($siswa,"ada");
    $data = mysqli_fetch_array($siswa);
    // membuat data ekstra menjadi dinamis dalam bentuk array
    $ekstra = array('Pramuka','Musik','Karate','Sepak Bola');
    // membuat function untuk set aktif radio button
    function active_radio_button($value,$input){
        // apabila value dari radio sama dengan yang di input
        $result =  $value==$input?'checked':'';
        return $result;
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
        background-color: white;  
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

 
 <br/>
 <h1 style="text-align: center; font-size:30px">Edit data</h1>

    <div class="container">
        
        <div class="container-background">
            
            <div class="container-formulir">

                <div class="form-kiri">
                    <img src="../assets/profil.png" width="150px" alt="" srcset="">
                </div>
                
                <div class="form-tengah">
                    
        
                <form action="update.php" method="post">
                <input type="hidden" name="id" class="data-field" value="<?php echo $data['id']; ?>">
                <table>
                        <tr>
                            <td>Nama</td>
                            <td>
                                
                                <input type="text" name="nama" class="data-field" value="<?php echo $data['nama'] ?>">
                            </td>					
                        </tr>	
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                            <input type="radio" name="jk" value="Laki-Laki" <?php echo active_radio_button("Laki-Laki", $data['jk'])?>>Laki Laki
                        <input type="radio" name="jk" value="Perempuan" <?php echo active_radio_button("Perempuan", $data['jk'])?>>Perempuan					
                            </td>
                        </tr>	
                        <tr>
                            <td>Tempat Tanggal Lahir</td>
                            <td><input type="text" name="ttl" class="data-field" value="<?php echo $data['ttl'] ?>"></td>
                        </tr>
                        
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" name="alamat" class="data-field" value="<?php echo $data['alamat'] ?>"></td>
                        </tr>
                        
                        <tr>
                            <td>Asal Sekolah</td>
                            <td><input type="text" name="asal_sekolah" class="data-field" value="<?php echo $data['asal_sekolah'] ?>"></td>
                        </tr>

                        <tr>
                            <td>Nilai UN</td>
                            <td><input type="number" min="1" max="30"  name="un" class="data-field" value="<?php echo $data['nilai_un'] ?>"></td>
                        </tr>
                        
                        <tr>
                            <td>Nilai SKHUN</td>
                            <td><input type="number" name="skhun" class="data-field" value="<?php echo $data['nilai_skhun'] ?>"></td>
                        </tr>

                        <tr>
                            <td>NISN</td>
                            <td><input type="number" name="nisn" class="data-field" value="<?php echo $data['nisn'] ?>"></td>
                        </tr>

                        <tr>
                            <td>NIK</td>
                            <td><input type="number" name="nik" class="data-field" value="<?php echo $data['nik'] ?>"></td>
                        </tr>
                        
                        <tr>
                            <td>Jurusan</td>
                            <td>
                                <input type="radio" name="jurusan" class="data-field" value="Ipa" <?php echo active_radio_button("Ipa", $data['jurusan']) ?>><label for="ipa" style="margin-right: 100px;">IPA</label>
                                <input type="radio" name="jurusan" class="data-field" value="Ips" <?php echo active_radio_button("Ips", $data['jurusan']) ?>><label for="ipa">IPS</label>
                            </td>
                        </tr>

                        <tr>
                            <td>Status</td>
                            <td>
                                <p style="color: <?= $data['status'] =='Diterima' ? 'green' : 'red' ?>"> <?= $data['status'] == 'Diterima' ? 'Diterima' : 'Belum Diterima' ?></p>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Ekstrakurikuler</td>
                            <td>
                                <select class="data-field" name="extrakurikuler" id="">
                                    <?php 
                                    foreach ($ekstra as $e) {
                                        echo "<option value='$e' ";
                                        echo $data['extrakurikuler']==$e?'selected="selected"':'';
                                        echo ">$e</option>";
                                    }    
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" name="simpan">SIMPAN PERUBAHAN</button>
                                <a href="dataSiswa.php" class="tombolkembali">Kembali</a>
                            </td>					
                        </tr>
                    </table>
                </form>
                

                </div>

            </div>

        </div>

    </div>
</body>

<?php include '../footer.php' ?>

</html>