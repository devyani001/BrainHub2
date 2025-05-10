<?php
include 'db.php';

$email = $_POST['username']; // username input is used here
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        echo "Login successful! Welcome, " . $row['username'];
    } else {
        echo "Incorrect password!";
    }
} else {
    echo "User not found!";
}

mysqli_close($conn);
?>
