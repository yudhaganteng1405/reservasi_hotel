<?php   

 if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // Redirect to a different page or show an error message
    echo "<script>alert('Anda tidak dapat mengakses halaman ini.');
    window.location.href = 'INDEX.PHP';</script>"; // Redirect to an error page
    exit(); // Stop further execution of the script
}
?>

<?php
include("KONEKSI.PHP");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama_pemesan = addslashes ($_POST['nama_pemesan']);
    $lauk_utama = $_POST['lauk_utama'];
    $lauk_tambahan_satu = $_POST['lauk_tambahan_satu'];
    $lauk_tambahan_dua = $_POST['lauk_tambahan_dua'];
    $catatan = $_POST['catatan'];
    
    // Query untuk update data berdasarkan ID
    $query = "UPDATE tb_pesanan SET 
                nama_pemesan = '$nama_pemesan', 
                lauk_utama = '$lauk_utama', 
                lauk_tambahan_satu = '$lauk_tambahan_satu', 
                lauk_tambahan_dua = '$lauk_tambahan_dua', 
                catatan = '$catatan' 
              WHERE id = $id";
    
    if (mysqli_query($conn, $query)) {
        mysqli_close($conn);
        echo "<script>
        alert('Data Berhasil Diubah');
        window.location.href='PESANAN.PHP';
      </script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    echo "Metode request tidak valid.";
}

mysqli_close($conn);
?>
