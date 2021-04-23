<?php
require_once 'models/Pegawai.php';
$obj = new Pegawai();
$id = $_GET['id'];
$tampil = $obj->detailPegawai($id);
?>

<div class="card m-3" style="width: 18rem;">
  <img class="card-img-top" src="images/<?=$tampil['foto']?>" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title font-weight-bold"><?= ucfirst($tampil['nama']) ?></h3>
    <p class="card-text mb-0">NIP : <?= $tampil['nip'] ?></p>
    <p class="card-text mb-0">Email : <?= $tampil['email'] ?></p>
    <p class="card-text mb-0">Agama : <?= $tampil['agama'] ?></p>
    <p class="card-text mb-0">Divisi : <?= $tampil['nama_divisi'] ?></p>

    <a href="index.php?page=dataPegawai" class="btn btn-danger mt-3">Back</a>
  </div>
</div>