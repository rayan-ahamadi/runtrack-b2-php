<?php
  function find_one_student(string $email) : array {
    $conn = new PDO('mysql:host=localhost;dbname=Ip_official;charset=utf8', 'rayan', 'qxd8enkm');
    $stmt = $conn->prepare('SELECT * FROM student WHERE email = ?'); 
    $stmt->execute([$email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  

  $email = $_GET['email'];
  

  if(isset($email)){
    $student = find_one_student($email);
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job02</title>
</head>
<body>
  <form method="GET" action="index.php">
      <label for="email">E-mail de l'élève :</label>
      <input placeholder="email" name="email" id="email" type="text">
      <button type="submit">Rechercher</button>
  </form>

  <?php if(isset($email)): ?>
    <table>
      <thead>
        <th>Email</th>
        <th>Full Name</th>
        <th>Birth Date</th>
      </thead>
      <tbody>
        <tr>
          <td><?= $student['email'] ?></td>
          <td><?= $student['fullname'] ?></td>
          <td><?= $student['birthdate'] ?></td>
        </tr>
      </tbody>
    </table>
  <?php endif ?>   
  
</body>
</html>