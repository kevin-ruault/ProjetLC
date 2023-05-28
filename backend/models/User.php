// backend/models/User.php

<?php

class User
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function createUser($username, $email, $password)
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
        $stmt->execute([$firstname, $lastname, $email, $password]);

        // Vous pouvez ajouter d'autres traitements ici si nécessaire

        return $stmt->rowCount();
    }
}