<?php
// actions/create.php
// Creates a new book in the database

header('Content-Type: application/json');

// Include database connection
require_once '../db.php';

// Check if required fields are provided
if (!isset($_POST['title']) || empty($_POST['title']) || 
    !isset($_POST['author']) || empty($_POST['author'])) {
    echo json_encode([
        'success' => false,
        'error' => 'Title and author are required'
    ]);
    exit();
}

$title = $_POST['title'];
$author = $_POST['author'];

try {
    // Insert new book
    $stmt = $pdo->prepare("INSERT INTO books (title, author) VALUES (?, ?)");
    $stmt->execute([$title, $author]);
    
    // Get the ID of the newly created book
    $newId = $pdo->lastInsertId();
    
    // Return success with new ID
    echo json_encode([
        'success' => true,
        'data' => [
            'id' => (int)$newId
        ]
    ]);
    
} catch(PDOException $e) {
    echo json_encode([
        'success' => false,
        'error' => 'Failed to create book'
    ]);
}
?>
