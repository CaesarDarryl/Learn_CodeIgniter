<?php
    // var_dump($mahasiswa);
?>
<div class="container">
    <div class="row mt-4"> 
        <div class="col-md-6"> 
            <a href="<?= base_url();?>siswa/tambah"class ="btn btn-primary"> Tambah Data </a>    
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <h2>Daftar Siswa</h2>
            <form action="" method="post">
            <div class="input-group mb-3">           
                <input name ="keyword" type="text" class="form-control" placeholder="Cari Data siswa" aria-label="Cari Data siswa" aria-describedby="button-addon2">
                <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit"     id="button-addon2">Search</button>
                </div>
            </div>
            </form>
            <?php
                if($this->session->flashdata('flash-data-delete')){ ?>
                <div class="alert alert-danger"> <?= $this->session->flashdata('flash-data-delete')?></div>
                <?php }?>
                <?php
                if($this->session->flashdata('flash-data')){ ?>
                <div class="alert alert-success"> <?= $this->session->flashdata('flash-data')?></div>
                <?php }?>
                
                <?php
                    if(empty($siswa))
                    {
                        ?>
                        <div class="alert alert-danger">Data siswa tak ditemukan</div>
                    <?php
                    }else{
                ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nim</th>                        
                        <th scope="col">Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     foreach($siswa as $ss)
                     {
                         ?>
                         <tr>
                            <td><?= $ss['ID']?></td>
                            <td><?= $ss['Nama']?></td>
                            <td><?= $ss['Alamat']?></td>
                            <td><?= $ss['Nim']?></td>

                            <td>
                                <a href="<?= base_url();?>siswa/detail/<?= $ss['ID']?>" class="badge badge-primary float-right">Detail</a>

                                <?php
                                if($this->session->userdata('level') == 'admin'){
                                ?>
                                <a href="<?= base_url();?>siswa/hapus/<?= $ss['ID']?>" class="badge badge-danger float-right" onclick="return confirm('Menghapus data ini ?');">Hapus</a>

                                <a href="<?= base_url();?>siswa/edit/<?= $ss["ID"]?>" class="badge badge-success float-right">Edit</a> 
                                <?php
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