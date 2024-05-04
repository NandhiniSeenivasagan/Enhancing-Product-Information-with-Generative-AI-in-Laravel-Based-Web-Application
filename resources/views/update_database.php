<?php
$host = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'admin';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $aiTitle = $_POST['aiTitle'];
    $aiDescription = $_POST['aiDescription'];
    $id = $_POST['id'];

    $sql = "UPDATE productitem SET Product_Name='$aiTitle', Product_Description='$aiDescription' WHERE id=$id";

    $conn->exec($sql);

    echo "Updated successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>