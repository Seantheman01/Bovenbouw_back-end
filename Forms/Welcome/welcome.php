<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="get">
        <label for="naam">Naam:</label><br>
        <input type="text" id="naam" name="naam" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <input type="submit" value="verstuur">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET["naam"]) && isset($_GET["email"])) {
                echo "<h1>De ingevulde gegevens zijn:</h1>";
                echo "Naam: ", $_GET["naam"], "<br>";
                echo "Emailadres: ", $_GET["email"];
            }
        }
    ?>
</body>
</html>