<?php
require_once 'config.php';

$admin_username = 'admin';
$admin_email = 'admin@school.com';
$admin_password = password_hash('admin123', PASSWORD_DEFAULT);

$check = mysqli_query($conn, "SELECT * FROM users WHERE username='admin'");

if (mysqli_num_rows($check) > 0) {
    $query = "UPDATE users SET password='$admin_password', role='admin' WHERE username='admin'";
    mysqli_query($conn, $query);
    echo "Admin password updated successfully!<br>";
} else {
    $query = "INSERT INTO users (username, email, password, role) VALUES ('$admin_username', '$admin_email', '$admin_password', 'admin')";
    mysqli_query($conn, $query);
    echo "Admin user created successfully!<br>";
}

echo "<br>Login credentials:<br>";
echo "<strong>Admin:</strong><br>";
echo "Username: admin<br>";
echo "Password: admin123<br><br>";
echo "<strong>Note:</strong> Admin can add users. Users can only add students.<br>";
echo "<br><a href='login.php'>Go to Login</a>";
?>
