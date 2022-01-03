<?php

// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
  $nama = $_POST['nama'];
  $no = $_POST['no'];
  $alamat_jemput = $_POST['alamat_jemput'];
  $alamat_tujuan = $_POST['alamat_tujuan'];

  // include database connection file
  include_once("../config.php");

  // Insert user data into table
  $result = mysqli_query($mysqli, "INSERT INTO tb_bike(nama,no,alamat_jemput,alamat_tujuan) VALUES('$nama','$no','$alamat_jemput','$alamat_tujuan')");
  // Show message when user added
  echo "Order Success Wait Driver Pick You. <a href='../index.php'>/a>";
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
  <title>Durkos-Bike</title>
</head>

<body style="padding: 20px;">
  <a class="back" href="../index.php"><i class="bi bi-arrow-left"></i><br>Back</a>
  <h1 style="text-align: center;">Durkos-Bike</h1>
  <h2 style="text-align: center;">Kemanapun Jadi Mudah dengan Durkos-Bike</h2>

  <section>
    <form action="bike.php" method="post" name="Bike">
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-6">
          <input type="Text" class="form-control" name="nama">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">NO Handphone</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" name="no">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Penjemputan</label>
        <div class="col-sm-6">
          <input type="Text" class="form-control" name="alamat_jemput">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat Tujuan</label>
        <div class="col-sm-6">
          <input type="Text" class="form-control" name="alamat_tujuan" required>
        </div>
      </div>
      <div class="col-12">
        <button type="Submit" name="Submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </section>
  <br><br><br><br><br><br>

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>