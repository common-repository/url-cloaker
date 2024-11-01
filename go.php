<?php
   $url = (isset($_GET['url'])) ? $_GET['url'] : '/';
   $referer = $_SERVER['HTTP_REFERER'];
   if($referer == "")
      echo "<meta http-equiv=\"refresh\" content=\"0;url=$url?$referer\">";    
   else
      echo "<meta http-equiv=\"refresh\" content=\"0;url=http://anonym.to/?$url\">";    
   
?>
