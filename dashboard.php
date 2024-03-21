<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Noble Hospital</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to the Dashboard</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section id="services">
        <!-- Services content -->
    </section>

    <section id="contact">
        <!-- Contact content -->
    </section>

    <footer>
        <p>&copy; 2024 Noble Hospital. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
