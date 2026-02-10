<?php
// actions/delete.php
// Deletes a book by ID

header('Content-Type: application/json');

// Include database connection
require_once '../db.php';

// Check if ID is provided
if (!isset($_POST['id']) || empty($_POST['id'])) {
    echo json_encode([
        'success' => false,
        'error' => 'ID is required'
    ]);
    exit();
}

$id = $_POST['id'];

try {
    // Delete the book
    $stmt = $pdo->prepare("DELETE FROM books WHERE id = ?");
    $stmt->execute([$id]);
    
    // Check if any row was deleted
    if ($stmt->rowCount() > 0) {
        echo json_encode([
            'success' => true
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'error' => 'Book not found'
        ]);
    }
    
} catch(PDOException $e) {
    echo json_encode([
        'success' => false,
        'error' => 'Failed to delete book'
    ]);
}
?>
