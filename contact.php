<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="topnav">
        <a href="index.html">Home</a>
        <a href="race.php">Races</a>
        <a href="food.php">Foods</a>
        <a href="festival.php">Festivals</a>
        <a class="active" href="contact.php">Contact Us</a>
    </div>
    <h2>Welcome to Contact Us</h2>
    <p>We're always open for comments and ideas.</p>

    <form id="contactForm">
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="message">Message:</label>
        <textarea name="message" required></textarea>

        <button type="submit">Submit</button>
    </form>

    <div id="responseMessage"></div>

    <!-- Include the JavaScript file -->
    <script src="script.js"></script>
</body>
</html>
