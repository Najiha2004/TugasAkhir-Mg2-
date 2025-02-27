<?php
include 'config.php'; // Hubungkan dengan file konfigurasi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Mencegah SQL Injection
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $pesan = $conn->real_escape_string($pesan);

    // Simpan ke database
    $sql = "INSERT INTO Formulir (name, email, pesan) VALUES ('$name', '$email', '$pesan')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dikirim!'); window.location.href='tugasAkhir.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
