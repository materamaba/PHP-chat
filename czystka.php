<?php

$conn = mysqli_connect('', '', '', '');
            
          
            $sql = "DELETE FROM chat;";
            mysqli_query($conn, $sql);

?>
<script>
location.replace('index.php');
    </script>