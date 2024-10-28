<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>
    <form action="process_student.php" method="POST">
    Name: <input type="text" name="name" required><br>
    Father's Name: <input type="text" name="f_name" required><br>
    Mother's Name: <input type="text" name="m_name" required><br>
    Mobile: <input type="text" name="mobile" required><br>
    Address: <textarea name="address" required></textarea><br>

    <!-- Class Selection -->
    Class:
    <select name="class" required>
        <option value="">Select Class</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select><br>

    <!-- Section Selection -->
    Section:
    <select name="section" required>
        <option value="">Select Section</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
    </select><br>

    Date of Birth: <input type="date" name="dob" required><br>
    <input type="submit" value="Add Student">
</form>

</body>
</html>
