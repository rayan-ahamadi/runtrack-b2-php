<?php

class floor{
    private int $id;
    private string $name;
    private int $level;

    public function __construct(int $id, string $name, int $level){
        $this->id = $id;
        $this->name = $name;
        $this->level = $level;
    }

    public function getId(): int{
        return $this->id;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getLevel(): int{
        return $this->level;
    }

    public function setId(int $id): void{
        $this->id = $id;
    }

    public function setName(string $name): void{
        $this->name = $name;
    }

    public function setLevel(int $level): void{
        $this->level = $level;
    }

    // Il peut y avoir plusieurs chambres dans un étage
    public function getRooms(): array{
        $conn = connectDB();
        $stmt = $conn->prepare('SELECT * FROM room WHERE floor_id = ?');
        $stmt->execute([$this->id]);
        $rooms = $stmt->fetchAll(PDO::FETCH_CLASS, 'Room');
        return $rooms;
    }
}




?>