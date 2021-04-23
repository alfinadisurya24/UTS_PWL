<?php
require_once 'models/Pegawai.php';
$obj = new Pegawai();
?>

<h3 class="m-4">Add Pegawai</h3>

<form method="POST" action="controllers/Pegawai.php" enctype="multipart/form-data">
    <div class="form-group row">
        <label for="nip" class="col-4 col-form-label">NIP</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-address-card"></i>
            </div>
            </div> 
            <input id="nip" name="nip" type="text" class="form-control" required="required">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
        <input id="nama" name="nama" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label> 
        <div class="col-8">
        <input id="email" name="email" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Agama</label> 
        <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
            <input name="agama" id="agama_0" type="radio" required="required" class="custom-control-input" value="islam"> 
            <label for="agama_0" class="custom-control-label">Islam</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="agama" id="agama_1" type="radio" required="required" class="custom-control-input" value="kristen protestan"> 
            <label for="agama_1" class="custom-control-label">Kristen Protestan</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="agama" id="agama_2" type="radio" required="required" class="custom-control-input" value="hindu"> 
            <label for="agama_2" class="custom-control-label">Hindu</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="agama" id="agama_3" type="radio" required="required" class="custom-control-input" value="buddha"> 
            <label for="agama_3" class="custom-control-label">Buddha</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="agama" id="agama_4" type="radio" required="required" class="custom-control-input" value="kristen katolik"> 
            <label for="agama_4" class="custom-control-label">Kristen Katolik</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="agama" id="agama_5" type="radio" required="required" class="custom-control-input" value="konghucu"> 
            <label for="agama_5" class="custom-control-label">Konghucu</label>
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="divisi" class="col-4 col-form-label">Divisi</label> 
        <div class="col-8">
        <select id="divisi" name="divisi" class="custom-select" required="required">
            <option value="" disabled selected>-- Pilih Divisi --</option>
            <?php foreach ($obj->divisi() as $p) { ?>
                <option value="<?= $p['id_divisi'] ?>"><?= $p['nama'] ?></option>
            <?php } ?>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="foto" class="col-4 col-form-label">Foto</label> 
        <div class="col-8">
        <input id="foto" name="foto" type="file" class="form-control" required="required">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" value="add" class="btn btn-primary">Add</button>
        </div>
    </div>
</form>