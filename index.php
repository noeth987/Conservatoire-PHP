<?php
session_start();
require_once 'config.php';
require_once 'profController.php';
require_once 'eleveController.php';
$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASS);
$profController = new ProfController();
$controller = new EleveController();

if (!isset($_SESSION['user'])) {
    switch ($_GET['page']) {
        case 'login':
            require_once 'LoginController.php';
            $controller = new LoginController();
            $controller->index();
            break;
        default:
            header('Location: index.php?page=login');
            break;
    }
} else {
    switch ($_GET['page']) {
        case 'home':
            require_once 'HomeController.php';
            $controller = new HomeController();
            $controller->index();
            break;
        case 'logout':
            require_once 'LoginController.php';
            $controller = new LoginController();
            $controller->logout();
            break;
        case 'prof':
            $profController->getProfesseurs();
            break;
        /*case 'eleve':
            require_once 'eleveController.php';
            break;*/
       case 'ajouterEleve':
  $controller->ajouterEleve();
  break;

        default:
            header('Location: index.php?page=home');
            break;
    }
}
?>
