<?php
// actions/read_one.php
// Retrieves a single book by ID

header('Content-Type: application/json');

// Include database connection
require_once '../db.php';

// Check if ID is provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo json_encode([
        'success' => false,
        'error' => 'ID parameter is required'
    ]);
    exit();
}

$id = $_GET['id'];

try {
    // Query to get one book by ID
    $stmt = $pdo->prepare("SELECT id, title, author FROM books WHERE id = ?");
    $stmt->execute([$id]);
    $book = $stmt->fetch();
    
    if ($book) {
        // Book found
        echo json_encode([
            'success' => true,
            'data' => $book
        ]);
    } else {
        // Book not found
        echo json_encode([
            'success' => false,
            'error' => 'not found'
        ]);
    }
    
} catch(PDOException $e) {
    echo json_encode([
        'success' => false,
        'error' => 'Failed to retrieve book'
    ]);
}
?>
