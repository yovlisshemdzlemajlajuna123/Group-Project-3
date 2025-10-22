<?php
include('book_appointment.php');

$name = $_GET['name'] ?? 'Guest';
$email = $_GET['email'] ?? '';
$phone = $_GET['phone'] ?? '';
$date = $_GET['date'] ?? '';
$message = $_GET['message'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Appointment Confirmation</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container mt-5">
    <div class="card p-4 shadow">
        <h2 class="text-success">✅ Your Appointment is Confirmed!</h2>
        <p>Thank you, <strong><?php echo htmlspecialchars($name); ?></strong>. Your appointment has been received successfully.</p>
        <hr>
        <h4>Submitted Details:</h4>
        <ul>
            <li><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></li>
            <li><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></li>
            <li><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></li>
            <li><strong>Date:</strong> <?php echo htmlspecialchars($date); ?></li>
            <li><strong>Message:</strong> <?php echo htmlspecialchars($message); ?></li>
        </ul>
        <a href="index.php" class="btn btn-primary mt-3">Go Back to Home</a>
    </div>
</div>
</body>
</html>
