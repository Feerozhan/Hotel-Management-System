# Hotel Management System

A simple and clean Hotel Management System built with **HTML**, **CSS**, **JavaScript**, **PHP**, **Laravel**, and **MySQL**. This project lets users book rooms online and gives the admin a dashboard to manage all bookings.

## Features

* User Login and Registration
* Browse Available Rooms
* Book a Room
* Store Booking Details in Database
* Admin Panel to View All Bookings
* Clean and Responsive UI

## Tech Stack

**Frontend:** HTML, CSS, JavaScript
**Backend:** PHP / Laravel
**Database:** MySQL
**Local Server:** XAMPP / Laravel Artisan

## Installation

### 1. Clone the Project

```bash
git clone https://github.com/yourusername/hotel-management-system.git
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Set Up Environment

Create a `.env` file:

```env
DB_DATABASE=hotel_db
DB_USERNAME=root
DB_PASSWORD=
```

Run migrations:

```bash
php artisan migrate
```

### 4. Run the Project

```bash
php artisan serve
```

Open in browser: `http://127.0.0.1:8000`

## Project Structure

```
hotel-management-system/
├── public/
├── resources/
│   ├── views/
│   └── css/
├── routes/
├── app/
├── database/
└── .env
```

## Admin Panel

Login as admin and manage room bookings.
You can:

* View users
* View bookings
* Update booking status

![Screenshot 196](image/Screenshot%20(196).png)
![Screenshot 197](image/Screenshot%20(197).png)
![admin Page](image/Screenshot%20(195).png)


## License

This project is free to use for learning or personal use.

---
