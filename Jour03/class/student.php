<?php

class Student{
    private int $id;
    private int $grade_id;
    private string $email;
    private string $fullname;
    private datetime $birthdate;
    private string $gender;

    public function __construct(int $id, int $grade_id, string $email, string $fullname, datetime $birthdate, string $gender){
        $this->id = $id;
        $this->grade_id = $grade_id;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthdate = $birthdate;
    }

    public function getId(): int{
        return $this->id;
    }

    public function getGradeId(): int{
        return $this->grade_id;
    }

    public function getEmail(): string{
        return $this->email;
    }

    public function getFullname(): string{
        return $this->fullname;
    }

    public function getBirthdate(): datetime{
        return $this->birthdate;
    }

    public function getGender(): string{
        return $this->gender;
    }

    public function setId(int $id): void{
        $this->id = $id;
    }

    public function setGradeId(int $grade_id): void{
        $this->grade_id = $grade_id;
    }

    public function setEmail(string $email): void{
        $this->email = $email;
    }

    public function setFullname(string $fullname): void{
        $this->fullname = $fullname;
    }

    public function setBirthdate(datetime $birthdate): void{
        $this->birthdate = $birthdate;
    }

    public function setGender(string $gender): void{
        $this->$gender = $gender;
    }

}

$student = new Student(1,1, "email@email.com", "John Doe", new DateTime("1990-01-18") , "Male");




?>