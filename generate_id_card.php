<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "id_card_app";

// Create connection
$conn = new mysqli( "localhost",  "root",  "", "id_card_app", "3307");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id = $id");
$student = $result->fetch_assoc();

if ($student) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ID Card</title>
        <style>
            .id-card {
                width: 300px;
                border: 1px solid #000;
                padding: 10px;
                margin: 20px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="id-card">
            <h2>ID Card</h2>
            <p><strong>Name:</strong> <?= $student['name'] ?></p>
            <p><strong>Father's Name:</strong> <?= $student['f_name'] ?></p>
            <p><strong>Mother's Name:</strong> <?= $student['m_name'] ?></p>
            <p><strong>Mobile:</strong> <?= $student['mobile'] ?></p>
            <p><strong>Address:</strong> <?= $student['address'] ?></p>
            <p><strong>Class:</strong> <?= $student['class'] ?></p>
            <p><strong>Section:</strong> <?= $student['section'] ?></p>
            <p><strong>Date of Birth:</strong> <?= $student['dob'] ?></p>
        </div>
    </body>
    </html>
    <?php
} else {
    echo "Student not found.";
}

$conn->close();
?>
