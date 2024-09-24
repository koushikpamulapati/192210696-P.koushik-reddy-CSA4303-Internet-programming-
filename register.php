<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tuition_center";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    
    // Handle multiple courses (assuming a select dropdown or checkboxes for courses)
    $courses = $_POST['courses']; // Array of selected courses
    $courses_str = implode(", ", $courses); // Convert array to a comma-separated string

    $sql = "INSERT INTO students (name, email, password, courses) VALUES ('$name', '$email', '$password', '$courses_str')";
    
    if ($conn->query($sql) === TRUE) {
        // Registration successful, redirect to login.html
        header("Location: login.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
