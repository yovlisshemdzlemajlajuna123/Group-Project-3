<?php
$name    = trim($_POST['full_name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Submitted</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-light">
<div class="container my-5">
  <div class="card shadow">
    <div class="card-body">
        <h3 class="text-success"> Your form is submitted</h3>
        <ul class="list-unstyled">
          <li><strong>Name:</strong> <?= ($name) ?></li>
          <li><strong>Email:</strong> <?= ($email) ?></li>   
            <li><strong>Phone:</strong> <?= ($phone) ?></li>
          <li><strong>Message:</strong> <?= ($message) ?></li>
        </ul>
    </div>
  </div>
</div>
</body>
</html>
