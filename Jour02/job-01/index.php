<?php

  function find_all_students() : array {
    $conn = new PDO('mysql:host=localhost;dbname=Ip_official;charset=utf8', 'rayan', 'qxd8enkm');
    $stmt = $conn->prepare('SELECT * FROM student');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  $students = find_all_students();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job 01</title>
</head>
<body>
  <table>
    <thead>
      <th>Email</th>
      <th>Full Name</th>
      <th>Birth Date</th>
      <th>Gender</th>
    </thead>
    <tbody>
      <?php foreach($students as $student): ?>
        <tr>
          <td><?= $student['email'] ?></td>
          <td><?= $student['fullname'] ?></td>
          <td><?= $student['birthdate'] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>