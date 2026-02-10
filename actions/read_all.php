<?php
// actions/read_all.php
// Retrieves all books from the database

header('Content-Type: application/json');

// Include database connection
require_once '../db.php';

try {
    // Query to get all books
    $stmt = $pdo->query("SELECT id, title, author FROM books ORDER BY id");
    $books = $stmt->fetchAll();
    
    // Return success response with data
    echo json_encode([
        'success' => true,
        'data' => $books
    ]);
    
} catch(PDOException $e) {
    // Return error response
    echo json_encode([
        'success' => false,
        'error' => 'Failed to retrieve books'
    ]);
}
?>
