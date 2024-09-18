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

    public function tampilkanData() {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan.";
    }

    // 3. Membuat Metode Tambahan
    public function updateJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

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
echo "<br>";
// Mengubah jurusan
$mahasiswa1->updateJurusan("Sistem Informasi");
echo $mahasiswa1->tampilkanData() . "<br>";
echo "<br>";
// Mengubah NIM menggunakan metode setter
$mahasiswa1->setNim("230302991");
echo $mahasiswa1->tampilkanData();
echo "<br>";
$mahasiswa1->setNama("Sidiq");
echo $mahasiswa1->tampilkanData(). "<br>";
echo "<br>";
$mahasiswa1->updateJurusan("Multimedia");
echo $mahasiswa1->tampilkanData(). "<br>";
?>
