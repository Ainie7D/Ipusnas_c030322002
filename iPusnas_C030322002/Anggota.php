<?php
class Anggota {
    private $ID_Anggota;
    private $Nama;
    private $Alamat;
    private $No_Telepon;
    private $Status_Keanggotan;
    private $Riwayat_Peminjaman;

    public function __construct($ID_Anggota, $Nama, $Alamat, $No_Telepon, $Status_Keanggotan, $Riwayat_Peminjaman) {
        $this->ID_Anggota = $ID_Anggota;
        $this->Nama = $Nama;
        $this->Alamat = $Alamat;
        $this->No_Telepon = $No_Telepon;
        $this->Status_Keanggotan = $Status_Keanggotan;
        $this->Riwayat_Peminjaman = $Riwayat_Peminjaman;
    }

    public function Mendaftar() {
        
    }

    public function Mencari_Buku() {
       
    }

    public function Memilih_Buku() {
        
    }

    public function Meminjam_Buku() {
        
    }

    public function Mengembalikan_Buku() {
        
    }

    public function Menambahkan_Buku() {
    
    }
}