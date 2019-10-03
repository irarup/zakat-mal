<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
  <title>Zakat Hewan Ternak</title>
</head>
<body>
<div class="judul">
<h1>Zakat Hewan Ternak</h1>
<br><br>
</div>
<div class="container">
<form action="zakat-hewan.php" method="post">
      <div class="form-group">
         <label for="jenis">Pilih jenis hewan ternak :</label>
        <div class="inpt selectContainer">
            <select class="form-control" name="jenis">
                <option value="">Pilih jenis hewan</option>
                <option value="unta">Unta</option>
                <option value="sapi">Sapi atau Kerbau</option>
                <option value="kambing">Kambing atau domba</option>
            </select>
        </div>
      </div>

      <div class="form-group">
        <label for="jumlah">Jumlah hewan ternak :</label>
        <div class="inpt input-group">
          <input type="number" class="form-control" id="jumlah" name="jumlah" aria-describedby="jumlah">
          <span class="input-group-addon" id="jumlah"> Ekor</span>
        </div>
      </div>

    <div class="hit form-group">
    <input type="submit" class="btn_ btn btn-info" value="Hitung">
    </div>

</form>
</div>

<?php
  error_reporting(0);

  $jenis = $_POST[jenis];
  $jumlah = $_POST[jumlah];


  if(empty($jenis)){  
      $ket = "<div class='alert alert-danger'>Mohon pilih <b>jenis hewan ternak</b> !! </div>";
  }
    elseif (empty($jumlah)) {
      $ket = "<div class='alert alert-danger'>Jumlah Hewan <b>tidak boleh kosong</b> !! </div>";
    }
    else{  

        if ($jenis == "unta") {
            if( ($jumlah >= 5) && ($jumlah <= 9)){
                $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor KAMBING/DOMBA </b> ";
            }
            elseif(($jumlah >= 10) && ($jumlah <= 14)){
                $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 2 ekor KAMBING/DOMBA </b> ";
            }
            elseif(($jumlah >= 15) && ($jumlah <= 19)){
                $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 3 ekor KAMBING/DOMBA </b> ";
            }
            elseif(($jumlah >= 20) && ($jumlah <= 24)){
                $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 4 ekor KAMBING/DOMBA </b> ";
            }
            elseif(($jumlah >= 25) && ($jumlah <= 35)){
                $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor UNTA BETINA 1 tahun </b> ";
            }
            elseif(($jumlah >= 36) && ($jumlah <= 45)){
                $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor UNTA BETINA 2 tahun </b> ";
            }
            elseif(($jumlah >= 46) && ($jumlah <= 60)){
                $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor UNTA BETINA 3 tahun </b> ";
            }
            elseif(($jumlah >= 61) && ($jumlah <= 75)){
                $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor UNTA BETINA 4 tahun </b> ";
            }
            elseif(($jumlah >= 76) && ($jumlah <= 90)){
                $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 2 ekor UNTA BETINA 2 tahun </b> ";
            }
            elseif(($jumlah >= 91) && ($jumlah <= 120)){
                $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 2 ekor UNTA BETINA 3 tahun </b> ";
            }
            elseif($jumlah >= 121 ){
                $ket = "<div class='alert alert-info'>Jika <b> LEBIH DARI 120 </b>, maka setiap <b>tambahan 50 Unta</b> seekor UNTA 3 tahun dan <b>tambahan 40 unta</b>  seekor UNTA 2 tahun </b>";
            }       
            else{
              $ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
              <br>*Anda wajib bayar zakat jika memiliki 5 atau lebih UNTA";
            }
        }
        elseif($jenis == "sapi"){
             if( ($jumlah >= 30) && ($jumlah <= 39)){
                $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor ANAK SAPI </b></div> ";
              }
              elseif(($jumlah >= 40) && ($jumlah <= 59)){
                  $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor SAPI 1 tahun</b> </div

                  > ";
              }
              elseif(($jumlah >= 60) && ($jumlah <= 69)){
                  $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor SAPI 1 tahun </b></div>";
              }
              elseif(($jumlah >= 70) && ($jumlah <= 79)){
                  $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 2 ekor ANAK SAPI</b> </div>";
              }
               elseif(($jumlah >= 80) && ($jumlah <= 89)){
                  $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor ANAK SAPI</b> dan <b> 1 ekor SAPI 2 tahun </b></div> ";
              }
              elseif(($jumlah >= 90) && ($jumlah <= 99)){
                  $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 2 ekor SAPI 2 tahun </b></div> ";
              }
              elseif(($jumlah >= 100) && ($jumlah <= 109)){
                  $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 3 ekor ANAK SAPI</b></div> ";
              }
              elseif(($jumlah >= 110) && ($jumlah <= 119)){
                  $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 2 ekor ANAK SAPI</b> dan <b> 1 ekor SAPI 2 tahun </b></div> ";
              }
              elseif($jumlah >= 120){
                  $ket = "<div class='alert alert-info'>Jika <b>LEBIH DARI 120</b>, maka setiap <b> pertambahan 30 ekor </b> seekor ANAK SAPI dan <b>pertambahan 40 ekor </b> seekor SAPI usia 2 tahun</div> ";
              }
              else{
                $ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
                <br>*Anda wajib bayar zakat jika memiliki 30 atau lebih SAPI";
              }
        }
        elseif($jenis == "kambing"){
              if( ($jumlah >= 40) && ($jumlah <= 120)){
                $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 1 ekor KAMBING/DOMBA </b></div> ";
              }
              elseif(($jumlah >= 121) && ($jumlah <= 200)){
                  $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 2 ekor KAMBING/DOMBA</b> </div

                  > ";
              }
              elseif(($jumlah >= 201) && ($jumlah <= 300)){
                  $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b> 3 ekor KAMBING/DOMBA</b> </div

                  > ";
              }
              elseif ($jumlah >= 301) {
                  $zakat = $jumlah/100;
                  $ket = "<div class='alert alert-info'>Zakat yang harus anda bayar sebanyak <b>" . floor($zakat) . " ekor KAMBING/DOMBA</b> </div>";
              }
              else{
                  $ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
                  <br>*Anda wajib bayar zakat jika memiliki 40 atau lebih KAMBING/DOMBA"";
              }

        }
}
?>

<div class="container">
<div> <?php echo $ket;?> </div>
</div>

</div>
</body>
</html>