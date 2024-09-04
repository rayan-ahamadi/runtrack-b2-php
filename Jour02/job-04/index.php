<?php

  function find_all_students_grades() : array{
    $conn = new PDO('mysql:host=localhost;dbname=Ip_official;charset=utf8', 'rayan', 'qxd8enkm');
    $stmt = $conn->prepare('SELECT email, fullname, grade.name AS grade_name FROM student INNER JOIN grade ON student.grade_id = grade.id');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  $students = find_all_students_grades();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job04</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Email</th>
        <th>Fullname</th>
        <th>Grade</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($students as $student): ?>
        <tr>
          <td><?= $student['email'] ?></td>
          <td><?= $student['fullname'] ?></td>
          <td><?= $student['grade_name'] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>