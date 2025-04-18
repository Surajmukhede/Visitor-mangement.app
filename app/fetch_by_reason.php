<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitors by Reason</title>
</head>
<body>
    <h1>Filter Visitors by Reason</h1>
    <form action="" method="post">
        <label for="visit_reason">Reason for Visit:</label>
        <select id="visit_reason" name="visit_reason">
            <option value="purchasing">Purchasing</option>
            <option value="enquiry">Enquiry</option>
            <option value="dispute">Dispute</option>
            <option value="meeting">Meeting</option>
            <option value="presentation">Presentation</option>
            <option value="others">Others</option>
        </select><br>
        <input type="submit" name="filter" value="Filter">
    </form>

    <?php
    if (isset($_POST['filter'])) {
        $visit_reason = $_POST['visit_reason'];
        $stmt = $pdo->prepare("SELECT * FROM visitors WHERE visit_reason = ?");
        $stmt->execute([$visit_reason]);

        echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Contact Person</th>
                <th>Visit Reason</th>
                <th>Timestamp</th>
            </tr>";

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

        echo "</table>";
    }
    ?>

    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>
