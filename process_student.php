<?php
$servername = "localhost"; // Database server
$username = "root"; // Database username
$password = "12345"; // Database password
$dbname = "id_card_app"; // Database name

// Create connection
$conn = new mysqli( "localhost",  "root",  "", "id_card_app", "3307" );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect data from POST request
$name = $_POST['name'];
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$class = $_POST['class'];
$section = $_POST['section'];
$dob = $_POST['dob'];

// Create SQL query to insert data
$sql = "INSERT INTO students (name, f_name, m_name, mobile, address, class, section, dob) 
        VALUES ('$name', '$f_name', '$m_name', '$mobile', '$address', '$class', '$section', '$dob')";

if ($conn->query($sql) === TRUE) {
    echo "New student added successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
<a href="admin_panel.php">Go to Admin Panel</a>
