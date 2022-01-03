<?php
include_once("../config.php");

if (isset($_POST['Submit'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $tanggal_sewa = $_POST['tanggal_sewa'];
  $tanggal_balik = $_POST['tanggal_balik'];
  $jaminan = $_POST['jaminan'];
  $jenismobil = $_POST['jenismobil'];


  $result = mysqli_query($mysqli, "INSERT INTO tb_rent(nama,alamat,tanggal_sewa,tanggal_balik,jaminan,jenismobil) VALUES('$nama','$alamat','$tanggal_sewa','$tanggal_balik','$jaminan','$jenismobil')");

  echo "Order successfully.Wait For Driver Contact you <a href='../index.php'></a>";
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <title>Rent</title>
</head>

<body>

  <a class="back" href="../index.php"><i class="bi bi-arrow-left"></i><br>Back</a>
  <h2 style="text-align : center;">Rent</h2>
  <p style="text-align : center;">Anda Wisatawan? ingin jalan-jalan bersama keluarga tetapi tidak ada mobil? jangan risau ada durkost-RentCar </p>

  <form action="Rent.php" method="post" name="Rent">
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Penyewa</label>
      <div class="col-sm-5">
        <input type="Text" class="form-control" name="nama">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat Penyewa</label>
      <div class="col-sm-5">
        <input type="Text" class="form-control" name="alamat">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Penyewaan</label>
      <div class="col-sm-5">
        <input type="date" class="form-control" name="tanggal_sewa">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Selesai</label>
      <div class="col-sm-5">
        <input type="date" class="form-control" name="tanggal_balik">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputpengiriman" class="col-sm-2 col-form-label">Jaminan</label>
      <div class="col-sm-5">
        <select class="form-select" aria-label="Default select example" name="jaminan">
          <option value="ktp">KTP</option>
          <option value="kk">KK(kartu keluarga)</option>
          <option value="bpkb">BPKB</option>
        </select>
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputpengiriman" class="col-sm-2 col-form-label">Jenis Mobil</label>
      <div class="col-sm-5">
        <select class="form-select" aria-label="Default select example" name="jenismobil">
          <option value="Kecil">Mobil M (2-4 orang)</option>
          <option value="Sedang">Mobil L (4-6 orang)</option>
          <option value="Besar">Mobil XL (6-8 orang)</option>
        </select><br>
      </div>
    </div>
    <div class="col-12">
      <button type="Submit" name="Submit" class="btn btn-primary">Submit</button>
    </div>
    <br>
  </form>

  <!-- Footer -->
  <footer>
    <div class="me-md-auto text-center text-md-start">
      <div class="copyright">
        &copy; Copyright <strong><span>Durkosjek</span></strong>.
      </div>
      <div class="credits">
        Designed by <a href="#">Durkosjek Team</a>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>