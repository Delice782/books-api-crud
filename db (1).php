<?php
// db.php - Database connection file

$host = 'localhost';
$dbname = 'mobileapps_2026B_delice_ishimwe';
$username = 'delice.ishimwe';
$password = 'MY_PASSWORD_HERE';  

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'error' => 'Database connection failed'
    ]);
    exit();
}
?>
