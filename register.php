<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "student_db");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];
$gender = $_POST['gender'];
$created_at = date('Y-m-d');

// Insert into DB
$sql = "INSERT INTO students (name, email, course, gender, created_at) 
        VALUES ('$name', '$email', '$course', '$gender', '$created_at')";

if ($conn->query($sql) === TRUE) {
  echo "Registration successful.<br>";
  echo "<a href='report.php'>View All Students</a>";
} else {
  echo "Error: " . $conn->error;
}
$conn->close();
?>
