<?php

$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "id_card_app";

// Create connection
$conn = new mysqli( "localhost",  "root", "", "id_card_app", "3307");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM students");
 

// Set headers for downloading the file as CSV
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=student_list.csv');

// Open a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// Write the column headers to the CSV file
fputcsv($output, array('ID', 'Name', 'Father\'s Name', 'Mother\'s Name', 'Mobile', 'Address', 'Class', 'Section', 'Date of Birth'));

// Query to get all students from the database
$result = $conn->query("SELECT * FROM students");

// Fetch each row and write it to the CSV file
while ($row = $result->fetch_assoc()) {
    fputcsv($output, $row);
}

// Close the database connection
$conn->close();
fclose($output);
exit;
?>
