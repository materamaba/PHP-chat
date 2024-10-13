<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="../projekt/style.css">
    <style>  
form{
    display: flex;
    position: absolute;
    width: 99%;
}
    </style>
</head>
<body>

<h1>Witaj na chacie!</h1>
<img src="https://as2.ftcdn.net/v2/jpg/04/93/91/31/500_F_493913135_q0Ar7Aund7lRPFSxa8qg1hTQmhG5kdNP.jpg">
<h3>Wpisz poniżej swój nick</h3>

<form action="sesyjka.php" method="POST">
    <input type="text" name="nick" id="nick" placeholder="nick" maxlength="11" style="width:50%; left:0px">
    <input type="submit" value="Zacznij rozmawiać" style="width:50%; float-right:0px">
</form>
<body>
    </html>