<?php

// include("add_student.php");

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
</head>
<body>
    <h1>List of Students</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Class</th>
            <th>Section</th>
            <th>Date of Birth</th>
            <th>Action</th>
            <th>New Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['f_name'] ?></td>
                <td><?= $row['m_name'] ?></td>
                <td><?= $row['mobile'] ?></td>
                <td><?= $row['address'] ?></td>
                <td><?= $row['class'] ?></td>
                <td><?= $row['section'] ?></td>
                <td><?= $row['dob'] ?></td>
                <td><a href="generate_id_card.php?id=<?= $row['id'] ?>">Generate ID Card</a></td>
                <td><a href="export_id_card.php?id=<?= $row['id'] ?>">Export Id Card</a></td>
            </tr>
        <?php endwhile; ?>
    </table>

    <a href="download_list.php" class="link-button"> <strong>Download List in excel file</strong></a>


</body>
</html>

<?php
$conn->close();
?>
