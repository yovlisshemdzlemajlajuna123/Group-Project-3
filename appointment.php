<?php

$patient   = ($_POST['patient_name'] ?? '');
$doctor    = ($_POST['doctor_name'] ?? '');
$dept      = ($_POST['department_name'] ?? '');
$phone     = ($_POST['phone'] ?? '');
$symptoms  = ($_POST['symptoms'] ?? '');
$date      = ($_POST['date'] ?? '');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Appointment Confirmation</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-light">
<div class="container my-5">
  <div class="card shadow">
    <div class="card-body">
        <h3 class="text-success">Your Appointment is Booked</h3>
        <ul class="list-unstyled">
          <li><strong>Patient:</strong> <?= ($patient) ?></li>
          <li><strong>Doctor:</strong> <?= ($doctor) ?></li>
          <li><strong>Department:</strong> <?= ($dept) ?></li>
          <li><strong>Phone:</strong> <?= ($phone) ?></li>
          <li><strong>Symptoms:</strong> <?= ($symptoms) ?></li>
        </ul>
    </div>
  </div>
</div>
</body>
</html>
