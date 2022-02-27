<!Doctype html>
<html lang="lt">

<head>
    <meta charset="UTF-8">
    <title>Automobilio valymas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Aruno_svara_dizainas.css">
    <link rel="stylesheet" href="css/Aruno_svara_layout.css">
</head>

<body>

<div>
    <div class="a header">
        <div class="img_valymas">
            <img src="img/valymas_logo.jpeg" alt="LOGO" style="width: 148px; height: 148px;">
        </div>
        <div class="arunas_svara">
            <h3 class="text">Arūno švara<br></h3>
            <p class="text">Cheminis valymas</p>
            <a href="index.html"><button class="btn">Paslaugos</button></a>
            <a href="Automobilio_valymas.html"><button class="btn">Automobilio valymas</button></a>
            <a href="Baldu_valymas.html"><button class="btn">Baldu valymas</button></a>
            <a href="Irangos_nuoma.html"><button class="btn">Įrangos nuoma</button></a>
            <a href="Aplinkos_tvarkymas.html"><button class="btn">Aplinkos tvarkymas</button></a>
            <a href="Aruno_svara_kontaktai.html"><button class="btn">Kontaktai</button></a>
            <a href="Aruno_svara_galerija.html"><button class="btn">Galerija</button></a>
            <a href="feedba.php"><button class="btn">Atsiliepimai</button></a>
        </div>
        <div class="contact_links">
            <a href="https://www.facebook.com/arunosvara" target="_blank"><img class="fb_img" src="img/FBB.png" width="512" height="512" alt="Facebook"/></a>
        </div>
    </div>
</div>
<h4 class="text text_place">Mums svarbi Jūsų nuomonė. Dėkojame už atsiliepimą!</h4>
</body>

<?php

$servername = "db";
$username = "devuser";
$password = "devpass";
$dbname = "kcs_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];

$feedback = $_POST['feedback'];
$sql = "INSERT INTO feedbacks (Name, feedback) VALUES ('$name','$feedback')";
$result = $conn->query($sql);

$conn->close();

