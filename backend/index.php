// backend/index.php

<?php

// Inclure le fichier de configuration de la base de données
require_once 'config/database.php';

// Inclure le fichier du contrôleur UserController
require_once 'controllers/UserController.php';

// Instancier le contrôleur UserController
$userController = new UserController();

// Définir les routes et appeler les actions correspondantes
$route = $_GET['route'] ?? '';

switch ($route) {
    case 'register':
        $userController->register();
        break;
    // Autres routes et actions peuvent être ajoutées ici
    default:
        // Route par défaut si aucune route correspondante n'est trouvée
        echo "Route non trouvée.";
        break;
}