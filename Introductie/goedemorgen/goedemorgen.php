<html>
<head>
</head>
</html>
<style>

</style>

<?php
date_default_timezone_set("Europe/Amsterdam");
$tijd = date("H:i:s");

if ($tijd >= "06:00:00" && $tijd < "12:00:00") {
    $achtergrond = '<body style="background-image: url(images/morning.png)">';
    echo "<h1>Goedemorgen!</h1>";
}

else if ($tijd >= "12:00:00" && $tijd < "18:00:00") {
    $achtergrond = '<body style="background-image: url(images/afternoon.png)">';
    echo "<h1>Goedemiddag!</h1>";
}

else if ($tijd >= "18:00:00" && $tijd < "24:00:00") {
    $achtergrond = '<body style="background-image: url(images/evening.png)">';
    echo "<h1>Goede avond!</h1>";
}

else if ($tijd >= "00:00:00" && $tijd < "06:00:00") {
    $achtergrond = '<body style="background-image: url(images/night.png)">';
    echo "<h1>Goede nacht!</h1>";
}

echo "<h1>".$tijd."</h1>";
echo $achtergrond;
?>
</html>