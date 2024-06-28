<?php
  // Connect to MySQL database
  $conn = mysqli_connect("localhost", "username", "password", "student");

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  // Insert data into MySQL database
  $sql = "INSERT INTO student_data (name, email, phone) VALUES ('$name', '$email', '$phone')";
  mysqli_query($conn, $sql);

  // Retrieve data from MySQL database
  $sql = "SELECT * FROM mytable";
  $result = mysqli_query($conn, $sql);

  // Display data
  while($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row['name'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Phone: " . $row['phone'] . "<br><br>";
  }

  // Close connection
  mysqli_close($conn);
?>