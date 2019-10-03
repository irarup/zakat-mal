<html>
	<head>
	  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
	 	<title> zakat emas dan perak </title>
	</head>
	
<body>
<div class="judul">
	<h1 align="center">Zakat Emas dan Perak</h1>
	<br> 
</div>
<div class="container">
	<form action="zakat-emasdanperak.php" method="post">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
			      <label for="perhiasan">Jenis Perhiasan :</label>
			      <div class="inpt selectContainer">
			        <select class="form-control" name="perhiasan">
			            <option value="">Pilih jenis perhiasan</option>
			            <option value="emas">Emas</option>
			            <option value="perak">Perak</option>
			        </select>
			        </div>
      			</div>
			    <div class="form-group">
			       <label for="simpan">Perhiasan yang dimiliki :</label>
			       <div class="inpt input-group">
			            <input type="number" class="inpt form-control" id="simpan" name="simpan">
			            <span class="input-group-addon">Gram</span>
			        </div>
			    </div>
			</div>
			<div class="col-md-6">
			    <div class="form-group">
			        <label for="simpan">Perhiasan yang pakai :</label>
			        <div class="inpt input-group">
			            <input type="number" class="inpt form-control" id="pakai" name="pakai">
			            <span class="input-group-addon">Gram</span>
			        </div>
			    </div>

				<div class="form-group">
					<label for="harga">Harga perhiasan :</label>
						<div class="inpt input-group">
							<span class="input-group-addon" id="harga">Rp.  </span>
							<input type="number" class="form-control" id="harga" name="harga" aria-describedby="harga">
							<span class="input-group-addon" id="harga">/gram  </span>
						</div>
		        </div>
			</div>
		</div>
		<div class="hit form-group">
			<input type="submit" class="btn_ btn btn-info" value="Hitung">
		</div>
	
	</form>
</div>

	
<?php
error_reporting (0);
$perhiasan = $_POST[perhiasan];
$simpan = $_POST[simpan];
$pakai = $_POST[pakai];
$harga = $_POST[harga];

$jumlah = $simpan - $pakai;

 if(empty($perhiasan)){  
      $ket = "<div class='alert alert-danger'>Mohon pilih <b>jenis perhiasan</b> !! </div>";
 }elseif (empty($simpan) || empty($harga)) {
 	  $ket = "<div class='alert alert-danger'>Jumlah perhiasan yg dimiliki dan harga perhiasan <b>tidak boleh kosong</b> !! </div>";
 }else{  

  	if ($perhiasan == "emas") {
		if($jumlah >= 85){
			 $zakat = ($jumlah * $harga) * 2.5/100;
			 $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar senilai <b>Rp. " . $zakat . ",- </b></div>
                <br> *Zakat dibayarkan jika mencapai haul 1 tahun";
		}else {
			$ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
                <br> *Anda bayar zakat jika sudah mencapai nisab 85 Gram Emas";
		}
 	}elseif($perhiasan == "perak"){
 		if($jumlah >= 595){
			 $zakat = ($jumlah * $harga) * 2.5/100;
			 $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar senilai <b>Rp. " . $zakat . ",- </b></div>
                <br> *Zakat dibayarkan jika mencapai haul 1 tahun";
		}else {
			$ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
                <br> *Anda bayar zakat jika sudah mencapai nisab 595 Gram Perak";
		}
 	}
 }
 ?>

<div class="container">
<div> <?php echo $ket; ?> </div>
</div>	

</body>
</head>
</html>