<?php
$conn = new mysqli("localhost", "root", "", "student_db");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registered Students</title>
</head>
<body>
  <h2>Registered Students</h2>
  <table border="1" cellpadding="8">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Course</th>
      <th>Gender</th>
      <th>Registered At</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?= $row['id']; ?></td>
      <td><?= $row['name']; ?></td>
      <td><?= $row['email']; ?></td>
      <td><?= $row['course']; ?></td>
      <td><?= $row['gender']; ?></td>
      <td><?= $row['created_at']; ?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>

<?php $conn->close(); ?>
