<?php

$conn = mysqli_connect("localhost", "root", "", "laundry");



function loginMember($data)
{

    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $tlp = htmlspecialchars($data["tlp"]);

    $query = "INSERT INTO member VALUES ('', '$nama', '$alamat', '$jenis_kelamin', '$tlp')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
