<?php 
//include '../konfigurasi/config.php';
include 'fragment//header.php';
//include '../konfigurasi/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="style/css/table.css">
    <style>
         body {
    background-color: #808080;
         }
    </style>
</head>
<body>
  <br><br><br>
  <div class="container mt-8">
  <h2>Data Guest</h2>          
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>ID Guest</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>ID Room</th>
        <th>Type Room</th>
        <th>Price</th>
        
        <th>Action</th>
      </tr>
    </thead>
    <tbody>   
      <tr>
        <td>G0001</td>
        <td>Ujang Martin</td>
        <td>Martin69@gmail.com</td>
        <td>08123214732</td>
        <td>D001</td>
        <td>Deluxe</td>
        <td>5000000</td>
        <td>. . .</td>
      </tr>
      <tr>
        <td>G0002</td>
        <td>Thomas Slebew</td>
        <td>ThomSlebew@gmail.com</td>
        <td>08123213213</td>
        <td>L001</td>
        <td>Luxury</td>
        <td>10000000</td>
        <td>. . .</td>
      </tr>
      <tr>
        <td>G0003</td>
        <td>Mamank Recink</td>
        <td>Mangrecink@gmail.com</td>
        <td>08124355687</td>
        <td>S001</td>
        <td>Standar</td>
        <td>200000</td>
        <td>. . .</td>
      </tr>
    </tbody>
  </table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

</body>
</html>