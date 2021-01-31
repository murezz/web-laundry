<?php

$title = 'Login';

require '../layouts/header.php';

require '../../public/app.php';


if (isset($_POST['submit'])) {

  if (loginMember($_POST) > 0) {
    header("location: index.php");
  } else {
    echo mysqli_error($conn);
  }
}


?>


<div class="container mt-5">
  <div class="d-flex justify-content-center">
    <div class="card w-75 mt-5 shadow">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <div class="image text-center mt-3">
              <img src="../../assets/img/login.svg" width="350" alt="">
              <h1 class="text-uppercase text-info">welcome</h1>
              <h4 class="font-weight-bold text-info">laundry express</h4>
            </div>
          </div>
          <div class="col">
            <div class="form">
              <form action="" method="post">
                <h3 class="text-center text-capitalize text-info">isi data diri anda</h3>
                <hr>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nama" name="nama">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" placeholder="No Telepon" name="tlp">
                </div>
                <div class="form-group">
                  <textarea class="form-control" placeholder="Alamat" name="alamat" rows="2"></textarea>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="L" name="jenis_kelamin" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                    Laki - Laki
                  </label>
                  <input class="form-check-input ml-1" type="checkbox" value="P" name="jenis_kelamin" id="defaultCheck2">
                  <label class="form-check-label ml-4" for="defaultCheck2">
                    Perempuan
                  </label>
                </div>
                <button type="submit" class="btn btn-info mt-3" name="submit">Masuk</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php require '../layouts/footer.php' ?>