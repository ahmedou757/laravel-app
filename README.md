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
   git clone https://github.com/ahmedou757/laravel-app.git
   cd laravel-app

```

2. **Install dependencies:**
```bash
composer install
npm install

```


3. **Set up environment:**
```bash
cp .env.example .env
php artisan key:generate

```


4. **Run migrations:**
```bash
php artisan migrate

```


5. **Start the server:**
```bash
php artisan serve

```


*Then visit: `http://localhost:8000*`

## 📁 Project Structure Highlights

* **Controller:** `app/Http/Controllers/TaskController.php` (Handles the logic)
* **Model:** `app/Models/Task.php` (Database interactions)
* **View:** `resources/views/tasks/index.blade.php` (The UI built with Blade)
* **Routes:** `routes/web.php` (Clean and RESTful routing)

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

## 📜 License

This project is open-source and licensed under the [MIT License](https://www.google.com/search?q=LICENSE).

---

**Created by [@ahmedou757**](https://www.google.com/search?q=https://github.com/ahmedou757)

```

### 💡 ملاحظات بسيطة بعد اللصق:
1. تأكد من أنك قمت بحذف أي نص قديم في ملف `README.md` قبل لصق هذا النص.
2. تأكد من أنك في المجلد الرئيسي للمشروع وليس داخل مجلد `app` كما كنا سابقاً.
3. بعد الحفظ، نفذ الأوامر التالية لرفع الشكل الجديد:
   ```bash
   git add README.md
   git commit -m "docs: finalize professional README"
   git push origin main

```
