<?php
session_start();
?>

<?php
echo $_POST['nick'];
echo $_SESSION["nick"];
$_SESSION["nick"] = $_POST['nick'];

?>
<script>
    location.replace('user2.php');
    
    </script>