<?php

require_once 'class/student.php';

class grade{
  private int $id;
  private int $room_id;
  private string $name;
  private Datetime $year;

  public function __construct(int $id, int $room_id, string $name, Datetime $year){
    $this->id = $id;
    $this->room_id = $room_id;
    $this->name = $name;
    $this->year = $year;
  }

  public function getId(): int{
    return $this->id;
  }

  public function getRoomId(): int{
    return $this->room_id;
  }

  public function getName(): string{
    return $this->name;
  }

  public function getYear(): Datetime{
    return $this->year;
  }

  public function setId(int $id): void{
    $this->id = $id;
  }

  public function setRoomId(int $room_id): void{
    $this->room_id = $room_id;
  }

  public function setName(string $name): void{
    $this->name = $name;
  }

  public function setYear(Datetime $year): void{
    $this->year = $year;
  }

  // Il peut y avoir plusieurs étudiants dans une classe
  public function getStudents(): array{
    $conn = connectDB();
    $stmt = $conn->prepare('SELECT * FROM student WHERE grade_id = ?');
    $stmt->execute([$this->id]);
    $students = $stmt->fetchAll(PDO::FETCH_CLASS, 'Student');
    return $students;
  }

}


?>