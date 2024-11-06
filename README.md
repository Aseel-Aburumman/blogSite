Here's a sample `README.md` file for your project:

---

# Dardos Tech: Blog Application with Role-Based Access Control

This project is a simple blog application with role-based access control that allows _Admins_ to manage blog posts and _Users_ to add comments. The application is built using Laravel and utilizes Blade for templating, jQuery for client-side validation, and Eloquent ORM for database interactions.

## Table of Contents

-   [Objective](#objective)
-   [Features](#features)
-   [Installation](#installation)
-   [Usage](#usage)
-   [Roles and Permissions](#roles-and-permissions)
-   [Database Structure](#database-structure)
-   [Bonus Feature](#bonus-feature)
-   [Submission](#submission)

---

## Objective

The goal of this project is to build a blog application with the following requirements:

-   **Admin** role to manage blog posts (create, edit, delete).
-   **User** role to view posts and add comments.

## Features

### User Roles and Permissions

1. **Admin**:

    - Can add new posts.
    - Can edit and delete existing posts.

2. **User**:
    - Can view posts.
    - Can add comments to any post.
    - Can edit or delete their own comments (Bonus Feature).

### Authentication

-   Only authenticated users can interact with the application.
-   Laravel’s built-in authentication is utilized for secure access.

### Post Management (Admin)

-   Admins can manage blog posts through the admin dashboard.
-   Each post includes a title, content, and timestamp.

### Commenting (User)

-   Logged-in users can comment on posts.
-   Each comment is linked to the user and the associated post.

### User Interface

-   Built with Laravel Blade templates for structured and reusable views.
-   Form validation with jQuery for smooth user experience.
-   Simple, user-friendly design with a pastel color theme.

### Database

-   Database management using Laravel's Eloquent ORM.
-   Migrations are used to create necessary tables.
-   Sample data is seeded for testing purposes.

---

## Installation

### Prerequisites

-   [PHP](https://www.php.net/) >= 7.3
-   [Composer](https://getcomposer.org/)
-   [Node.js](https://nodejs.org/)
-   [Laravel](https://laravel.com/) (tested with version 10)

### Steps

1. **Clone the repository**:

    ```bash
    git clone https://github.com/your-username/dardos-tech-blog.git
    cd dardos-tech-blog
    ```

2. **Install dependencies**:

    ```bash
    composer install
    npm install
    npm run dev
    ```

3. **Environment Configuration**:

    - Copy `.env.example` to `.env`.
    - Configure your database and other environment settings in the `.env` file.

    ```bash
    php artisan key:generate
    ```

4. **Database Setup**:

    - Run migrations and seed the database with sample data.

    ```bash
    php artisan migrate --seed
    ```

5. **Run the Application**:

    ```bash
    php artisan serve
    ```

    Visit `http://localhost:8000` in your browser.

---
