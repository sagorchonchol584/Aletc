This project provides APIs for managing blog posts, user registration, and task management. Below are the setup and usage instructions.

---

## **Setup Instructions**

### **1. Prerequisites**
- PHP (>= 8.0)
- Composer (for dependency management)
- MySQL (or any supported database)
- Laravel CLI (optional but recommended)

### **2. Clone the Repository**
```bash
git clone https://github.com/yourusername/your-repo-name.git
cd your-repo-name
```

### **3. Install Dependencies**
Run the following command to install PHP dependencies:
```bash
composer install
```

### **4. Configure Environment**
1. Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```
2. Update the `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel
   DB_USERNAME=root
   DB_PASSWORD=yourpassword
   ```

3. Generate an application key:
   ```bash
   php artisan key:generate
   ```

### **5. Run Migrations**
Run the following command to create the necessary database tables:
```bash
php artisan migrate
```

This will create the following tables:
- `posts` (for blog posts)
- `users` (for user registration)
- `tasks` (for task management)

---

## **Running the Server**
Start the Laravel development server:
```bash
php artisan serve
```
The server will run at `http://127.0.0.1:8000`.

---

## **Testing the APIs**

### **1. Blog Post CRUD API**
- **Create a Post**:
  - **Endpoint**: `POST /api/posts`
  - **Body**:
    ```json
    {
      "title": "My First Post",
      "content": "This is my content."
    }
    ```
  - **Response**:
    ```json
    {
      "id": 1,
      "title": "My First Post",
      "content": "This is my content.",
      "created_at": "2024-12-18T10:00:00Z"
    }
    ```

- **List All Posts**:
  - **Endpoint**: `GET /api/posts`
  - **Response**:
    ```json
    [
      {
        "id": 1,
        "title": "My First Post",
        "content": "This is my content.",
        "created_at": "2024-12-18T10:00:00Z"
      }
    ]
    ```

- **View a Single Post**:
  - **Endpoint**: `GET /api/posts/{id}`
  - **Response**:
    ```json
    {
      "id": 1,
      "title": "My First Post",
      "content": "This is my content.",
      "created_at": "2024-12-18T10:00:00Z"
    }
    ```

---

### **2. User Registration API**
- **Register a User**:
  - **Endpoint**: `POST /api/register`
  - **Body**:
    ```json
    {
      "name": "Jane Doe",
      "email": "jane@example.com",
      "password": "password123"
    }
    ```
  - **Response**:
    ```json
    {
      "id": 1,
      "name": "Jane Doe",
      "email": "jane@example.com",
      "created_at": "2024-12-18T10:00:00Z"
    }
    ```

---

### **3. Task Management API**
- **Add a Task**:
  - **Endpoint**: `POST /api/tasks`
  - **Body**:
    ```json
    {
      "title": "Finish Laravel test"
    }
    ```
  - **Response**:
    ```json
    {
      "id": 1,
      "title": "Finish Laravel test",
      "is_completed": false,
      "created_at": "2024-12-18T10:00:00Z"
    }
    ```

- **Mark Task as Completed**:
  - **Endpoint**: `PATCH /api/tasks/{id}`
  - **Body**:
    ```json
    {
      "is_completed": true
    }
    ```
  - **Response**:
    ```json
    {
      "id": 1,
      "title": "Finish Laravel test",
      "is_completed": true,
      "created_at": "2024-12-18T10:00:00Z"
    }
    ```

- **Get Pending Tasks**:
  - **Endpoint**: `GET /api/tasks?is_completed=false`
  - **Response**:
    ```json
    [
      {
        "id": 1,
        "title": "Finish Laravel test",
        "is_completed": false,
        "created_at": "2024-12-18T10:00:00Z"
      }
    ]
    ```

---

## **Testing with Postman**
1. Import the provided Postman collection (if available).
2. Use the endpoints listed above to test the APIs.

---

## **Running Tests**
To run the built-in Laravel tests:
```bash
php artisan test
```

---

## **License**
This project is open-source and available under the [MIT License](LICENSE).

---

```

### How to Create the File
1. Open your terminal or command prompt.
2. Navigate to the root directory of your Laravel project.
3. Run the following command to create the `README.md` file:
   ```bash
   touch README.md
   ```
4. Open the file in your preferred text editor and paste the content above.
5. Save the file.

Now, your project has a well-structured `README.md` file with setup instructions, API details, and testing guidelines!
