<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🚀 Basic User Management API

Welcome to the **Basic User Management API**! This API allows you to manage users, including creating, retrieving, updating, and deleting users. Below you will find all the available endpoints and their details.

[Click here to show example website](http://test.coupledisplays.eu:8123/)


<br>
<br>
<br>
<br>

## 🛠️ API Endpoints

### Get All Users
```http
GET /users
```
- **Description**: Retrieve a list of all users.
- **Response**: JSON array of user objects.

```json
[
    {
        "id": 1,
        "name": "John Doe",
        "email": "john@example.com",
        "created_at": "2023-09-01T12:34:56.000000Z",
        "updated_at": "2023-09-01T12:34:56.000000Z"
    },
    ...
]
```

<br>
<br>

---
### Get Single User
```http
GET /users/{user}
```
- **Description**: Retrieve a single user by their ID.
- **URL Parameter**: \`user\` - The ID of the user.
- **Response**: JSON object of the user.

```json
{
    "id": 1,
    "name": "John Doe",
    "email": "john@example.com",
    "created_at": "2023-09-01T12:34:56.000000Z",
    "updated_at": "2023-09-01T12:34:56.000000Z"
}
```

<br>
<br>

---
### Create a New User
```http
POST /users
```
- **Description**: Create a new user.
- **Request Body**: JSON object containing \`name\`, \`email\`, and \`password\`.
- **Response**: JSON object of the created user.

```json
{
    "id": 2,
    "name": "Jane Doe",
    "email": "jane@example.com",
    "created_at": "2023-09-01T12:45:00.000000Z",
    "updated_at": "2023-09-01T12:45:00.000000Z"
}
```

<br>
<br>

---
### Update a User
```http
PUT /users/{user}
```
- **Description**: Update an existing user's information.
- **URL Parameter**: \`user\` - The ID of the user.
- **Request Body**: JSON object containing \`name\`, \`email\`, or other fields to update.
- **Response**: JSON object of the updated user.

```json
{
    "id": 1,
    "name": "John Doe Updated",
    "email": "john@example.com",
    "created_at": "2023-09-01T12:34:56.000000Z",
    "updated_at": "2023-09-01T13:00:00.000000Z"
}
```

<br>
<br>

---
### Delete a User
```http
DELETE /users/{user}
```
- **Description**: Delete a user by their ID.
- **URL Parameter**: \`user\` - The ID of the user.
- **Response**: HTTP status 204 (No Content).

<br>
<br>
<br>
<br>

## 🚀 Installation
### [Local]

1. Clone the repository:
    ```bash
    git clone https://github.com/HonzaBrambor/laravel-basic-user-manager.git
    ```
2. Install dependencies:
    ```bash
    composer install
    ```
3. Set up your \`.env\` file:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    - Edit database credentials.

4. Run migrations:
    ```bash
    php artisan migrate:fresh --seed
    ```

5. Build JS and CSS
    ```bash
    npm install
    npm run dev
    ```

6. Start the server in new terminal:
    ```bash
    php artisan serve
    ```
    
### [Docker]

1. Clone the repository:
    ```bash
    git clone https://github.com/HonzaBrambor/laravel-basic-user-manager.git
    ```
2. Go to folder:
    ```bash
    cd laravel-basic-user-manager
    ```
3. Run script (Linux only):
    ```bash
    bash scripts/setup.sh
    ```
4. Set up your \`.env\` file:
    ```bash
    nano .env
    ```
	- or edit .env file in ftp.
<br>
<br>
<br>
<br>

## 🛠️ Usage

To test the API, you can use tools like [Postman](https://www.postman.com/) or [cURL](https://curl.se/). Below are some examples:

- **Get all users**:
    ```bash
    curl -X GET http://localhost:8000/users
    ```

- **Create a new user**:
    ```bash
    curl -X POST http://localhost:8000/users -H "Content-Type: application/json" -d '{"name": "Jane Doe", "email": "jane@example.com", "password": "password"}'
    ```

<br>
<br>
<br>
<br>

## 🧪 Running Tests

To run the tests, use the following command:

```bash
php artisan test
```

This will execute all the tests defined in the \`tests/\` directory.

<br>
<br>
<br>
<br>


## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.



