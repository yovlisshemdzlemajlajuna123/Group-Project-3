<?php
if (!function_exists('e')) {
  function e($v) { return htmlspecialchars($v ?? '', ENT_QUOTES, 'UTF-8'); }
}

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
        <a href="index.php#contact" class="btn btn-secondary mt-3">Go Back</a>
        <h3 class="text-success"> Your form is submitted</h3>
        <ul class="list-unstyled">
          <li><strong>Name:</strong> <?= e($name) ?></li>
          <li><strong>Email:</strong> <?= e($email) ?></li>
          <?php if ($phone !== ''): ?>
            <li><strong>Phone:</strong> <?= e($phone) ?></li>
          <?php endif; ?>
          <li><strong>Message:</strong> <?= e($message) ?></li>
        </ul>
    </div>
  </div>
</div>
</body>
</html>
