<?php

class Room{
    private int $id;
    private int $floor_id;
    private string $name;
    private int $capacity;

    public function __construct(int $id, int $floor_id, string $name, int $capacity){
        $this->id = $id;
        $this->floor_id = $floor_id;
        $this->name = $name;
        $this->capacity = $capacity;
    }

    public function getId(): int{
        return $this->id;
    }

    public function getFloorId(): int{
        return $this->floor_id;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getCapacity(): int{
        return $this->capacity;
    }

    public function setId(int $id): void{
        $this->id = $id;
    }

    public function setFloorId(int $floor_id): void{
        $this->floor_id = $floor_id;
    }

    public function setName(string $name): void{
        $this->name = $name;
    }

    public function setCapacity(int $capacity): void{
        $this->capacity = $capacity;
    }

    // Il peut y avoir plusieurs promos dans une salle
    public function getGrades(): array{
        $conn = connectDB();
        $stmt = $conn->prepare('SELECT * FROM grade WHERE room_id = ?');
        $stmt->execute([$this->id]);
        $grades = $stmt->fetchAll(PDO::FETCH_CLASS, 'Grade');
        return $grades;
    }
    
}




?>