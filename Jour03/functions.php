<?php 

require_once 'class/student.php';
require_once 'class/grade.php';
require_once 'class/room.php';
require_once 'class/floor.php';

function connectDB(){
  $conn = new PDO('mysql:host=localhost;dbname=Ip_official', 'rayan', 'qxd8enkm');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $conn;
}

function findOneStudent(int $id) : Student{
  $conn = connectDB();
  $stmt = $conn->prepare('SELECT * FROM student WHERE id = ?');
  $stmt->execute([$id]);
  $student = $stmt->fetchObject('Student');
  return $student;
} 

function findOneGrade (int $id) : Grade{
  $conn = connectDB();
  $stmt = $conn->prepare('SELECT * FROM grade WHERE id = ?');
  $stmt->execute([$id]);
  $grade = $stmt->fetchObject('Grade');
  return $grade;
}

function findOneRoom (int $id) : Room{
  $conn = connectDB();
  $stmt = $conn->prepare('SELECT * FROM room WHERE id = ?');
  $stmt->execute([$id]);
  $room = $stmt->fetchObject('Room');
  return $room;
}

function findOneFloor (int $id) : Floor{
  $conn = connectDB();
  $stmt = $conn->prepare('SELECT * FROM floor WHERE id = ?');
  $stmt->execute([$id]);
  $floor = $stmt->fetchObject('Floor');
  return $floor;
}





?>