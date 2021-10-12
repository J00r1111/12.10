<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <div id="baner1">
        <img src="logo1.png" alt="Mój kalendarz">
    </div>
    <div id="baner2">
        <h1>KALENDARZ</h1>
        <p>miesiąc: lipiec, rok:2020</p>
    </div>
    <div id="glowny">

    <?php
    $db = new mysqli('localhost', 'root', '', 'egzamin5');
        
    $db->close();
     ?>
    </div>
    <div id="stopka">
        <form method="POST">
            <label>dodaj wpis:</label>
            <input>
            <button type="submit">DODAJ</button>
        </form>
        <p>Stronę wykonał: Marcin</p>
    </div>
</body>
</html>