<?php
// Allow from any origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
    // Allow specific domains in production (for now, allow all)
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Always allow Authorization, Content-Type, etc.
$allowHeaders = [
    'Authorization',
    'Content-Type',
    'X-Requested-With',
    'Accept'
];
$allowMethods = [
    'GET',
    'POST',
    'PUT',
    'DELETE',
    'OPTIONS'
];

// Handle preflight request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Methods: ' . implode(', ', $allowMethods));
    header('Access-Control-Allow-Headers: ' . implode(', ', $allowHeaders));
    exit(0);
}
?>
