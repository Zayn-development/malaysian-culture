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
    <title>Racess</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="topnav">
        <a href="index.html">Home</a>
        <a class="active" href="race.php">Races</a>
        <a href="food.php">Foods</a>
        <a href="festival.php">Festivals</a>
        <a href="contact.php">Contact Us</a>
    </div>
    <h2>Races of Malaysia</h2>
    <p>Malaysia is blessed for being diverse and multicultural. Where various races are living in harmony within a country.</p><br>
    <?php
    $result = $conn->query("SELECT * FROM races");
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            echo '<h3>' . $row['race_name'] . '</h3>';
            echo '<p>' . $row['description'] . '</p>';
            echo '<img src="images/' . $row['image'] . '" alt="' . $row['race_name'] . '">';
        }
    } else {
        echo "No races found.";
    }
    ?>
</body>
</html>

<?php
$conn->close();
?>
