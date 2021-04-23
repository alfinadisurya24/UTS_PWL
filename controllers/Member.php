<?php
session_start();
require_once '../models/Member.php';
require_once '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = [$username, $password];

$obj = new Member;
$rs = $obj->login($data);

if (!empty($rs)) {
    $_SESSION['MEMBER'] = $rs;
    header('location:../index.php');    
}else {
    header('location:../index.php?page=gagal_login');
}