<?php
$host = "localhost"; // database host
$username = "root"; //  database username
$password = ""; // database password
$database = ""; // database name

//database connection
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



require_once("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["register"])) {
        // Registration 
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash the password
        $email = $_POST["email"];

        $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST["login"])) {
        // Login 
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row["password"])) {
                echo "Login successful!";
                //set session variables or redirect the user to a dashboard here.
            } else {
                echo "Incorrect password.";
            }
        } else {
            echo "User not found.";
        }
    }
    $conn->close();
}
?>
