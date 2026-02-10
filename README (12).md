# Books API - CRUD Implementation

A RESTful API for managing books with full CRUD operations using PHP and MySQL.

**Student**: Delice Ishimwe  
**Course**: Mobile Applications Development  
**Assignment**: API CRUD Assignment

## Project Structure

```
books_api/
├── db.php                      # Database connection
├── database.sql                # Database schema
└── actions/                    # API endpoints
    ├── read_all.php           # GET - Retrieve all books
    ├── read_one.php           # GET - Retrieve one book by ID
    ├── create.php             # POST - Create a new book
    ├── update.php             # POST - Update a book
    └── delete.php             # POST - Delete a book
```

## Database Configuration

- **Database Name**: `mobileapps_2026B_delice_ishimwe`
- **Username**: `delice.ishimwe`
- **Table**: `books`

## API Endpoints

**Base URL**: `http://169.239.251.102:280/~delice.ishimwe/books_api/actions`

### 1. Read All Books
```bash
curl http://169.239.251.102:280/~delice.ishimwe/books_api/actions/read_all.php
```

**Response:**
```json
{
  "success": true,
  "data": [
    {"id": 1, "title": "The Great Gatsby", "author": "F. Scott Fitzgerald"},
    {"id": 2, "title": "1984", "author": "George Orwell"}
  ]
}
```

### 2. Read One Book
```bash
curl "http://169.239.251.102:280/~delice.ishimwe/books_api/actions/read_one.php?id=1"
```

**Response:**
```json
{
  "success": true,
  "data": {"id": 1, "title": "The Great Gatsby", "author": "F. Scott Fitzgerald"}
}
```

### 3. Create Book
```bash
curl -X POST http://169.239.251.102:280/~delice.ishimwe/books_api/actions/create.php \
  -d "title=Moby Dick" \
  -d "author=Herman Melville"
```

**Response:**
```json
{
  "success": true,
  "data": {"id": 4}
}
```

### 4. Update Book
```bash
curl -X POST http://169.239.251.102:280/~delice.ishimwe/books_api/actions/update.php \
  -d "id=1" \
  -d "title=The Great Gatsby Updated" \
  -d "author=F. Scott Fitzgerald"
```

**Response:**
```json
{
  "success": true
}
```

### 5. Delete Book
```bash
curl -X POST http://169.239.251.102:280/~delice.ishimwe/books_api/actions/delete.php \
  -d "id=1"
```

**Response:**
```json
{
  "success": true
}
```

## Setup Instructions

1. **Create Database**: Run `database.sql` in phpMyAdmin
2. **Configure Connection**: Update password in `db.php`
3. **Upload Files**: Upload to `/public_html/books_api/`
4. **Test**: Use the curl commands above

## Features

✅ Full CRUD operations (Create, Read, Update, Delete)  
✅ MySQL database integration  
✅ JSON responses for all endpoints  
✅ Error handling  
✅ RESTful API design  
✅ Proper folder structure with `actions/` subfolder

## Technologies Used

- PHP 7.4+
- MySQL
- PDO for database operations
- JSON for API responses

## Assignment Requirements Met

- ✅ All CRUD operations implemented
- ✅ MySQL database (no static data)
- ✅ `actions/` subfolder structure
- ✅ JSON-only responses
- ✅ Record IDs included in responses
- ✅ Proper error handling

## Deployed API

**Live API**: http://169.239.251.102:280/~delice.ishimwe/books_api/actions

## Author

Delice Ishimwe - Mobile Applications Development 2026B
