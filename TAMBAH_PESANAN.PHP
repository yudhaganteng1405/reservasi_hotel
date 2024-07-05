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
    $nama_pemesan = addslashes ($_POST['nama_pemesan']);
    $lauk_utama = addslashes ($_POST['lauk_utama']);
    $lauk_tambahan_satu =  addslashes ($_POST['lauk_tambahan_satu']);
    $lauk_tambahan_dua = addslashes ($_POST['lauk_tambahan_dua']);
    $catatan = addslashes ($_POST['catatan']);

    $query = "INSERT INTO tb_pesanan (nama_pemesan, lauk_utama, lauk_tambahan_satu, lauk_tambahan_dua, catatan) VALUES ('$nama_pemesan', '$lauk_utama', '$lauk_tambahan_satu', '$lauk_tambahan_dua', '$catatan')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Data Berhasil Ditambahkan');
                window.location.href='PESANAN.PHP';
              </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
