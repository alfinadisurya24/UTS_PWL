<?php
class Pegawai{
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataPegawai()
    {
        $sql = "SELECT a.*, b.nama as nama_divisi FROM pegawai a INNER JOIN divisi b ON a.iddivisi = b.id_divisi";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function detailPegawai($id)
    {
        $sql = "SELECT a.*, b.nama as nama_divisi FROM pegawai a INNER JOIN divisi b ON a.iddivisi = b.id_divisi WHERE a.id_pegawai = ".$id;
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();
        return $rs;
    }

    public function divisi()
    {
        $sql = "SELECT * FROM divisi ORDER BY nama";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function simpan($data)
    {
        $sql    = 'INSERT INTO pegawai(nip,nama,email,agama,iddivisi,foto) VALUES (?, ?, ?, ?, ?, ?)';
        try {
            $ps     = $this->koneksi->prepare($sql);
            $ps->execute($data);
        } catch( PDOException $e ) {
            echo $e->getMessage(); // error message
        }
    }

    public function edit($data, $id)
    {
        if (!isset($data[5])) {
            $sql    = 'UPDATE pegawai SET nip = ?, nama = ?, email = ?, agama = ?, iddivisi = ? WHERE id_pegawai = '.$id;
        }else{
            $sql    = 'UPDATE pegawai SET nip = ?, nama = ?, email = ?, agama = ?, iddivisi = ?, foto = ? WHERE id_pegawai = '.$id;
        }
        try {
            $ps     = $this->koneksi->prepare($sql);
            $ps->execute($data);
        } catch( PDOException $e ) {
            echo $e->getMessage(); // error message
        }
    }

    public function delete($id)
    {
        $sql    = 'DELETE FROM pegawai WHERE id_pegawai = '.$id;   
        try {
            $ps     = $this->koneksi->prepare($sql);
            $ps->execute($data);
        } catch( PDOException $e ) {
            echo $e->getMessage(); // error message
        }
    }
}