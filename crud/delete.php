<?php
 include 'koneksi.php';
// Ambil data ID dari URL
$id = $_GET["id"];
// Query untuk menghapus data berdasarkan ID
$sql = "DELETE FROM users WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    // Redirect ke halaman utama setelah berhasil menghapus data
    header("Location: beranda.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>