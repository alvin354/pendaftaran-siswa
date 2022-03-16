<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $idUser = $_SESSION['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $ttl = $_POST['ttl'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $un = $_POST['un'];
    $skhun = $_POST['skhun'];
    $nisn = $_POST['nisn'];   
    $nik = $_POST['nik'];
    $jurusan = $_POST['jurusan'];
    $exta = $_POST['extra'];


    $regis = mysqli_query($koneksi,"
    INSERT INTO tb_user (
        `id`, 
        `id_user`, 
        `nama`, 
        `jk`, 
        `ttl`, 
        `asal_sekolah`,
        `nilai_un`,
        `nilai_skhun`,
        `nisn`,
        `nik`,
        `jurusan`,
        `extrakurikuler`) 
    VALUES (
        NULL, 
        '$idUser', 
        '$nama', 
        '$jk', 
        '$ttl',
        '$asal_sekolah', 
        '$un', 
        '$skhun', 
        '$nisn',
        '$nik', 
        '$jurusan', 
        '$extra' );");

    if ($regis) {
        echo "<script>alert('Berhasil Mendaftar Silahkan Login')</script>";
    }
    else{
        echo "<script>alert('Kesalahan')</script>";
    }

}

