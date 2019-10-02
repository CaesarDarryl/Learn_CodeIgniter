<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                Detail Mahasiswa
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Nama : <?= $mahasiswa['nama']?></li>
                        <li class="list-group-item">NIM : <?= $mahasiswa['NIM']?></li>
                        <li class="list-group-item">Email : <?= $mahasiswa['email']?></li>
                        <li class="list-group-item">Jurusan : <?= $mahasiswa['jurusan']?></li>   
                    </ul>
                    <a href="<?= base_url();?>mahasiswa"class ="btn btn-primary"> Kembali </a>    
                </div>
            </div>
        </div>
    </div>
</div>