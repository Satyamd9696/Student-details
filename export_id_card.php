<?php
require('fpdf/fpdf.php'); // Ensure this path is correct

$servername = "localhost";
$username = "root";
$password = "12345"; // Make sure this password matches your MySQL password
$dbname = "id_card_app";
 

// Create connection
$conn = new mysqli("localhost", "root", "", "id_card_app", "3307");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize ID and fetch student data
$id = intval($_GET['id']); // Ensures $id is an integer

// Execute the query directly
$result = $conn->query("SELECT * FROM students WHERE id = $id");
$student = $result->fetch_assoc();

if ($student) {
    // Create PDF
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'ID Card', 0, 1, 'C');
    $pdf->Ln(10);

    $pdf->SetFont('Arial', '', 12);
    foreach ($student as $key => $value) {
        $pdf->Cell(0, 10, ucfirst(str_replace('_', ' ', $key)) . ': ' . $value, 0, 1);
    }

    $pdf->Output('I', 'id_card.pdf'); // Output the PDF to the browser
} else {
    echo "Student not found.";
}

// Close the connection
$conn->close();
?>


 