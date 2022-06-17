<?php
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "tugas10");

// daftar
if (isset($_POST['register'])) {
    // jika tombol daftar diklik
    $usename = $_POST['username'];
    $password = $_POST['password']; //password belum di enkripsi

    // enkripsi password menggunakan hash
    $epassword = password_hash($password, PASSWORD_DEFAULT);

    //insert ke database
    $insert = mysqli_query($koneksi, "INSERT INTO user (username, password) VALUES ('$usename', '$epassword')");

    if ($insert) {
        //jika berhasil
        header("location: index.php");
    } else {
        //jika gagal
        echo '
        <script>
            alert("Gagal Daftar!");
            window.location.href = "register.php";
        </script>
        ';
    }
}


// login
if (isset($_POST['login'])) {
    // jika tombol daftar diklik
    $usename = $_POST['username'];
    $password = $_POST['password']; //password belum di enkripsi

    //insert ke database
    $cekdb = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
    $hitung = mysqli_num_rows($cekdb);
    $pw = mysqli_fetch_array($cekdb);
    $passwordsekarang = $pw['password'];

    if ($hitung > 0) {
        //jika assdas, verifikasi password
        if (password_verify($password, $passwordsekarang)) {
            //jika password benar
            header('location: home.php');
        } else {
            //jika gagal
            echo '
        <script>
            alert("password salah!");
            window.location.href = "register.php";
        </script>
        ';
        }
    } else {
        //jika gagal
        echo '
        <script>
            alert("Gagal Daftar!");
            window.location.href = "register.php";
        </script>
        ';
    }
}
