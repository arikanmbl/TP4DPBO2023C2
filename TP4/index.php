<?php
include_once("models/Template_class.php");
include_once("models/DB_class.php");
include_once("controllers/Karyawan_controller.php");

$karyawan = new KaryawanController();

if (isset($_POST['add'])) {
    //lengkapi

    header("location:index.php");
} else if (!empty($_GET['id_hapus'])) {
    //lengkapi
    $id = $_GET['id_hapus'];

    header("location:index.php");
} else if (!empty($_GET['id_edit'])) {
    //lengkapi
    $id = $_GET['id_edit'];
    
    header("location:index.php");
} else{
    $karyawan->index();
}
