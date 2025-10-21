<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $date = $_POST['date'] ?? '';
    $message = $_POST['message'] ?? '';

    // Redirect to confirmation page
    header("Location: confirm_appointment.php?name=" . urlencode($name) . "&email=" . urlencode($email) . "&phone=" . urlencode($phone) . "&date=" . urlencode($date) . "&message=" . urlencode($message));
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Book Appointment</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container mt-5">
    <h2>Book an Appointment</h2>
    <form method="POST" action="book_appointment.php">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Phone:</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Date:</label>
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Message:</label>
            <textarea name="message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
