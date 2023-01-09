<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- Modal EDIT-->
     <div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Data Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method ="POST" action="edit.php">
                <div>
                <input type="hidden" class="form-control" name="id"  value="<?php echo $row['id']; ?>">

                    <label>Nama</label>
                    <input type="text" class="form-control"  name="nama" value="<?php echo $row['nama']; ?>">
                </div>
                <div>
                    <label>Emel</label>
                    <input type="email" class="form-control"  name="emel" value="<?php echo $row['emel']; ?>">
                </div>
                <div>
                    <label>No Telefon</label>
                    <input type="tel" class="form-control"  name="notel" value="<?php echo $row['notel']; ?>">
                </div>
                <div>
                    <label>Sesi Kemasukan</label>
                    <select class="form-select" aria-label="Default select example" id="sesi" name="sesi">
                    <option selected><?php echo $row['sesi']; ?></option>
                    <option>1/2022</option>
                    <option>2/2022</option>
                    <option>1/2023</option>
                    <option>2/2023</option>
                    </select>
                </div>
                <div>
                    <label>Program</label>
                    <select class="form-select" aria-label="Default select example" id="program" name="program">
                    <option selected><?php echo $row['program']; ?></option>
                    <option>FO1 - SIJIL TEKNOLOGI KOMPUTER (SISTEM)</option>
                    <option>FO2 - SIJIL TEKNOLOGI KOMPUTER (RANGKAIAN)</option>
                    <option>FO4 - SIJIL TEKNOLOGI PERISIAN (PEMBANGUNAN APLIKASI WEB)</option>
                    <option>A12 - TEKNOLOGI REKABENTUK PRODUK INDUSTRI</option>
                    <option>A17 - SIJIL TEKNOLOGI MINYAK DAN GAS (LUKISAN PERPAIPAN)</option>
                    </select>    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" name="edit">KemasKini Data</button>
            </div>
                </form>
</div>
            </div>
                </div>
            </div>
            </div>



<body>
     <!-- Modal Delete-->
     <div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Anda hendak buang rekod <?php echo $row['nama']; ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Adakah anda pasti untuk padam rekod <b><?php echo $row['nama']; ?><b>?</p>
            </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Yes</a>
            </div>
               
    </div>
            </div>
            </div>
            </div>
           


            </body>
</html>