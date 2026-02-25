<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if ($_SESSION['role'] != 'admin') {
    header('Location: dashboard.php');
    exit();
}

require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    
    if (!empty($_POST['password'])) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = "UPDATE users SET email='$email', username='$username', password='$password' WHERE id='$user_id'";
    } else {
        $query = "UPDATE users SET email='$email', username='$username' WHERE id='$user_id'";
    }
    
    if (mysqli_query($conn, $query)) {
        header('Location: view_users.php?success=User updated successfully');
    } else {
        header('Location: view_users.php?error=Failed to update user');
    }
    exit();
}
?>
