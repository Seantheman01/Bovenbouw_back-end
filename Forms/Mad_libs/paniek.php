<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onkunde</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Mad Libs</h1>
    </header>
    <div class="menu">
        <a href="paniek.html">Er heerst paniek...</a>
        <a href="onkunde.html">Onkunde</a>
    </div>
    <form>
        Er heerst paniek in het koninkrijk <?php echo $_GET["drie"]; ?>. 
        Koning <?php echo $_GET["zes"]; ?> is ten eide raad en als koning <?php echo $_GET["zes"]; ?> ten eide raad is, 
        dan roept hij zijn ten-eide-raadsheer <?php echo $_GET["twee"]; ?>.<br>

        "<?php echo $_GET["twee"]; ?>! Het is een ramp. Het is een schande!"<br>

        "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br>

        "Mijn <?php echo $_GET["één"]; ?> is verdwenen! Zo maar, zonder waarschuwing. 
        En ik had net <?php echo $_GET["vijf"]; ?> voor hem gekocht!"<br>

        "Majesteit, uw <?php echo $_GET["één"]; ?> komt vast vanzelf weer terug?"<br>

        "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_GET["acht"]; ?> leren?"<br>

        "Maar Sire, daar kunt u toch uw <?php echo $_GET["zeven"]; ?> voor gebruiken."<br>

        "<?php echo $_GET["twee"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br>

        "<?php echo $_GET["vier"]; ?>, Sire."
    </form>
    <footer>
        © Sean van Gooswilligen
    </footer>
</body>
</html>