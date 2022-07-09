

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style/css/table.css"> -->
    <!-- Bootstrap 5 CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
         body {
    background-color: #808080;
         }
    </style>
</head>
<body>

    <!-- Header -->
    <?php 
    //include '../konfigurasi/config.php';
    include '../fragment/header.php';

    //include '../konfigurasi/function.php';
    ?>
    <!-- end -->

    
    <br>
    
    <div class="container">   

    <div class="card">
        <div class="card-header" style="background-color:#343A40; color:white">
            <h3 style="text-align:center;">Tambah Data Reservasi</h3>
        </div>
        <div class="card-body">
            <form class="form-inline" action="/action_page.php">   
                <div class="">
                    <label for="idguest">ID Guest</label>
                    <input class="form-control" type="text" name="idguest" id="idguest" required="required">
                </div>
                <div class="mt-2">
                    <label for="nama">Nama Guest</label>
                    <input class="form-control" type="text" name="namaguest" id="namaguest" required="required">
                </div>
                <div>
                    <label for="nama">ID Room</label>
                    <input class="form-control" type="text" name="namaguest" id="namaguest" required="required">
                </div>
                <div>
                    <label for="nama">Phone</label>
                    <input class="form-control" type="text" name="namaguest" id="namaguest" required="required">
                </div>
                <div>
                    <label for="nama">Email</label>
                    <input class="form-control" type="text" name="namaguest" id="namaguest" required="required">
                </div>
                <div>
                    <input class="btn btn-primary mt-2 float-right" style="width:15%;" type="submit" value="Save" id="submit" name="tambah">
                </div>
            </form>
        </div>
    </div>

    

        
    </div>

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- end script -->

</body>