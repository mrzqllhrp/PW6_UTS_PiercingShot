<?php
include('server.php');

// Ambil data dari database
$query = "SELECT * FROM users";
$result = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Management</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
  <div class="header">
    <h2>User List</h2>
  </div>

  <div class="content">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
              <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
              <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <div class="tombol">
    <a href="index.php"><button>back</button></a>
  </div>
</body>
</html>
