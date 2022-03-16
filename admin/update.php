<?php 

include '../koneksi.php';


if(isset($_POST['simpan'])) {

    if( $_POST['un'] > 22 ){
        $status = "Diterima";
    }
    else{
        $status = "Belum_Diterima";
    }

    $update = mysqli_query($koneksi, 
    "UPDATE `tb_siswa` SET 

    `nama` = '$_POST[nama]',
    `jk` = '$_POST[jk]',
    `ttl` = '$_POST[ttl]',
    `alamat` = '$_POST[alamat]',
    `asal_sekolah` = '$_POST[asal_sekolah]',
    `nilai_un` = '$_POST[un]',
    `nilai_skhun` = '$_POST[skhun]',
    `nisn` = '$_POST[nisn]',
    `nik` = '$_POST[nik]',
    `jurusan` = '$_POST[jurusan]',
    `extrakurikuler` = '$_POST[extrakurikuler]',
    `status` = '$status'


    WHERE `tb_siswa`.`id` = $_POST[id];");

    if ($update) {
        header("location: edit.php?id=$_POST[id]&&alert=update_success");
    }
    else{
        echo "<script>alert('Gagal Diupdate')</script>";
    }
    

}

?>