-- Database setup for Books API

-- Create books table
CREATE TABLE IF NOT EXISTS books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample data for testing
INSERT INTO books (title, author) VALUES
('The Great Gatsby', 'F. Scott Fitzgerald'),
('1984', 'George Orwell'),
('To Kill a Mockingbird', 'Harper Lee');
