<?php
include('server.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['update_user'])) {
    $id = $_POST['id'];
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);

    // Lakukan validasi form di sini jika diperlukan

    // Lakukan update ke database
    $query = "UPDATE users SET username='$username', email='$email' WHERE id=$id";
    mysqli_query($db, $query);

    // Redirect ke halaman setelah update
    header('Location: crud.php');
    exit();
  }
}
?>
