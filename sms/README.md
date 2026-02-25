# School Management System

A simple and attractive school management system built with PHP and MySQL.

## Developer Information
**Name:** Hirwa Kayitare Fernand  
**Skills:** HTML, CSS, JavaScript, Vue.js, Node.js, PHP

## Features
- Home page with portfolio
- About page
- Secure login system
- Dashboard with statistics
- User management (Add, View, Update, Delete)
- Student management (Add, View, Update, Delete)
- Responsive and attractive design

## Installation Instructions

### Prerequisites
- XAMPP installed on your system
- Web browser

### Setup Steps

1. **Copy Project Files**
   - Copy the entire `sms` folder to `C:\xampp\htdocs\`

2. **Start XAMPP**
   - Open XAMPP Control Panel
   - Start Apache
   - Start MySQL

3. **Import Database**
   - Open your browser and go to `http://localhost/phpmyadmin`
   - Click on "Import" tab
   - Click "Choose File" and select `database.sql` from the project folder
   - Click "Go" to import the database

4. **Access the Application**
   - Open your browser and go to `http://localhost/sms`

## Default Login Credentials
- **Username:** admin
- **Password:** admin123

## Project Structure
```
sms/
├── index.php           # Home page
├── about.php           # About page
├── login.php           # Login page
├── dashboard.php       # Dashboard
├── view_users.php      # View all users
├── view_students.php   # View all students
├── add_user.php        # Add user handler
├── add_student.php     # Add student handler
├── update_user.php     # Update user handler
├── update_student.php  # Update student handler
├── delete_user.php     # Delete user handler
├── delete_student.php  # Delete student handler
├── logout.php          # Logout handler
├── config.php          # Database configuration
├── style.css           # Stylesheet
├── database.sql        # Database schema
└── README.md           # This file
```

## Usage

### Adding a New User
1. Login to the dashboard
2. Click "Add New User" in the sidebar
3. Fill in the form (Email, Username, Password)
4. Click "Add User"

### Adding a New Student
1. Login to the dashboard
2. Click "Add New Student" in the sidebar
3. Fill in the form (Student ID, Name, Email, Phone, Course)
4. Click "Add Student"

### Viewing Users
1. Click "View Users" in the sidebar
2. You can Update or Delete users from this page

### Viewing Students
1. Click "View Students" in the sidebar
2. You can Update or Delete students from this page

## Technologies Used
- PHP 7+
- MySQL
- HTML5
- CSS3
- JavaScript

## Security Features
- Password hashing using PHP's password_hash()
- Session management
- SQL injection prevention using mysqli_real_escape_string()
- Protected admin routes

## Browser Compatibility
- Chrome (recommended)
- Firefox
- Edge
- Safari

## Support
For any issues or questions, please contact the developer.

---
Developed by Hirwa Kayitare Fernand
