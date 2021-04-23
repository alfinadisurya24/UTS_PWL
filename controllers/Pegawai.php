<?php
require_once '../models/Pegawai.php';
require_once '../koneksi.php';

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$agama = $_POST['agama'];
$divisi = $_POST['divisi'];

$rand = rand();
$foto = $_FILES['foto']['name'];
$target_path = "../images/".$rand.'_'.basename($foto);
if(strlen($foto) > 50){
    echo "Nama foto harus memiliki kurang dari 50 karakter";die;
}

$submit = $_POST['submit'];

$data = [$nip, $nama, $email, $agama, $divisi, $rand.'_'.$foto];
$obj = new Pegawai();
switch ($submit) {
    case 'add':
        if (!move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) {
            echo "Gagal Upload Gambar";die;
        }
        $obj->simpan($data);
        break;
    case 'edit':
        $id = $_POST['id'];
        if ($foto != "") {
            if (!move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) {
                echo "Gagal Upload Gambar";die;
            }
        }else {
            array_pop($data);
        }
        $obj->edit($data, $id);
        break;
    case 'delete':
        $id = $_POST['id'];
        $obj->delete($id);
        break;
    default:
        header('location:../index.php?page=add_pegawai');
        break;
}

header('location:../index.php?page=dataPegawai');
?>