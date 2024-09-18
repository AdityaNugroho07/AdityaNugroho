<?php
// 1. Implementasi kelas Person sebagai induk dari Dosen dan Mahasiswa
class Person {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Tambahkan metode getNama untuk mengakses nama
    public function getNama() {
        return $this->nama;
    }
}

// 2. Inheritance: Membuat kelas Dosen dan Mahasiswa yang mewarisi kelas Person
class Dosen extends Person {
    // 4. Encapsulation: Melindungi atribut nidn
    private $nidn;

    public function __construct($nama, $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }

    // 3. Polymorphism: membuat metode getRole() di kelas Dosen
    public function getRole() {
        return "Dosen";
    }

    public function getNidn() {
        return $this->nidn;
    }
}
    
class Mahasiswa extends Person {
    // 4. Encapsulation: Melindungi atribut nim
    private $nim;

    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    // 3. Polymorphism: membuat metode getRole() di kelas Mahasiswa
    public function getRole() {
        return "Mahasiswa";
    }

    public function getNim() {
        return $this->nim;
    }
}

// 5. Abstraction: Membuat kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;

    public function __construct($judul) {
        $this->judul = $judul;
    }
    abstract public function ajukanJurnal();
}

class JurnalDosen extends Jurnal {
    public function ajukanJurnal() {
        return "Jurnal dosen dengan judul '" . $this->judul . "' telah diajukan.";
    }
}

class JurnalMahasiswa extends Jurnal {
    public function ajukanJurnal() {
        return "Jurnal mahasiswa dengan judul '" . $this->judul . "' telah diajukan.";
    }
}

$dosen = new Dosen("Ryan", "123456789");
$mahasiswa = new Mahasiswa("Aditya Nugroho", "230302073");

echo $dosen->getNama() . " adalah seorang " . $dosen->getRole() . " dengan NIDN: " . $dosen->getNidn() . "<br>";
echo "<br>";
echo $mahasiswa->getNama() . " adalah seorang " . $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNim() . "<br>";
echo "<br>";

$jurnalDosen = new JurnalDosen("Pengaruh Orang Tua Dalam Mendidik Anak");
$jurnalMahasiswa = new JurnalMahasiswa("Pengaruh Pemanfaatan Aplikasi Smartphone Berbasis Android");

echo $jurnalDosen->ajukanJurnal() . "<br>";
echo "<br>";
echo $jurnalMahasiswa->ajukanJurnal() . "<br>";
?>
