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
    $email = mysqli_real_escape_string($conn, $_POST['EMAIL']);
    $nama_lengkap = mysqli_real_escape_string($conn, $_POST['NAMA_LENGKAP']);
    $password = mysqli_real_escape_string($conn, $_POST['PASSWORD']);
    $no_HP = mysqli_real_escape_string($conn, $_POST['NO_HP']);
    $alamat = mysqli_real_escape_string($conn, $_POST['ALAMAT']);
    $hobby = mysqli_real_escape_string($conn, $_POST['HOBBY']);
    $tanggal_lahir = mysqli_real_escape_string($conn, $_POST['TANGGAL_LAHIR']);

    $query = "UPDATE tb_user SET 
                NAMA_LENGKAP='$nama_lengkap', 
                PASSWORD='$password', 
                NO_HP='$no_HP', 
                ALAMAT='$alamat', 
                HOBBY='$hobby', 
                TANGGAL_LAHIR='$tanggal_lahir' 
              WHERE EMAIL='$email'";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Data Berhasil Diubah');
                window.location.href='PROFIL.PHP';
              </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>