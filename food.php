<?php
// Database connection
$host = 'localhost';
$db = 'malaysian_culture';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foods</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="topnav">
        <a href="index.html">Home</a>
        <a href="race.php">Races</a>
        <a class="active" href="food.php">Foods</a>
        <a href="festival.php">Festivals</a>
        <a href="contact.php">Contact Us</a>
    </div>
    <h2>Foods of Malaysia</h2>
    <p>Malaysia's diversity in culture brings in a lot of choices of food to pick from. Being a Malaysian is living the luxury to have such a large platter.</p><br>
    <?php
    $result = $conn->query("SELECT * FROM foods");
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            echo '<h3>' . $row['food_name'] . '</h3>';
            echo '<p>' . $row['description'] . '</p>';
            echo '<img src="' . $row['image'] . '" alt="' . $row['food_name'] . '">';
        }
    } else {
        echo "No foods found.";
    }
    ?>
</body>
</html>

<?php
$conn->close();
?>
