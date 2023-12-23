<?php 
  include('server.php');

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id=$id";
    mysqli_query($db, $query);
  }

  header('Location: crud.php');
  exit();
?>