<?php
if (isset($_POST['Submit'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $makanan = $_POST['makanan'];

  include_once("../config.php");


  $result = mysqli_query($mysqli, "INSERT INTO tb_food(nama,alamat,makanan) VALUES('$nama','$alamat','$makanan')");

  echo "Order success Wait Driver. <a href='../index.php'></a>";
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <title>Durkos-Food</title>
</head>

<body>
  <a class="back" href="../index.php"><i class="bi bi-arrow-left"></i><br>Back</a>
  <h1 style="text-align: center;">Durkos-Food</h1>
  <h2 style="text-align: center;">Makan Apapun jadi kenyang dengan Durkos-Food</h2>

  <section>
    <form action="food.php" method="post" name="Food">
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-8">
          <input type="Text" class="form-control" name="nama">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat Tujuan(Detail)</label>
        <div class="col-sm-8">
          <input type="Text" class="form-control" name="alamat">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Makanan</label>
        <div class="col-sm-8">
          <input type="Text" class="form-control" id="Pickup Point" name="makanan" placeholder="Tuliskan Makanan Yang ingin anda pesan">
        </div>
      </div>
      <div class="col-8">
        <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </section>
  <br><br><br><br>

  <section>
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
  </section>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>