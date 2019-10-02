<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">                  
                <div class="card-header"> 
                    Form Tambahkan Siswa
                    </div>
                    <div class="card-body">
                    <?= validation_errors()?>
                    <form action="" method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" id="nama" name="nama">
                            </div>                        
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input class="form-control" type="text" id="alamat" name="alamat">
                            </div>                        
                            <div class="form-group">
                                <label for="nim">Nim</label>
                                <input class="form-control" type="number" id="nim" name="nim">
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