<?php
Class Mahasiswa{
    public function fetchData(){
        return [
            ['tanggal_perbaikan' =>'1-12-2024', 'keterangan' => 'remidi', 'mahasiswa_ID' => '12345', 
            'mata_kuliah_ID' =>'67890', 'semester_ID' => '0001', 'nilai_ID' => '100', 'dosen_ID' => '1000'],
            ['tanggal_perbaikan' => '2-12-2024', 'keterangan' => 'remidi', 'mahasiswa_ID' => '12346', 
            'mata_kuliah_ID' => '67891', 'semester_ID' => '0002', 'nilai_ID' => '200', 'dosen_ID' => '2000'],
            ['tanggal_perbaikan' => '3-12-2024', 'keterangan' => 'uas', 'mahasiswa_ID' => '12347', 
            'mata_kuliah_ID' => '67892', 'semester_ID' => '0003', 'nilai_ID' => '300', 'dosen_ID' => '3000'],
            ['tanggal_perbaikan' => '4-12-2024', 'keterangan' => 'uas', 'mahasiswa_ID' => '12348', 
            'mata_kuliah_ID' => '67893', 'semester_ID' => '0004', 'nilai_ID' => '400', '4000'],
            ['tanggal_perbaikan' => '5-12-2024', 'keterangan' => 'remidi', 'mahasiswa_ID' => '12349', 
            'mata_kuliah_ID' => '67894', 'semester_ID' => '0005', 'nilai_ID' => '500', 'dosen_ID' => '5000'],
        ];
    }
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perbaikan Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style = "background-color:blanchedalmond">
    <h1 class ="text-center">Data Nilai Perbaikan Mahasiswa</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <table> 
    <form action="mahasiswa.php" method="post">
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col" class = "text-center">NO</th>
      <th scope="col" class = "text-center">Tanggal Perbaikan</th>
      <th scope="col" class = "text-center">Keterangan</th>
      <th scope="col" class = "text-center">Mahasiswa ID</th>
      <th scope="col" class = "text-center">Mata Kuliah ID</th>
      <th scope="col" class = "text-center">Semester ID</th>
      <th scope="col" class = "text-center">Nilai ID</th>
      <th scope="col" class = "text-center">Dosen ID</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>1-12-2024</td>
      <td>Remidi</td>
      <td>12345</td>
      <td>67890</td>
      <td>0001</td>
      <td>100</td>
      <td>1000</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>2-12-2024</td>
        <td>Remidi</td>
        <td>12346</td>
        <td>67891</td>
        <td>0002</td>
        <td>200</td>
        <td>2000</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>3-12-2024</td>
        <td>UAS</td>
        <td>12347</td>
        <td>67892</td>
        <td>0003</td>
        <td>300</td>
        <td>3000</td>
    </tr>
    <tr>
        <th scope= "row">4</th>
        <td>4-12-2024</td>
        <td>UAS</td>
        <td>12348</td>
        <td>67893</td>
        <td>0004</td>
        <td>400</td>
        <td>4000</td>
    </tr>
    <tr>
        <th scope= "row">5</th>
        <td>5-12-2024</td>
        <td>Remidi</td>
        <td>12349</td>
        <td>67894</td>
        <td>0005</td>
        <td>500</td>
        <td>5000</td>
    </tr>
  </tbody>
</table>
</table>
</body>
</html>