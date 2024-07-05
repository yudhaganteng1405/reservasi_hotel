
<?php   

 if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // Redirect to a different page or show an error message
    echo "<script>alert('Anda tidak dapat mengakses halaman ini.');
    window.location.href = 'INDEX.PHP';</script>"; // Redirect to an error page
    exit(); // Stop further execution of the script
}
?>

<?php
include("koneksi.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    if (!empty($id)) {
        // Siapkan query untuk menghapus data berdasarkan ID
        $query = "DELETE FROM tb_pesanan WHERE id = ?";
        if ($stmt = $conn->prepare($query)) {
            // Bind parameter ID ke query
            $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                echo "Pesanan berhasil dihapus.";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "ID tidak valid.";
    }
}

$conn->close();
?>
