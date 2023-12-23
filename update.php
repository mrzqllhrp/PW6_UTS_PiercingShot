<?php include('server.php');

if (!isset($_GET['id'])) {
  header('Location: crud.php');
  exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($db, $query);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Update User</title>
  <link rel="stylesheet" type="text/css" href="update.css">
</head>
<body>
  <div class="header">
    <h2>Update User</h2>
  </div>

  <form method="post" action="update_process.php">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $user['username']; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $user['email']; ?>">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="update_user">Update</button>
    </div>
  </form>
</body>
</html>
