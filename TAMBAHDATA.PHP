<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // Redirect to a different page or show an error message
    echo "<script>alert('Anda tidak dapat mengakses halaman ini.');
    window.location.href = 'INDEX.PHP';</script>"; // Redirect to an error page
    exit(); // Stop further execution of the script
}

require('KONEKSI.PHP');

$fullname = addslashes($_POST['fullname']);
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['hp'];
$alamat = addslashes($_POST['alamat']);
$hobby = $_POST['hobby'];
$tanggal = $_POST['tanggal_lahir'];

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check if the email already exists
$email_check_query = "SELECT * FROM `tb_user` WHERE `EMAIL` = ? LIMIT 1";
$stmt = $conn->prepare($email_check_query);
if ($stmt === false) {
    die('Prepare failed: ' . htmlspecialchars($conn->error));
}
$stmt->bind_param("s", $email);
if ($stmt->execute() === false) {
    die('Execute failed: ' . htmlspecialchars($stmt->error));
}
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Email already exists
    echo "<script>
            alert('Email sudah terdaftar. Gunakan email lain.');
            window.location.href='REGISTER-V2.PHP';
          </script>";
} else {
    // Insert data into the database using prepared statements
    $sql = "INSERT INTO `tb_user`(`NAMA_LENGKAP`, `EMAIL`, `PASSWORD`, `NO_HP`, `ALAMAT`, `HOBBY`, `TANGGAL_LAHIR`) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }
    $stmt->bind_param("sssssss", $fullname, $email, $hashed_password, $phone, $alamat, $hobby, $tanggal);

    if ($stmt->execute() === TRUE) {
        header("Location: REGISTER-V2.PHP?success=true");
        exit();
    } else {
        echo "ERROR: " . htmlspecialchars($stmt->error);
    }
}

$stmt->close();
$conn->close();
?>
