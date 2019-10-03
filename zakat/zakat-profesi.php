<html>
	<head>
	  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
	 	<title> zakat profesi </title>
	</head>
	
<body>
<div class="judul">
	<h1 align="center">  Zakat Profesi  </h1>
	<br> 
</div>

<div class="container">
  <form action="zakat-profesi.php" method="post">
      <div class="form-group">
        <label for="jumlah">Jumlah Penghasilan :</label>
        <div class="inpt input-group">
          <span class="input-group-addon" id="jumlah">Rp.  </span>
          <input type="number" class="form-control" id="jumlah" name="jumlah" aria-describedby="jumlah_">
        </div>
      </div>
			
		<div class="form-group">
			<label for="pengeluaran">Pengeluaran Perbulan :</label>
				<div class="inpt input-group">
					<span class="input-group-addon" id="pengeluaran_">Rp.  </span>
					<input type="number" class="form-control" id="pengeluaran" name="pengeluaran" aria-describedby="pengeluaran_">
				</div>
        </div>
		

      <div class="form-group">
        <label for="harga">Harga Beras saat ini :</label>
        <div class="inpt input-group">
          <span class="input-group-addon" id="harga">Rp.  </span>
          <input type="number" class="form-control" id="harga" name="harga" aria-describedby="harga">
          <span class="input-group-addon" id="harga">/Kg  </span>
        </div>
      </div>
			
		<div class="hit form-group">
			<input type="submit" class="btn_ btn btn-info" value="Hitung">
		</div>
	
	</form>

	
<?php
error_reporting (0);
$jumlah = $_POST[jumlah];
$pengeluaran = $_POST[pengeluaran];
$harga = $_POST [harga];  

$hasil = $jumlah - $pengeluaran;
$nisab_ = 520 * $harga;

if (empty($jumlah) || empty($pengeluaran) || empty($harga)) {
	echo "<div class='alert alert-danger'>Penghasilan, pengeluaran dan harga beras <b>tidak boleh kosong</b> !! </div>";
}elseif ($hasil >= $nisab_) {
	$zakat = $hasil * 2.5/100;
	echo "<div class='alert alert-info'> ZAKAT yang anda keluarkan sebesar <b> Rp. " . $zakat . ",- </b></div>";
}else {
	echo"<div class='alert alert-info'><b> Anda belum wajib mengeluarkan ZAKAT </b></div>
	<br>*Anda wajib bayar zakat jika penhasilan setara dengan harga 520 kg BERAS atau Rp. $nisab_ ,-";
}

?>

</body>
</head>
</html>