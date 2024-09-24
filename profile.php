<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

$name = $_SESSION['name'];
$courses = $_SESSION['courses'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Tuition Center</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS for styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('pngtree-tuition-enrollment-poster-background-material-image_173103.jpg'); /* Background image */
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
            border-radius: 8px;
        }

        h1, h2 {
            text-align: center;
            color: #FFD700; /* Gold color for headers */
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        .video-container {
            position: relative;
            width: 100%;
            height: auto;
            margin-top: 20px;
        }

        video {
            width: 100%;
            border-radius: 8px;
        }

        /* Style for logout button */
        .logout {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background: #FF6347; /* Tomato color */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .logout:hover {
            background: #FF4500; /* Darker tomato color */
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($name); ?>!</h1>
        <h2>Your Registered Courses:</h2>
        <p><?php echo htmlspecialchars($courses); ?></p>

        <h2>Course Timings:</h2>
        <p>
            Math: Monday, 10:00 AM - 11:00 AM<br>
            Science: Tuesday, 11:00 AM - 12:00 PM<br>
            <!-- Add other course timings as needed -->
        </p>

        <div class="video-container">
            <h2>Tuition Center Overview</h2>
            <video controls autoplay muted loop>
                <source src="Coaching_Institute_Advertisement_Video__Coaching_Institute_Video__Video_Production_agency_in_India.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <a class="logout" href="logout.php">Logout</a>
    </div>

</body>
</html>
