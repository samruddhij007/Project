<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "homePage";

// Establish connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$value = $_POST['value'];
$color = $_POST['color'];

// Insert data into database
$sql = "INSERT INTO your_table_name (value, color) VALUES ('$value', '$color')";

if ($conn->query($sql) === TRUE) {
    echo "Data saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
