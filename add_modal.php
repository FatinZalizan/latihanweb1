<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Data Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method ="POST" action="add.php" class="was-validated">
                <div>
                    <!-- <label>Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama"> -->

                    <label for="validationTextarea" class="form-label">Textarea</label>
                    <input class="form-control" id="validationTextarea" placeholder="Customer name must not be blank" required></input>
                    <div class="invalid-feedback">
                    Please enter a message in the textarea.
                    </div>
                </div>
                <div>
                    <label>Emel</label>
                    <input type="email" class="form-control" id="emel" name="emel">
                </div>
                <div>
                    <label>No Telefon</label>
                    <input type="tel" class="form-control" id="notel" name="notel">
                </div>
                <div>
                    <label>Sesi Kemasukan</label>
                    <select class="form-select" aria-label="Default select example" id="sesi" name="sesi">
                    <option selected></option>
                    <option>1/2022</option>
                    <option>2/2022</option>
                    <option>1/2023</option>
                    <option>2/2023</option>
                    </select>
                </div>
                <div>
                    <label>Program</label>
                    <select class="form-select" aria-label="Default select example" id="program" name="program">
                    <option selected></option>
                    <option>FO1 - SIJIL TEKNOLOGI KOMPUTER (SISTEM)</option>
                    <option>FO2 - SIJIL TEKNOLOGI KOMPUTER (RANGKAIAN)</option>
                    <option>FO4 - SIJIL TEKNOLOGI PERISIAN (PEMBANGUNAN APLIKASI WEB)</option>
                    <option>A12 - TEKNOLOGI REKABENTUK PRODUK INDUSTRI</option>
                    <option>A17 - SIJIL TEKNOLOGI MINYAK DAN GAS (LUKISAN PERPAIPAN)</option>
                    </select>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" name="submit">Simpan Data</button>
            </div>
                </form>
</div>
            </div>
                </div>
            </div>
            </div>
</body>
</html>