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
    public function getnama() {
        return $this->nama;
    }

    public function setnama($nama) {
        $this->nama = $nama;
    }

    public function getnim() {
        return $this->nim;
    }

    public function setnim($nim) {
        $this->nim = $nim;
    }

    public function getjurusan() {
        return $this->jurusan;
    }

    public function setjurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    public function tampilkandata() {
        return "Nama: " . $this->nama . ", NIM: " . $this->nim . ", Jurusan: " . $this->jurusan;
    }
}

// 3. Inheritance
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getnama() {
        return $this->nama;
    }
}

class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function getmatakuliah() {
        return $this->mataKuliah;
    }

    public function tampilkandatadosen() {
        return "Nama: " . $this->nama . ", Mata Kuliah: " . $this->mataKuliah;
    }
}

// 4. Polymorphism
class PenggunaPolymorph {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function aksesfitur() {
        return $this->nama . " mengakses fitur umum.";
    }
}

class Dosenpoly extends PenggunaPolymorph {
    public function aksesfitur() {
        return $this->nama . " mengakses fitur dosen.";
    }
}

class MahasiswaPoly extends PenggunaPolymorph {
    public function aksesfitur() {
        return $this->nama . " mengakses fitur mahasiswa.";
    }
}

// 5. Abstraction
abstract class PenggunaAbstraction {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }
    abstract public function aksesfitur();
}

class MahasiswaAbstraction extends PenggunaAbstraction {
    public function aksesfitur() {
        return $this->nama . " mengakses fitur mahasiswa.";
    }
}

class DosenAbstraction extends PenggunaAbstraction {
    public function aksesfitur() {
        return $this->nama . " mengakses fitur dosen.";
    }
}

$mahasiswa = new Mahasiswa("Aditya Nugroho", "230302073", "Teknik Informatika");
echo $mahasiswa->tampilkandata() . "<br>";
echo "<br>";
$dosen = new Dosen("Harry", "Matematika");
echo $dosen->tampilkandatadosen() . "<br>";
echo "<br>";
$dosenPoly = new DosenPoly("Harry");
$mahasiswaPoly = new MahasiswaPoly("Aditya Nugroho");

echo $dosenPoly->aksesfitur() . "<br>";
echo "<br>";
echo $mahasiswaPoly->aksesfitur() . "<br>";
echo "<br>";

$dosenAbstrak = new DosenAbstraction("Harry");
$mahasiswaAbstrak = new MahasiswaAbstraction("Aditya Nugroho");

echo $dosenAbstrak->aksesfitur() . "<br>";
echo "<br>";
echo $mahasiswaAbstrak->aksesfitur() . "<br>";
?>
