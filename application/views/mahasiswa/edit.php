<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">                  
                <div class="card-header"> 
                    Form Edit Data mahasiswa
                    </div>
                    <div class="card-body">
                    <?= validation_errors()?>
                    <form action="" method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $mahasiswa["id"]?>">
                                <input class="form-control" type="text" id="nama" name="nama" value="<?= $mahasiswa["nama"]?>">
                            </div>                        
                            <div class="form-group">
                                <label for="nim">Nim</label>
                                <input class="form-control" type="number" id="nim" name="nim" value="<?= $mahasiswa["NIM"]?>">
                            </div>                        
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" id="email" name="email" value="<?= $mahasiswa["email"]?>">
                            </div>
                            <div class="form-group">
                                <label for="jurusan"> Jurusan </label>
                                <select class="form-control" name="jurusan" id="jurusan" name="jurusan">
                                    <option selected>--------</option>
                                    <option value="kimia">Kimia</option>
                                    <option value="informatika">Informatika</option>
                                    <option value="mesin">Mesin</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>           
                        </form>
                    </div>                    
                    <div>
                </div>
            </div>
        </div>
    </div>
</div>