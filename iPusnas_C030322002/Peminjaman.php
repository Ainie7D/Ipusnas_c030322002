<?php
class Peminjaman {
    private $ID_Peminjaman;
    private $Anggota;
    private $Judul_Buku;
    private $Tanggal_Peminjaman;
    private $Tanggal_Pengembalian;
    private $Status;

    public function __construct($ID_Peminjaman, $Anggota, $Judul_Buku, $Tanggal_Peminjaman, $Tanggal_Pengembalian, $Status) {
        $this->ID_Peminjaman = $ID_Peminjaman;
        $this->Anggota = $Anggota;
        $this->Judul_Buku = $Judul_Buku;
        $this->Tanggal_Peminjaman = $Tanggal_Peminjaman;
        $this->Tanggal_Pengembalian = $Tanggal_Pengembalian;
        $this->Status = $Status;
    }

    public function Ditambahkan() {
        
    }

    public function Diedit() {
       
    }

    public function Dihapus() {
        
    }

    public function Diproses() {
     
    }
}