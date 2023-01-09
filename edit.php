<?php
    session_start();
    include_once('connection.php');
    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $emel = $_POST['emel'];
        $notel = $_POST['notel'];
        $sesi = $_POST['sesi'];
        $program = $_POST['program'];

    $keputusan = mysqli_query($conn, "UPDATE pelajar SET nama = '$nama', emel= '$emel', notel= '$notel', sesi= '$sesi', program = '$program' WHERE id= $id");
    }
    header('Location:index.php');
?>