# Books API

A simple CRUD API for managing books using PHP and MySQL.

## Project Structure
```
books_api/
├── db.php
├── actions/
    ├── read_all.php
    ├── read_one.php
    ├── create.php
    ├── update.php
    └── delete.php
```

## Database

- **Table**: `books`
- **Columns**: `id`, `title`, `author`

## API Endpoints

**Base URL**: `http://169.239.251.102:280/~delice.ishimwe/books_api/actions`

### Read All Books
```bash
curl http://169.239.251.102:280/~delice.ishimwe/books_api/actions/read_all.php
```

### Read One Book
```bash
curl "http://169.239.251.102:280/~delice.ishimwe/books_api/actions/read_one.php?id=1"
```

### Create Book
```bash
curl -X POST http://169.239.251.102:280/~delice.ishimwe/books_api/actions/create.php -d "title=Book Title" -d "author=Author Name"
```

### Update Book
```bash
curl -X POST http://169.239.251.102:280/~delice.ishimwe/books_api/actions/update.php -d "id=1" -d "title=New Title" -d "author=New Author"
```

### Delete Book
```bash
curl -X POST http://169.239.251.102:280/~delice.ishimwe/books_api/actions/delete.php -d "id=1"
```

## Features

- Full CRUD operations
- MySQL database integration
- JSON responses
- Error handling

## Technologies

- PHP
- MySQL
- PDO
