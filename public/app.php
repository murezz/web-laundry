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

function addOutlet($data)
{

    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $tlp = htmlspecialchars($data["tlp"]);

    $query = "INSERT INTO outlet VALUES ('', '$nama', '$alamat', '$tlp')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function addUser($data)
{

    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $id_outlet = htmlspecialchars($data["id_outlet"]);
    $role = htmlspecialchars($data["role"]);

    $query = "INSERT INTO user VALUES ('', '$nama', '$username', '$password', '$id_outlet', '$role')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
