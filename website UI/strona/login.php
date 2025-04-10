<?php
$conn = new mysqli("localhost", "root", "", "Data_base");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Zalogowano pomyślnie!";
        // Możesz dodać sesję i przekierowanie
    } else {
        echo "Błędne hasło.";
    }
} else {
    echo "Nie znaleziono użytkownika.";
}

$conn->close();
?><?php
