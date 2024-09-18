<?php
Class Dosen{
    public $nama;
    public $nip;
    public $matakuliah;

    public function _construct($nama, $nip, $matakuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }

    public function tampilkaninfo() {
        return "Dosen: $this->nama, mempunyai nip $this->nip, mengajar matakuliah $this->matakuliah."; 
    }
}

$dosen1 = new Dosen("John Doe", "12345","Teknik Informatika");
echo $dosen1->tampilkaninfo();
?>

