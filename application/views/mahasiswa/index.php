<?php
    // var_dump($mahasiswa);
?>
<div class="container">
    <div class="row mt-4"> 
        <div class="col-md-6"> 
            <a href="<?= base_url();?>mahasiswa/tambah"class ="btn btn-primary"> Tambah Data </a>    
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <h2>Daftar Mahasiswa</h2>
            <form action="" method="post">
            <div class="input-group mb-3">           
                <input name ="keyword" type="text" class="form-control" placeholder="Cari Data Mahasiswa" aria-label="Cari Data Mahasiswa" aria-describedby="button-addon2">
                <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit"     id="button-addon2">Search</button>
                </div>
            </div>
            </form>
            <!-- Exception apabila data mahasiswa kosong-->
            <?php 
                if(empty($mahasiswa))
                {
                    ?>
                <div class="alert alert-danger" role="alert">
                Data Mahasiswa tidak di temukan
                </div>
                    <?php
                }
                else{
            ?>
            <?php
                if($this->session->flashdata('flash-data')){ ?>
                <div class="alert alert-success"> <?= $this->session->flashdata('flash-data')?></div>
                <?php }?>
            <?php
                if($this->session->flashdata('flash-data-delete')){ ?>
                <div class="alert alert-danger"> <?=    $this->session->flashdata('flash-data-delete')?></div>
                <?php }?>            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //Looping untuk menampilkan Data berdasar banyak data

                        foreach($mahasiswa as $mhs){
                        ?>
                            <tr>                        
                                <td><?= $mhs['id']?></td>
                                <td><?= $mhs['nama']?></td>
                                <td><?= $mhs['NIM']?></td>
                                <td><?= $mhs['email']?></td>
                                <td><?= $mhs['jurusan']?></td>
                                <!-- Pembuatan Tombol Hapus.-->
                                <td>
                                    <a href="<?= base_url();?>mahasiswa/detail/<?= $mhs["id"]?>" class="badge badge-success float-right">Detail</a>
                                    <?php
                                    if($this->session->userdata('level') == 'admin'){
                                    ?>
                                    
                                    <a href="<?= base_url();?>mahasiswa/hapus/<?= $mhs["id"]?>" class="badge badge-danger float-right" onclick="return confirm('Menghapus data ini ?');">Hapus</a>
                                    
                                    <a href="<?= base_url();?>mahasiswa/edit/<?= $mhs["id"]?>" class="badge badge-primary float-right">Edit</a>                     <?php
                                    }
                                    ?>         
                                </td>
                            </tr>                                    
                        <?php
                    }
                        ?>                                
                </tbody>
            </table> 
            <?php
                }
            ?>                                                       
        </div>
    </div>
</div>