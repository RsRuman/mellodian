<?php

use JetBrains\PhpStorm\NoReturn;

session_start(); // Start the session to manage authentication

$method  = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
$route   = $request[0] ?? '';

/**
 * Redirect to a specific URL and exit
 */
#[NoReturn]
function redirectTo(string $url): void
{
    header("Location: $url");
    exit();
}

/**
 * Check if the user is authenticated
 */
function isAuthenticated(): bool
{
    return isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true;
}

/**
 * Handle unauthenticated access
 */
function requireAuthentication(array $publicRoutes, string $route): void
{
    if (!isAuthenticated() && !in_array($route, $publicRoutes)) {
        redirectTo('/login');
    }
}

// Publicly accessible routes
$publicRoutes = ['login', 'register'];

// Authentication middleware
requireAuthentication($publicRoutes, $route);

// Redirect authenticated users from login or default route
if (isAuthenticated() && ($route === 'login' || $route === 'register')) {
    redirectTo('/');
}

// Routing logic
switch ($route) {
    case '':
    case '/':
        if (isAuthenticated()) {
            if ($_SESSION['role'] === 'user') {
                include 'views/customer/index.php';
            }

            if ($_SESSION['role'] === 'admin') {
                include 'views/admin/index.php';
            }
        } else {
            redirectTo('/login');
        }
        break;

        case 'users':
            require_once 'controllers/admin/UserController.php';
            $userController = new UserController();
            if (isAuthenticated() && ($_SESSION['role'] === 'admin')) {
                $userController->index();
            }
            break;

    case 'register':
        require_once 'controllers/auth/AuthController.php';
        $authController = new AuthController();
        if ($method === 'POST') {
            $authController->register();
        } else {
            include 'views/auth/registration.php';
        }
        break;

    case 'login':
        require_once 'controllers/auth/AuthController.php';
        $authController = new AuthController();
        if ($method === 'POST') {
            $authController->login();
        } else {
            include 'views/auth/login.php';
        }
        break;

    case 'logout':
        if (isAuthenticated() && ($method === 'POST')) {
            session_destroy();
            header('Location: /login');
        }
        break;

    default:
        http_response_code(404);
        echo "Page not found!";
        break;
}
