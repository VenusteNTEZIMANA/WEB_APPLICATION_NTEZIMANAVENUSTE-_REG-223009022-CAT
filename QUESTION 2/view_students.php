<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get all students with their qualifications
$sql = "SELECT r.*, 
        GROUP_CONCAT(CONCAT(q.examination, ': ', q.board, ' - ', q.percentage, '% (', q.year_of_passing, ')') SEPARATOR ' | ') as qualifications
        FROM registrations r 
        LEFT JOIN qualifications q ON r.id = q.student_id 
        GROUP BY r.id 
        ORDER BY r.registration_date DESC";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Registrations</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f4f4f4; }
        .container { max-width: 1200px; margin: auto; background: white; padding: 20px; border-radius: 10px; }
        h2 { text-align: center; color: #1e4663; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; vertical-align: top; }
        th { background-color: #1e4663; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .btn { display: inline-block; margin: 20px 0; padding: 10px 20px; background: #1e4663; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
<div class="container">
    <h2>Student Registrations</h2>
    <a href="index.php" class="btn">Register New Student</a>
    
    <table>
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Mobile</th><th>Course</th><th>Qualifications</th><th>Reg Date</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['courses']; ?></td>
                <td><?php echo nl2br($row['qualifications'] ?? 'No qualifications'); ?></td>
                <td><?php echo $row['registration_date']; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>

<?php $conn->close(); ?>