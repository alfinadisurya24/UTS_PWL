<?php
require_once 'models/Pegawai.php';
$obj = new Pegawai();
$id = $_GET['id'];
$tampil = $obj->detailPegawai($id);
$nama_agama = ['islam' , 'kristen protestan', 'hindu', 'buddha', 'kristen katolik', 'konghucu'];
?>

<h3 class="m-4">Edit Pegawai</h3>

<form method="POST" action="controllers/Pegawai.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div class="form-group row">
        <label for="nip" class="col-4 col-form-label">NIP</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-address-card"></i>
            </div>
            </div> 
            <input id="nip" name="nip" type="text" class="form-control" value="<?= $tampil['nip'] ?>" required="required">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
        <input id="nama" name="nama" type="text" class="form-control" value="<?= $tampil['nama'] ?>" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label> 
        <div class="col-8">
        <input id="email" name="email" type="text" class="form-control" value="<?= $tampil['email'] ?>" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Agama</label> 
        <div class="col-8">
            <?php foreach($nama_agama as $key => $p){ ?>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="agama" id="agama_<?= $key ?>" type="radio" required="required" class="custom-control-input" value="<?= $p ?>" <?= $p == $tampil["agama"] ? "checked" : "" ?>> 
                    <label for="agama_<?= $key ?>" class="custom-control-label"><?= ucfirst($p) ?></label>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="divisi" class="col-4 col-form-label">Divisi</label> 
        <div class="col-8">
        <select id="divisi" name="divisi" class="custom-select" required="required">
            <option value="" disabled>-- Pilih Divisi --</option>
            <?php foreach ($obj->divisi() as $p) { ?>
                <option value='<?= $p['id_divisi'] ?>' <?= $p["nama"] == $tampil["nama_divisi"] ? "selected='true'" : "" ?> ><?= $p['nama'] ?></option>
            <?php } ?>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="foto" class="col-4 col-form-label">Foto</label> 
        <div class="col-8">
        <input id="foto" name="foto" type="file" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" value="edit" class="btn btn-primary">Edit</button>
        </div>
    </div>
</form>