<?php
Class Mahasiswa{
    public function fetchData(){
        return [
            ['nim' =>'230302073', 'nama' => 'Aditya Nugroho', 'alamat' => 'Jln. Rinjani', 
            'email' =>'aditclp1@gmail.com', 'no_telp' => '085865447232'],
            ['nim' => '230302074', 'nama' => 'Karl Heinz Rummenigge', 'alamat' => 'Jln. Kendeng', 
            'email' => 'heinz@gmail.com', 'no_telp' => '0858655447233'],
            ['nim' => '230302075', 'nama' => 'Juan Sebastian Veron', 'alamat' => 'Jln. Flores', 
            'email' => 'juansebastian@gmail.com', 'no_telp' => '0858655447234'],
            ['nim' => '230302076', 'nama' => 'Diego Milito', 'alamat' => 'Jln. Ahmad Yani', 
            'email' => 'milito@gmail.com', 'no_telp' => '085865447235'],
            ['nim' => '230302077', 'nama' => 'Filipo Inzaghi', 'alamat' => 'Jln. Dr. Sutommo', 
            'email' => 'filipo@gmail.com', 'no_telp' => '085865447236']
        ];
    }
}    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style ="background-color:aquamarine">
    <h1 class="text-center">Data Mahasiswa</h1>
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
      <th scope="col" class = "text-center">NIM</th>
      <th scope="col" class = "text-center">Nama Mahasiswa</th>
      <th scope="col" class = "text-center">Alamat</th>
      <th scope="col" class = "text-center">Email</th>
      <th scope="col" class = "text-center">No Telp</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>230302073</td>
      <td>Aditya Nugroho</td>
      <td>Jln. Rinjani</td>
      <td>aditclp1@gmail.com</td>
      <td>085865447232</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>230302074</td>
        <td>Karl Heinz Rummenigge</td>
        <td>Jln. Kendeng</td>
        <td>heinz@gmail.com</td>
        <td>0858655447233</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>230302075</td>
        <td>Juan Sebastian Veron</td>
        <td>Jln. Flores</td>
        <td>juansebastian@gmail</td>
        <td>0858655447234</td>
    </tr>
    <tr>
        <th scope= "row">4</th>
        <td>230302076</td>
        <td>Diego Milito</td>
        <td>Jln. Ahmad Yani</td>
        <td>milito@gmail.com</td>
        <td>085865447235</td>
    </tr>
    <tr>
        <th scope= "row">5</th>
        <td>230302077</td>
        <td>Filipo Inzaghi</td>
        <td>Jln. Dr. Sutommo</td>
        <td>filipo@gmail.com</td>
        <td>085865447236</td>
    </tr>
  </tbody>
</table>
</table>
</body>
</html>