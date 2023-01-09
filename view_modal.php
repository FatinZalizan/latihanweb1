<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
</head> 
<style> 
a.print_link { 
    display: inline-block; 
    padding: 5px 10px; 
    border-radius: 3px; 
    background-color: black; 
    color: blanchedalmond; 
    transition: all 0.2s ease-in-out; 
} 
  
a.print_link:hover { 
    background-color: #ffffff; 
    color: #b95d6a; 
} 
</style> 
<body> 
<div class="modal fade" id="view_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
    <!-- Scrollable modal --> 
    <div class="modal-dialog modal-dialog-scrollable"> 
    <div class="modal-content"> 
      <div class="modal-header"> 
        <h1 class="modal-title fs-5" id="exampleModalLabel">Paparan Data Pelajar</h1> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
      </div> 
      <div class="modal-body"> 
        <form method="POST" action="datakbkj.php"> 
          <div class="mb-3"> 
          <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>"> 
           
            <label for="recipient-name" class="col-form-label">Nama:</label> 
            <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>"> 
          </div> 
          <div class="mb-3"> 
            <label for="recipient-name" class="col-form-label">Emel:</label> 
            <input type="email" class="form-control" name="emel" value="<?php echo $row['emel']; ?>"> 
          </div> 
          <div class="mb-3"> 
            <label for="recipient-name" class="col-form-label">No Telefon</label> 
            <input type="tel" class="form-control" name="notel" value="<?php echo $row['notel']; ?>"> 
          </div> 
          <div>
                    <label>Sesi Kemasukan</label>
                    <input type="tel" class="form-control" name="sesi" value="<?php echo $row['sesi']; ?>">
                </div>
                <div>
                    <label>Program</label>
                    <input type="tel" class="form-control" name="program" value="<?php echo $row['program']; ?>">
                   
                </div>
          <div class="modal-footer"> 
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button> 
          </div> 
        </form> 
      </div> 
    </div> 
  </div> 
</div> 
</body> 
</html>
