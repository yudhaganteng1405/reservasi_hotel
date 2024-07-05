<?php   

 if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // Redirect to a different page or show an error message
    echo "<script>alert('Anda tidak dapat mengakses halaman ini.');
    window.location.href = 'INDEX.PHP';</script>"; // Redirect to an error page
    exit(); // Stop further execution of the script
}
?>

<?php
session_start();
// Menghancurkan session
session_destroy();

// Mengarahkan pengguna ke halaman login atau halaman lain
echo "<script>
                window.location.href='INDEX.PHP';
              </script>";
exit();
?>