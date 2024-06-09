<?php
class Buku {
    private $ISBN;
    private $Judul;
    private $Penulis;
    private $Penerbit;
    private $Tahun_Terbit;
    private $Genre;
    private $Stok;
    private $Ketersediaan;

    public function __construct($ISBN, $Judul, $Penulis, $Penerbit, $Tahun_Terbit, $Genre, $Stok, $Ketersediaan) {
        $this->ISBN = $ISBN;
        $this->Judul = $Judul;
        $this->Penulis = $Penulis;
        $this->Penerbit = $Penerbit;
        $this->Tahun_Terbit = $Tahun_Terbit;
        $this->Genre = $Genre;
        $this->Stok = $Stok;
        $this->Ketersediaan = $Ketersediaan;
    }

    public function Ditambahkan() {
        
    }

    public function Diedit() {
        
    }

    public function Dihapus() {
        
    }

    public function Dipinjam() {
       
    }

    public function Dikembalikan() {
        // Logic untuk dikembalikan
    }
}
