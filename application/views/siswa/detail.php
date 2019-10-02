<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                Detail Siswa
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">ID : <?= $siswa['ID']?></li>
                        <li class="list-group-item">Nama : <?= $siswa['Nama']?></li>
                        <li class="list-group-item">Alamat : <?= $siswa['Alamat']?></li>
                        <li class="list-group-item">Nim : <?= $siswa['Nim']?></li>   
                    </ul>
                    <a href="<?= base_url();?>siswa"class ="btn btn-primary"> Kembali </a>    
                </div>
            </div>
        </div>
    </div>
</div>