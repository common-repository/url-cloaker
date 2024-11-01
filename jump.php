<?php
$url = (isset($_GET['url'])) ? $_GET['url'] : '/';
   
echo "<meta http-equiv=\"refresh\" content=\"0;url=go.php?url=$url\">";    
exit;
?>
    