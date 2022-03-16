<?php 

session_start();

if (!isset($_SESSION['level']) || !$_SESSION['level'] == "admin") {
    header("location: ../index.php?alert=tertolak");
}




if (!isset($_SESSION['level']) || !$_SESSION['level'] == "siswa") {
    header("location: ../index.php?alert=tertolak");
}