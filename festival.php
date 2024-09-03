<?php
// Database connection
$servername = 'sql101.infinityfree.com';
$username = 'if0_37232003';
$password = 'AA83841352';
$dbname = 'if0_37232003_malaysian_culture';

$conn = new mysqli($servername, $username, $password, $dbname);

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
    <title>Festivals</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="topnav">
        <a href="index.html">Home</a>
        <a href="race.php">Races</a>
        <a href="food.php">Foods</a>
        <a class="active" href="festival.php">Festivals</a>
        <a href="contact.php">Contact Us</a>
    </div>
    <h2>Festivals of Malaysia</h2>
    <p>Malaysia is open to celebrating any festivals, whether or not it is their own culture or not. The inclusiveness from the people makes all festivals livelier than ever.</p><br>
    <?php
    $result = $conn->query("SELECT * FROM festivals");
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            echo '<h3>' . $row['festival_name'] . '</h3>';
            echo '<p>' . $row['description'] . '</p>';
            echo '<img src="' . $row['image'] . '" alt="' . $row['festival_name'] . '">';
        }
    } else {
        echo "No festivals found.";
    }
    ?>
</body>
</html>

<?php
$conn->close();
?>
