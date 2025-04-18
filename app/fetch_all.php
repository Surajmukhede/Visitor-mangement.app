<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Visitors</title>
</head>
<body>
    <h1>All Visitors</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Contact Person</th>
            <th>Visit Reason</th>
            <th>Timestamp</th>
        </tr>
        <?php
        $stmt = $pdo->query("SELECT * FROM visitors");
        while ($row = $stmt->fetch()) {
            echo "<tr>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['mobile']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['contact_person']}</td>";
            echo "<td>{$row['visit_reason']}</td>";
            echo "<td>{$row['timestamp']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>
