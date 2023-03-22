<?php
include_once('navbar.php');
include_once('sidebar.php');
?>
<!-- Ini untuk buka konten -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Form belanja</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Belanja</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container py-4">
	<div class="row">
		<div class="col-md-12">
			<h2 style= "text-align: center;">
				Belanja Online
			</h2>
		</div>
	</div>
    <hr>
	<div class="row">
		<div class="col-md-6">
        <form method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Costumer</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Costumer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio"value="tv"> 
        <label for="produk_0">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" value="kulkas"> 
        <label for="produk_1">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" value="mesin cuci"> 
        <label for="produk_2" >Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>
		</div>
        <div class="col-md-6">
        <table class="table">
<thead class= > 
    <tr class="table-primary">
    <th scope="col">Daftar Harga</th>
    </tr>
</thead>
<tbody>
    <tr>
    
    <td>TV : 4.200.000</td>
    </tr>
    <tr>
    
    <td>Kulkas : 3.100.000</td>
    </tr>
    <tr>
    
    <td>Mesin Cuci : 3.800.000</td>
    </tr>
    <tr class="table-primary">
        <th>
            Harga Dapat Berubah Setiap Saat
        </th>
    </tr>
</tbody>
</table>

		</div>
	</div>
<div class= "row">
    <table class= "table">
    <tr class= "table table-primary">
        <td>Nama</td>
        <td>Produk</td>
        <td>Jumlah</td>
        <td>Total Harga</td>
    </tr>
    <?php
    if (isset($_POST["submit"])){
        $nama = $_POST["nama"]; 
        $produk = $_POST["produk"]; 
        $jumlah = $_POST["jumlah"]; 
            if ($produk == "tv"){
                $harga = 4200000;
            }elseif ($produk == "kulkas"){
                $harga = 3100000;
            }elseif ($produk == "mesin cuci"){
                $harga = 3800000;
            }
            $th = $harga * $jumlah
        ?>
    <tr>
        <td><?=$nama?></td>
        <td><?=$produk?></td>
        <td><?=$jumlah?></td>
        <td><?=$th?></td>
    </tr>
          
    <?php
    }?>
</table>
  </div>
</div>

</body>
</html>
</section>
</div>
<!-- ini untuk tutup konten -->
<?php
include_once('footer.php');
?>