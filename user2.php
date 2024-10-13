<!DOCTYPE html>
<html lang="PL-pl">
<?php
session_start();
$nick = $_SESSION["nick"];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php
     echo "<title>Witaj ". $nick."</title>";
     ?> 
    <link rel="stylesheet" href="../projekt/style.css">
    <style>
iframe{
  position: absolute;
  top:8%;
  left: 0.5%;
  bottom: 0;
  right: 0.5%;
  width: 99%;
  height: 80%;
}


form{
    display: flex;
    position: absolute;
    bottom:0px;
    width: 99%;
}
    </style>
</head>

<body>
    <form action="user2.php" method="POST">
<input type="text" name="mess" maxlength="255" style="width:80%; left:0px">
<input type="submit" onsubmit="return false" style="width:20%; float-right:0px">
</form>
<a href="czystka.php">czystka</a><br>
<?php
echo "Chatujesz jako <b>".$nick."</b>";

if(isset($_POST['mess'])){
    $wiadomosc = $_POST['mess'];
    $conn = mysqli_connect('', '', '', '');
            $insert = "INSERT INTO chat(user , wiadomosc) VALUES ('$nick' , '$wiadomosc')";
            if($wiadomosc != null){
                mysqli_query($conn, $insert);
                  }}
$_POST['mess'] = "";
?>

<iframe width="100%" src="chat.php"></iframe>
</body>

</html>