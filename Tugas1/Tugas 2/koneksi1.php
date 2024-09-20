<?php
Class Mahasiswa {
    public $localhost;
    public $user;
    public $pass;
    public $dbname;
    protected $conn;
    public function __construct($localhost, $user, $pass, $dbname) {
        $this->conn = new mysqli($localhost, $user, $pass, $dbname);
        if ($this->conn->connect_error) {
            die("Connection gagal: " . $this->conn->connect_error);  
        }
    }
    public function tampilkantugas2(){
        $sql = "SELECT * FROM tugas2";
        $result = $this->conn->query($sql);            
        }
    }

$localhost = "localhost";
$user = "root";
$pass = "";
$dbname = "tugas2";

$mahasiswa = new Mahasiswa($localhost, $user, $pass, $dbname);
$datamahasiswa = $mahasiswa->tampilkantugas2();
?>