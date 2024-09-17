<?php
// 1. Membuat Class dan Object
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

    // 2. Implementasi Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data
    public function tampilkanData() {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan.";
    }

    // 3. Membuat Metode Tambahan
    public function updateJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // Metode setter untuk mengubah NIM
    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }
}

// 4. Penggunaan Atribut dan Metode
// Instansiasi objek
$mahasiswa1 = new Mahasiswa("Aditya Nugroho", "230302073", "Teknik Informatika");

// Tampilkan data mahasiswa
echo $mahasiswa1->tampilkanData() . "<br>";

// Mengubah jurusan
$mahasiswa1->updateJurusan("Sistem Informasi");
echo $mahasiswa1->tampilkanData() . "<br>";

// Mengubah NIM menggunakan metode setter
$mahasiswa1->setNim("230302999");
echo $mahasiswa1->tampilkanData();
echo "<br>";
$mahasiswa1->setNama("Sidiq");
echo $mahasiswa1->tampilkanData(). "<br>";
?>
