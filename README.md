# Pixel Positions 
 
A Laravel web application to manage pixel positions and related operations. This project was created following a Laracasts tutorial and demonstrates routing, controllers, models, migrations, and Blade views in Laravel.
    
--- 
  
## Table of Contents

-   [Project Structure](#project-structure)
-   [Features](#features)
-   [Installation](#installation)
-   [How to Use](#how-to-use)
-   [Available Routes](#available-routes)
-   [Requirements](#requirements)
-   [Contribution](#contribution)
-   [Learn More](#learn-more)

---

## Project Structure

```
pixel-positions/
├── app/                     # Controllers, models, policies, providers
│   ├── Http/
│   ├── Models/
│   ├── Policies/
│   └── Providers/
├── bootstrap/               # Framework bootstrap files
├── config/                  # Configuration files
├── database/                # Migrations, factories, seeders
│   ├── migrations/
│   ├── factories/
│   └── seeders/
├── public/                  # Public assets (JS, CSS, images)
├── resources/               # Blade views, CSS/JS assets
│   ├── views/
│   ├── css/
│   ├── js/
│   └── images/
├── routes/                  # Web and API routes
│   └── web.php
├── storage/                 # Generated files and logs
├── tests/                   # Automated tests
├── artisan                  # Laravel CLI tool
├── composer.json            # PHP dependencies
├── package.json             # JS dependencies
└── vite.config.js           # Frontend build config with Vite
```

---

## Features

-   CRUD management of pixel positions
-   Controller and route handling
-   Database migrations
-   Blade templating and asset management with Vite
-   Basic authentication flow (registration, login, logout)

---

## Installation

1. **Clone the repository:**

```bash
git clone https://github.com/LSCasas/pixel-positions.git
cd pixel-positions
```

2. **Install PHP dependencies:**

```bash
composer install
```

3. **Install frontend dependencies:**

```bash
npm install
```

4. **Copy and configure environment file:**

```bash
cp .env.example .env
```

Update `.env` with your database and app settings.

5. **Generate application key:**

```bash
php artisan key:generate
```

6. **Run database migrations:**

```bash
php artisan migrate
```

7. **(Optional) Seed database with sample data:**

```bash
php artisan db:seed
```

8. **Build frontend assets:**

```bash
npm run build
```

or for development:

```bash
npm run dev
```

9. **Start development server:**

```bash
php artisan serve
```

---

## How to Use

Open your browser and visit:

```
http://localhost:8000
```

From there, you can interact with the app, manage pixel positions, and use authentication features.

---

## Available Routes

-   **Home:** `/` — List all jobs (pixel positions)
-   **Create Job:** `/jobs/create` (requires auth)
-   **Store Job:** `/jobs` (POST, requires auth)
-   **Search:** `/search`
-   **Tag Filter:** `/tags/{tag:name}`

**Authentication (Guest only):**

-   **Register:** `/register` (GET, POST)
-   **Login:** `/login` (GET, POST)

**Logout (Authenticated):**

-   **Logout:** `/logout` (DELETE)

---

## Requirements

-   PHP 8.x
-   Laravel 10.x
-   Composer
-   Node.js and npm
-   Compatible relational database (MySQL, PostgreSQL, etc.)

---

## Contribution

1. Fork the repository
2. Create a feature branch:

```bash
git checkout -b feature/my-feature
```

3. Commit your changes:

```bash
git commit -am "Add new feature"
```

4. Push to your branch:

```bash
git push origin feature/my-feature
```

5. Open a Pull Request for review

---

## Learn More

-   [Laravel Documentation](https://laravel.com/docs)
-   [Laracast](https://laracasts.com/)
-   [Laravel Migrations](https://laravel.com/docs/migrations)
-   [Laravel Authentication](https://laravel.com/docs/authentication)
-   [Vite in Laravel](https://laravel.com/docs/vite)

---

Thank you for using Pixel Positions! Contributions and feedback are welcome.
