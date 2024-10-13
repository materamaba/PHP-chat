<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="../projekt/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rajdhani');
        :root {
    --font-primary: 'Rajdhani';
    --glitched-duration: 0.9s;
    --background-color: #ff003c;
  }
        body{
            background: linear-gradient(to bottom, #000000 20%, #7e0000 200%);
    background-repeat: no-repeat;
    background-attachment: fixed;
    color: lightgray;
    text-align: center;
    justify-content: center;
        }
        </style>
</head>
<?php
$conn = mysqli_connect('sql4.5v.pl', 'materamaba_materamaba', 'rootroot', 'materamaba_materamaba');
$sql = "SELECT * FROM chat";
$wynik = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($wynik)) {
    $user = $row["user"];
    $wiadomosc = $row["wiadomosc"];
    $wiadomosc = htmlspecialchars($wiadomosc);
    // Check if the message contains a URL
    if (preg_match('/\b(https?:\/\/\S+.\S+)\b/', $wiadomosc, $matches)) {
        $url = $matches[0];
        $wiadomosc = str_replace($url, '<a target="_blank" href="' . $url . '">' . $url . '</a>', $wiadomosc);
    }
    

    
    echo "<b>" . $user . ":</b> " . $wiadomosc . "<br>";
}
?>
