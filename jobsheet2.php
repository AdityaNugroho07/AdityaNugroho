<?php
// 1. Class dan Object
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // 2. Encapsulation
    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getJurusan() {
        return $this->jurusan;
    }

    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        return "Nama: " . $this->nama . ", NIM: " . $this->nim . ", Jurusan: " . $this->jurusan;
    }
}

// 3. Inheritance
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function getMataKuliah() {
        return $this->mataKuliah;
    }

    public function tampilkanDataDosen() {
        return "Nama: " . $this->nama . ", Mata Kuliah: " . $this->mataKuliah;
    }
}

// 4. Polymorphism
class PenggunaPolymorph {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function aksesFitur() {
        return $this->nama . " mengakses fitur umum.";
    }
}

class Dosenpoly extends PenggunaPolymorph {
    public function aksesFitur() {
        return $this->nama . " mengakses fitur dosen.";
    }
}

class MahasiswaPoly extends PenggunaPolymorph {
    public function aksesFitur() {
        return $this->nama . " mengakses fitur mahasiswa.";
    }
}

// 5. Abstraction
abstract class PenggunaAbstraction {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }
    abstract public function aksesFitur();
}

class MahasiswaAbstraction extends PenggunaAbstraction {
    public function aksesFitur() {
        return $this->nama . " mengakses fitur mahasiswa.";
    }
}

class DosenAbstraction extends PenggunaAbstraction {
    public function aksesFitur() {
        return $this->nama . " mengakses fitur dosen.";
    }
}

$mahasiswa = new Mahasiswa("Aditya Nugroho", "230302073", "Teknik Informatika");
echo $mahasiswa->tampilkanData() . "<br>";

$dosen = new Dosen("Budi", "Matematika");
echo $dosen->tampilkanDataDosen() . "<br>";

$dosenPoly = new DosenPoly("Budi");
$mahasiswaPoly = new MahasiswaPoly("Aditya Nugroho");

echo $dosenPoly->aksesFitur() . "<br>";
echo $mahasiswaPoly->aksesFitur() . "<br>";

$dosenAbstrak = new DosenAbstraction("Budi");
$mahasiswaAbstrak = new MahasiswaAbstraction("Aditya Nugroho");

echo $dosenAbstrak->aksesFitur() . "<br>";
echo $mahasiswaAbstrak->aksesFitur() . "<br>";
?>
