<?php
// actions/update.php
// Updates an existing book by ID

header('Content-Type: application/json');

// Include database connection
require_once '../db.php';

// Check if required fields are provided
if (!isset($_POST['id']) || empty($_POST['id']) ||
    !isset($_POST['title']) || empty($_POST['title']) ||
    !isset($_POST['author']) || empty($_POST['author'])) {
    echo json_encode([
        'success' => false,
        'error' => 'ID, title, and author are required'
    ]);
    exit();
}

$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];

try {
    // Update the book
    $stmt = $pdo->prepare("UPDATE books SET title = ?, author = ? WHERE id = ?");
    $stmt->execute([$title, $author, $id]);
    
    // Check if any row was affected
    if ($stmt->rowCount() > 0) {
        echo json_encode([
            'success' => true
        ]);
    } else {
        // No rows updated (either ID doesn't exist or no changes made)
        echo json_encode([
            'success' => false,
            'error' => 'Book not found or no changes made'
        ]);
    }
    
} catch(PDOException $e) {
    echo json_encode([
        'success' => false,
        'error' => 'Failed to update book'
    ]);
}
?>
