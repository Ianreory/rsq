
<?php

require_once("koneksi.php");

if(isset($_POST['daftar'])){

    // filter data yang diinputkan
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);


    // menyiapkan query
    $sql = "INSERT INTO daftar (nama, email, password) 
            VALUES (:nama, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":nama" => $nama,
        ":email" => $email,
        ":password" => $password
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    if ($stmt->execute($params)) {
        header("Location: login.php");
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}