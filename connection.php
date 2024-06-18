<<<<<<< HEAD
<?php
$hostname = 'localhost';
$username = 'root';
$password = 'Little1314107';
$database = 'marsia_travels';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully to the database: $database";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}
?>
=======
<?php 
$host = 'localhost';
$db = 'marsia_travels';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
 
try {
    $connect = new PDO($dsn, $user, $pass, $opt);
 
}
catch (PDOException $e)
{
    echo $e->getMessage();
    die("sorry, Database probleem");
}''
    
>>>>>>> 864ee25204adb0a3290540e07d4865a3dcd5be04
