# AudienceGrid

AudienceGrid is a mock CRM-style service built with Laravel. It is designed to receive and store structured data sent from a separate Laravel microservice. This application is part of the **Laravel Microservice** course.

👉 [Check out the full course here](https://www.garyclarke.tech/p/laravel-microservice)

## 🔗 Purpose

This application simulates a real-world third-party API or CRM that would receive subscription lifecycle events or user data from a microservice.

It works alongside the [Laravel Microservice](https://github.com/GaryClarke/laravel-microservice) application to demonstrate service-to-service communication, HTTP forwarding, and data storage in a decoupled system.

## 🧰 Tech Stack

- Laravel
- Tailwind CSS (via Vite + Laravel Breeze)
- SQLite (local development)

## 🧪 Features

- Receives incoming POST requests from the microservice
- Logs and stores contact and event data
- Displays contact fields via a simple Blade UI
- Uses a single route for tracking events (`/track`)

## 🚀 Getting Started

Clone the repo:

```bash
git clone https://github.com/GaryClarke/audiencegrid.git
cd audiencegrid
```

Install dependencies:

```bash
composer install
npm install && npm run dev
```

Set up the environment:

```bash
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
```

Run the server:

```bash
php artisan serve --port=8005
```

This app is designed to run on port `8005` while the Laravel Microservice runs on `8000`.

## 📚 Part of a Video Course

This repository accompanies the [**Laravel Microservice** course by Gary Clarke](https://www.garyclarke.tech). Each branch corresponds to a different lesson in the course.

🔗 [View the full course](https://www.garyclarke.tech/p/laravel-microservice)

## 🤝 License

This project is open-source and free to use for educational purposes.
