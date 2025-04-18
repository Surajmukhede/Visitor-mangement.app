<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Visitor</title>
</head>
<body>
    <h1>Add New Visitor</h1>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="mobile">Mobile No.:</label>
        <input type="text" id="mobile" name="mobile" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <label for="contact_person">Contact Person Name:</label>
        <input type="text" id="contact_person" name="contact_person"><br>

        <label for="visit_reason">Reason for Visit:</label>
        <select id="visit_reason" name="visit_reason">
            <option value="purchasing">Purchasing</option>
            <option value="enquiry">Enquiry</option>
            <option value="dispute">Dispute</option>
            <option value="meeting">Meeting</option>
            <option value="presentation">Presentation</option>
            <option value="others">Others</option>
        </select><br>

        <input type="submit" name="submit" value="Add Visitor">
    </form>
    <br>
    <a href="index.php">Back to Home</a>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $contact_person = $_POST['contact_person'];
        $visit_reason = $_POST['visit_reason'];
        $timestamp = date('Y-m-d H:i:s');

        $stmt = $pdo->prepare("INSERT INTO visitors (name, mobile, email, contact_person, visit_reason, timestamp) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$name, $mobile, $email, $contact_person, $visit_reason, $timestamp]);

        echo "Visitor added successfully!";
    }
    ?>
</body>
</html>
