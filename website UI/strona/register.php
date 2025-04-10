<?php
$conn = new mysqli("localhost", "root", "", "Data_base");

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Rejestracja udana!";
} else {
    echo "Błąd: " . $conn->error;
}

$conn->close();
?>