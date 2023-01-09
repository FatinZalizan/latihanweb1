<!-- <?php
    session_start();
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maklumat Pelajar</title>
    <!-- bootstrap css -->
    <!-- <link rel="stylesheet" type="text/css" href="DataTables\css\dataTables.bootstrap.min.css"> -->
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="DataTables\css\dataTables.bootstrap5.min.css">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">   
</head>

<body>
<?php include('add_modal.php')?>

    <!-- header -->
     <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
      </ul>
    </header> 
    <!-- end header -->
    <h2 align=center> Sistem Maklumat Pelajar</h2>
    <div class="container-sm">
        <div class="row">
         <?php
            if(isset($_SESSION['success'])){
                echo 
                    "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    Data berjaya disimpan
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
            }
            if(isset($_SESSION['error'])){
                echo 
                    "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    Data tidak berjaya disimpan
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
            }
            ?> 
        </div>
        <!-- data trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Rekod Baru</button>
    <br><br>
    <!-- data table bootstrap5-->
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Bil</th>
                    <th>Nama</th>
                    <th>Emel</th>
                    <th>Program</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php include ('connection.php');
                $sql = "SELECT * FROM pelajar";
                $query = $conn->query($sql);
                $i=1;
                    while($row = $query->fetch_assoc()){
                        echo
                        "<tr>
                            <td>$i</td>
                            <td>".$row['nama']."</td>
                            <td>".$row['emel']."</td>
                            <td>".$row['program']."</td>
                            <td>
                            <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#edit_".$row['id']."'><i class='bi bi-pencil-fill'></i></button>
                            <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#view_".$row['id']."'><i class='bi bi-eye'></i></button>
                            <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#delete_".$row['id']."'><i class='bi bi-trash3'></i></button>
                            </td>
                         
                        </tr>";

                        include('edit_delete_modal.php');
                        include('view_modal.php');
                        $i++;
                    }    
            ?>

            </tbody>
            <tfoot>
                <tr>
                    <th>Bil</th>
                    <th>Nama</th>
                    <th>Emel</th>
                    <th>Program</th>
                </tr>
            </tfoot>
        </table>
        <!-- end data table -->
        </div>        
        </body>

            <!-- Bootsrtrap Javascript--> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
        <!-- End Bootstrap Javascript-->
    
        <!-- Jquery and datatable -->
        <script type="text/javascript" language="javascript" src="jquery\jquery-3.6.1.js"></script>
        <script type="text/javascript" language="javascript" src="DataTables\js\jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="DataTables\js\dataTables.bootstrap5.min.js"></script>
        <script type="text/javascript" language="javascript" src="bootstrap\js\bootstrap.bundle.min.js"></script>
       
	    <!-- datatable script -->
        <script>$(document).ready(function () {
         $('#example').DataTable(({
            order: [[0, 'desc']],
         }));
         });</script>
         <!-- end datatable script -->


      
</html>
