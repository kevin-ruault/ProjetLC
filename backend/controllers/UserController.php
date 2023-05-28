// backend/controllers/UserController.php

<?php

require_once '../config/database.php';
require_once '../models/User.php';

class UserController
{
    public function register()
    {
        // Récupérer les données du formulaire (ou des requêtes) ici
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Créer une instance du modèle User
        $userModel = new User($pdo);

        // Appeler la méthode createUser du modèle User pour créer un nouvel utilisateur
        $rowCount = $userModel->createUser($firstname, $lastname, $email, $password);

        // Vérifier si l'insertion a réussi
        if ($rowCount > 0) {
            // Inscription réussie
            echo "L'utilisateur a été enregistré avec succès.";
        } else {
            // Erreur lors de l'inscription
            echo "Une erreur s'est produite lors de l'enregistrement de l'utilisateur.";
        }
    }
}
