<?php

function find_ordered_students() : array {
    $grades = [];
    $conn = new PDO('mysql:host=localhost;dbname=Ip_official;charset=utf8', 'rayan', 'qxd8enkm');
    $gradeQuery = $conn->prepare('SELECT id,name FROM grade');
    $gradeQuery->execute();
    $gradeResult = $gradeQuery->fetchAll(PDO::FETCH_ASSOC);

    foreach ($gradeResult as $grade) {
        $studentQuery = $conn->prepare('SELECT * FROM student WHERE grade_id = ?');
        $studentQuery->execute([$grade['id']]);
        $studentResult = $studentQuery->fetchAll(PDO::FETCH_ASSOC);
        $grades[$grade['name']] = $studentResult;
    }

    return $grades;
}

$orderedStudents = find_ordered_students();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job06</title>
</head>
<body>
  <?php foreach($orderedStudents as $grade => $students): ?>
    <h2><?= $grade ?></h2>
    <table>
      <thead>
        <tr>
          <th>Email</th>
          <th>Fullname</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($students as $student): ?>
          <tr>
            <td><?= $student['email'] ?></td>
            <td><?= $student['fullname'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php endforeach; ?>
</body>
</html>