<?php

$title = 'Buat Outlet';

require '../layouts/header.php';

require '../../public/app.php';


$result = mysqli_query($conn, "SELECT * FROM outlet ORDER BY id DESC LIMIT 1");
$id1 = mysqli_query($conn, "SELECT * FROM outlet ORDER BY id DESC LIMIT 1");
$id2 = mysqli_query($conn, "SELECT * FROM outlet ORDER BY id DESC LIMIT 1");
$id3 = mysqli_query($conn, "SELECT * FROM outlet ORDER BY id DESC LIMIT 1");


if (isset($_POST['owner'])) {

    if (addUser($_POST) > 0) {
        $okowner = true;
    } else {
        echo mysqli_error($conn);
    }
}

if (isset($_POST['kasir'])) {

    if (addUser($_POST) > 0) {
        $okkasir = true;
        $okowner = true;
    } else {
        echo mysqli_error($conn);
    }
}

if (isset($_POST['admin'])) {

    if (addUser($_POST) > 0) {
        $okadmin = true;
        $okkasir = true;
        $okowner = true;
    } else {
        echo mysqli_error($conn);
    }
}


?>



<div class="container mt-5">
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <div class="row">
            <div class="col">
                <h3 class="text-gray-800 font-weight-bold"><i class="fas fa-store"></i> Nama Outlet :
                    <span class="font-italic"><?= $row['nama']; ?>.</span>
                </h3>
            </div>
            <div class="col">
                <div class="d-flex justify-content-end">
                    <a href="index.php" class="btn btn-info <?php if (!isset($_POST["admin"])) echo 'disabled' ?>">Lanjut Ke Dashboard</a>
                </div>
            </div>
        </div>
        <hr>
    <?php endwhile; ?>
    <div class="row mt-5">
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body">
                    <?php if (isset($okowner)) : ?>
                        <div class="alert bg-success" role="alert">
                            <span class="text-center text-light font-weight-bold">Owner berhasil di tambahkan!</span>
                        </div>
                    <?php endif; ?>
                    <h1 class="text-center text-info">Owner</h1>
                    <hr>
                    <form action="" method="POST">

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Owner" name="nama">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <?php while ($row = mysqli_fetch_assoc($id1)) : ?>
                            <input type="hidden" class="form-control" value="<?= $row['id']; ?>" name="id_outlet">
                        <?php endwhile; ?>
                        <div class="form-group">
                            <input type="hidden" class="form-control" value="owner" name="role">
                        </div>
                        <button class="btn btn-info" type="submit" name="owner">OK!</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body">
                    <?php if (isset($okkasir)) : ?>
                        <div class="alert bg-success" role="alert">
                            <span class="text-center text-light font-weight-bold">Kasir berhasil di tambahkan!</span>
                        </div>
                    <?php endif; ?>
                    <h1 class="text-center text-info">Kasir</h1>
                    <hr>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama kasir" name="nama">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <?php while ($row = mysqli_fetch_assoc($id2)) : ?>
                            <div class="form-group">
                                <input type="hidden" class="form-control" value="<?= $row['id']; ?>" name="id_outlet">
                            </div>
                        <?php endwhile; ?>
                        <div class="form-group">
                            <input type="hidden" class="form-control" value="kasir" name="role">
                        </div>
                        <button class="btn btn-info" type="submit" name="kasir">OK!</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body">
                    <?php if (isset($okadmin)) : ?>
                        <div class="alert bg-success" role="alert">
                            <span class="text-center text-light font-weight-bold">Admin berhasil di tambahkan!</span>
                        </div>
                    <?php endif; ?>
                    <h1 class="text-center text-info">Admin</h1>
                    <hr>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Admin" name="nama">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <?php while ($row = mysqli_fetch_assoc($id3)) : ?>
                            <div class="form-group">
                                <input type="hidden" class="form-control" value="<?= $row['id']; ?>" name="id_outlet">
                            </div>
                        <?php endwhile; ?>
                        <div class="form-group">
                            <input type="hidden" class="form-control" value="admin" name="role">
                        </div>
                        <button class="btn btn-info" type="submit" name="admin">OK!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require '../layouts/footer.php'; ?>