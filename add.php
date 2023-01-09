<?php
    session_start();
    include_once('connection.php');
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $emel = $_POST['emel'];
        $notel = $_POST['notel'];
        $sesi = $_POST['sesi'];
        $program = $_POST['program'];

    //     $sql = "INSERT INTO pelajar (nama, emel, notel, program) VALUES ('{$nama}', '{$emel}', '{$notel}', '{$sesi}', '{$program}')";

    //     // $sql = mysqli_query($conn,$sql);
        
    //     if($conn->query($sql)){
    //         $_SESSION['success'] = 'Data berjaya disimpan';
    //     }
    //     else{
    //         $_SESSION['error'] = 'Data tidak berjaya disimpan';
    //     }
    // }
    // else{
    //     $_SESSION['error'] = "Sila semak semula data yang dimasukkan";

    // TAMBAH REKOD BARU PADA TABLE PELAJAR
    $keputusan = mysqli_query($conn, "INSERT INTO pelajar(nama, emel, notel, sesi,  program) VALUES ('$nama', '$emel', '$notel', '$sesi', '$program')");
    }
    header('Location:index.php');
?>