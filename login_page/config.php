<?php
$host = 'localhost';
$db   = 'cineaura';      // Your database name
$user = 'root';          // Your MySQL username
$pass = 'Cdevyani@1'; // 👈 CHANGE THIS LINE
$charset = 'utf8mb4';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass, $options);
    // Debug connection (remove after testing)
    echo "<script>console.log('DB Connected to: $db')</script>";
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>