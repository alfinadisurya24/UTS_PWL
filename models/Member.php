<?php
class Member
{
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function login($data)
    {
        $sql = "SELECT * FROM member WHERE username = ? AND password = SHA1(MD5( ? ))";
        $ps = $this->koneksi->prepare($sql);
        $ps->bindParam(1, $data[0]);
        $ps->bindParam(2, $data[1]);
        $ps->execute($data);
        $rs = $ps->fetch();
        // var_dump($rs);die;
        return $rs;
    }
}
