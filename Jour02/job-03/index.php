<?php

  function insert_student(string $email, string $fullname, string $gender,string $birthdate,int $gradeId) : void {
    $conn = new PDO('mysql:host=localhost;dbname=Ip_official;charset=utf8', 'rayan', 'qxd8enkm');
    $stmt = $conn->prepare('INSERT INTO student (grade_id, email, fullname, birthdate, gender) VALUES (?, ?, ?, ? , ?)'); 
    $stmt->execute([$gradeId ,$email, $fullname, $birthdate, $gender]);
  }

  if(isset($_GET['new_student'])) {
    $gradeId = $_POST['grade_id'];
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];

    insert_student($email, $fullname, $gender, $birthdate, $gradeId);
    echo 'Student added';
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job03</title>
</head>
<body>
  <form method="POST" action="index.php?new_student=true">
    <label for ="grade">Grade</label>
    <select name="grade_id" id="grade">

      <option value="1">Bachelor 1</option>
      <option value="2">Bachelor 2 Web</option>
      <option value="3">Bachelor 2 Logiciel</option>
      <option value="4">Bachelor 2 Cyber</option>
      <option value="5">Bachelor 2 IA</option>
      <option value="6">Bachelor 3 Web</option>
      <option value="7">Bachelor 3 Logiciel</option>
      <option value="8">Bachelor 3 Cyber</option>
      <option value="9">Bachelor 3 IA</option>
      <option value="10">Mastère 1 IT Business IT</option>
      <option value="11">Mastère 2 IT Business IT</option>
      <option value="12">Mastère DPO</option>
      
    </select>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>

    <label for="fullname">Fullname</label>
    <input type="text" name="fullname" id="fullname" required>
    
    <label for="birthdate">Birthdate</label>
    <input type="date" name="birthdate" id="birthdate" required> 

    <label for="gender">Gender</label>
    <select name="gender" id="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
    <input type="submit" value="Submit">
  </form>
</body>
</html>