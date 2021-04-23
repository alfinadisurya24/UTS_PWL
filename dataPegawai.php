<?php
require_once 'models/Pegawai.php';
$obj = new Pegawai();
?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5 p-3">
    <h3 class="d-inline font-weight-bold">Data Pegawai</h3>
    <?php if (isset($_SESSION['MEMBER'])) { ?>
        <a href="index.php?page=add_pegawai" class="btn btn-success d-inline float-right">Add</a>
    <?php } ?>
</div>
<div class="table-responsive">
    <table class="table" id="table-pegawai">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIP</th>
                <th scope="col">Email</th>
                <th scope="col">Agama</th>
                <th scope="col">Divisi</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($obj->dataPegawai() as $p){ 
            ?>
                <tr>
                    <th scope="col"><?= $no ?></th>
                    <th scope="col"><?= $p['nama'] ?></th>
                    <th scope="col"><?= $p['nip'] ?></th>
                    <th scope="col"><?= $p['email'] ?></th>
                    <th scope="col"><?= $p['agama'] ?></th>
                    <th scope="col"><?= $p['nama_divisi'] ?></th>
                    <th scope="col"><?= '<img class="img img-fluid" width="100" src="images/'.$p['foto'].'">' ?></th>
                    <th scope="col">
                        <a href="index.php?page=detail_pegawai&id=<?=$p['id_pegawai']?>" class="btn btn-info" type="button">Detail</a>
                        <?php if (isset($_SESSION['MEMBER'])) { ?>
                            <a href="index.php?page=edit_pegawai&id=<?=$p['id_pegawai']?>" class="btn btn-primary" type="button">Edit</a>
    
                            <?php if ($_SESSION['MEMBER']['role'] != 'staff') { ?>
                                <form method="POST" action="controllers/Pegawai.php">
                                    <input type="hidden" name="id" value="<?= $p['id_pegawai'] ?>">
                                    <button name="submit" type="submit" value="delete" class="btn btn-danger">Delete</button>
                                </form>
                            <?php } ?>
                        <?php } ?>
                    </th>
                </tr>
            <?php
                $no++;
                } 
            ?>
        </tbody>
      </table>

</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#table-pegawai').DataTable();
    });
</script>