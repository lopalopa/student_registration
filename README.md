# 🎓 Student Registration System

This is a simple **Student Registration System** built with **PHP** and **MySQL**. It allows users to fill in a student registration form, store the data in a database, and view the registered student list in a report.

## 📌 Features

- Student Registration Form (Name, Email, Course, Gender)
- Store data in MySQL database
- Display all registered students in a report page
- Built using plain PHP (no frameworks)
- Clean and simple UI using basic HTML/CSS

## 🛠️ Technologies Used

- PHP (Core PHP)
- MySQL (Database)
- HTML5
- CSS3

## 📂 Project Structure

student_registration/
├── db.php # Database connection file
├── index.php # Student registration form
├── register.php # PHP script to insert form data into database
├── report.php # Display registered student records
└── README.md # Project documentation

sql
Copy
Edit

## 📋 Database Setup

1. Open your **phpMyAdmin**.
2. Create a new database, for example: `student_registration`.
3. Run the following SQL to create the `students` table:

```sql
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
⚙️ How to Run the Project
Make sure you have XAMPP or WAMP installed and running.

Place the project folder (student_registration) inside the htdocs directory (C:\xampp\htdocs\student_registration).

Import the database as shown in the Database Setup.

Open your browser and go to:
http://localhost/student_registration/index.php

Fill out the form and submit.

Visit report.php to see all registered students:
http://localhost/student_registration/report.php

📷 Screenshots
You can insert screenshots here of the form and report page for better understanding.

💡 Use Cases
Useful for learning form handling and database operations in PHP.

Can be extended with features like validation, update, and delete operations.

Great starting project for beginners in PHP and MySQL.

📞 Contact
For any questions or suggestions, feel free to connect:

📧 Email: rashmipravamishra@gmail.com

🔗 LinkedIn: https://www.linkedin.com/in/rashmi-mishra-187734106/

✅ Happy Coding!

