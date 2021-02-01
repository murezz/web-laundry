<?php

$title = 'Dashboard';

require '../layouts/header.php';

require 'navbar.php';

require '../../public/app.php';

$result = mysqli_query($conn, "SELECT * FROM member ORDER BY id DESC LIMIT 1");

$outlet = mysqli_query($conn, "SELECT * FROM outlet ORDER BY id ASC LIMIT 4");


date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i");

if ($jam > "03:00" && $jam < "10:00") {
  $salam = "Pagi";
} else if ($jam >= "10:00" && $jam < "15:00") {
  $salam = "Siang";
} else if ($jam >= "15:00" && $jam < "18:00") {
  $salam = "Sore";
} else {
  $salam = "Malam";
}

?>

<div class="bg-info text-light p-5">
  <div class="container text-center">
    <h1 data-aos="zoom-in" data-aos-duration="600">Selamat Datang</h1>
    <h3 class="mb-5" data-aos="zoom-in" data-aos-duration="800">Di Laundry Express</h3>
  </div>
</div>

<div class="d-flex justify-content-center" style="margin-top: -50px;">
  <div class="card w-75 shadow" data-aos="fade-up">
    <div class="card-header bg-gray-200 text-gray-800">
      <div class="row">
        <div class="col">
          <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <h2 class="mt-3" data-aos="fade-right" data-aos-duration="1000">Selamat <?= $salam; ?>, <?= $row["nama"]; ?>.</h2>
            <h4 class="font-weight-bold" data-aos="fade-right" data-aos-duration="1800">ingin laundry di outlet mana?</h4>
          <?php endwhile; ?>
        </div>
        <div class="col">
          <div class="row">
            <div class="col">
              <div class="card" data-aos="fade-left" data-aos-duration="1000">
                <div class="card-body text-center">
                  <i class="fas fa-balance-scale-left fa-2x"></i>
                  <h6 class="mt-2 font-weight-bold">Kilogram</h6>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" data-aos="fade-left" data-aos-duration="1500">
                <div class="card-body text-center">
                  <i class="fas fa-tshirt fa-2x"></i>
                  <h6 class="mt-2 font-weight-bold">Pakaian</h6>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" data-aos="fade-left" data-aos-duration="1800">
                <div class="card-body text-center">
                  <i class="fas fa-shoe-prints fa-2x"></i>
                  <h6 class="mt-2 font-weight-bold">Sepatu</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <?php while ($row = mysqli_fetch_assoc($outlet)) : ?>
          <div class="col-3">
            <div class="card shadow-sm" data-aos="fade-up" data-aos-duration="1500">
              <div class="card-body">
                <div class="text-center mb-3">
                  <i class="fas fa-store fa-3x"></i>
                </div>
                <h5 class="font-weight-bold text-center"><?= $row["nama"]; ?></h5>
                <p><i class="fas fa-map-marker-alt"></i> <?= $row["alamat"]; ?></p>
                <h6 class="mb-3">Telp: <?= $row["telp"]; ?></h6>
                <a href="" class="btn btn-info col-12">Pilih Outlet</a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
      <div class="text-center mt-5">
        <a href="" class="btn btn-outline-warning col-4">Selengkapnya</a>
      </div>
    </div>
  </div>
</div>



<?php require '../layouts/footer.php'; ?>