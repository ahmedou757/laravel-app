# 📝 Simple Task Manager (Laravel 12)

A clean and functional Task Management application built with **Laravel 12** and **Tailwind CSS**. This project demonstrates basic CRUD operations, MVC architecture, and modern UI design.

## 🚀 Features
- **Create Tasks:** Add new tasks easily with title validation.
- **Read Tasks:** View a list of all current tasks with creation dates.
- **Update Tasks:** Edit existing tasks to stay organized.
- **Delete Tasks:** Remove completed or unwanted tasks.
- **Human-Readable Time:** Shows "2 minutes ago" or "1 hour ago" using Laravel Carbon.
- **Responsive Design:** Fully responsive UI styled with Tailwind CSS.

## 🛠️ Tech Stack
- **Framework:** [Laravel 12](https://laravel.com)
- **Styling:** [Tailwind CSS](https://tailwindcss.com)
- **Database:** SQLite (Default) or MySQL
- **Environment:** GitHub Codespaces

## 📦 Installation & Setup

Follow these steps to run the project locally:

1. **Clone the repository:**
   ```bash
   git clone [https://github.com/ahmedou757/laravel-app.git]
   cd laravel-app
2. Install dependencies:

Bash
composer install
npm install
3. Set up environment:

Bash
cp .env.example .env
php artisan key:generate
4. Run migrations:

Bash
php artisan migrate
5. Start the server:

Bash
php artisan serve
6. Then visit: http://localhost:8000

📁 Project Structure Highlights
Controller: app/Http/Controllers/TaskController.php (Handles the logic)

Model: app/Models/Task.php (Database interactions)

View: resources/views/tasks/index.blade.php (The UI built with Blade)

Routes: routes/web.php (Clean and RESTful routing)

🤝 Contributing
Contributions, issues, and feature requests are welcome!

📜 License
This project is open-source

Created by [@ahmedou757]