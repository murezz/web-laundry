<?php

$title = 'Buat Outlet';

require '../layouts/header.php';

require '../../public/app.php';


if (isset($_POST['submit'])) {

    if (addOutlet($_POST) > 0) {
        header("location: addUser.php");
    } else {
        echo mysqli_error($conn);
    }
}

?>



<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-6">
            <div class="image mt-5">
                <img src="../../assets/img/outlet-hero.svg" width="500" alt="">
            </div>
        </div>
        <div class="col-6">
            <div class="form">
                <form action="" method="POST">
                    <h1 class="text-center text-info">
                        <i class="fas fa-store text-info"></i>
                        Buka Outlet
                    </h1>
                    <hr>
                    <div class="form-group">
                        <label class="text-gray-800 font-weight-bold" for="nama">Nama Outlet</label>
                        <input type="text" class="form-control" id="nama" style="border-radius: 20px;" name="nama">
                    </div>
                    <div class="form-group">
                        <label class="text-gray-800 font-weight-bold" for="telp">No Telepon</label>
                        <input type="number" class="form-control" id="telp" style="border-radius: 20px;" name="tlp">
                    </div>
                    <div class="form-group">
                        <label class="text-gray-800 font-weight-bold" for="alamat">Alamat Outlet</label>
                        <textarea name="alamat" id="alamat" class="form-control" rows="3" style="border-radius: 20px;"></textarea>
                    </div>
                    <button class="btn btn-info" type="submit" name="submit">Buat!</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php require '../layouts/footer.php'; ?>