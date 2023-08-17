<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "wallmart"; // Replace with your database name

    $conn = new mysqli($hostname, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST["username"];
    $password = $_POST["password"];
    $action = $_POST["action"]; // Add a hidden input field in your HTML form to indicate the action

    if ($action === "signup") {
        $email = $_POST["email"];
        $repeatPassword = $_POST["repeat-password"];

        // Check if passwords match
        if ($password !== $repeatPassword) {
            echo "Passwords do not match. Please try again.";
        } else {
            // Hash the provided password before storing it
            $hashedPassword = sha1($password); // Example hash function, use a secure hashing method

            // Perform additional validation here if needed before inserting data

            $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashedPassword', '$email')";

            if ($conn->query($sql) === TRUE) {
                header("Location: walmart[1].html");
                exit();
            } else {
                echo "Registration failed. Please try again.";
            }
        }
    } elseif ($action === "signin") {
        // Hash the provided password before querying the database
        $hashedPassword = sha1($password); // Example hash function, use a secure hashing method

        // Perform additional validation here if needed before querying the database

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$hashedPassword'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            echo "Login successful!";
        } else {
            echo "Login failed. Please check your credentials.";
        }
    }

    $conn->close();
}
?>
