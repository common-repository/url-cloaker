<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php
    $url = (isset($_GET['id'])) ? $_GET['id'] : 'Lw==';
    $wp_letsfxurl_arr = array();
    if(file_exists(realpath("../").'/wp_letsfxurl.set'))      
      $wp_letsfxurl_arr = unserialize(file_get_contents(realpath("../").'/wp_letsfxurl.set')); 
      
    if(count($wp_letsfxurl_arr)==0){
       $wp_letsfxurl_arr['hide'] = 11;
       $wp_letsfxurl_arr['delay'] = 10;
       $wp_letsfxurl_arr['red'] = 0;
       $wp_letsfxurl_arr['top'] = '<script type="text/javascript">      google_ad_client = "pub-3390108329256569";      google_ad_channel="9342924311"; google_ad_width = 728;       google_ad_height = 90;       google_ad_format = "728x90_as";       google_ad_type = "text";       google_color_border = "#ffffff";       google_color_url = "#0000ff";       google_color_link = "#0000ff";       google_alternate_color = "#ffffff";       google_color_bg = "#ffffff";       google_color_text = "";      </script>      <script src="http://pagead2.googlesyndication.com/pagead/show_ads.js" type="text/javascript"></script>';
       $wp_letsfxurl_arr['other1'] = '<script type="text/javascript"> google_ad_client = "pub-3390108329256569";  google_ad_channel="9342924311"; google_ad_width = 336;                      google_ad_height = 280;                      google_ad_format = "336x280_as";                      google_ad_type = "image";                      google_color_border = "#ffffff";                      google_color_url = "#0000ff";                      google_color_link = "#0000ff";                      google_alternate_color = "#ffffff";                     google_color_bg = "#ffffff";                      google_color_text = "";                      </script>                     <script src="http://pagead2.googlesyndication.com/pagead/show_ads.js" type="text/javascript">                  </script>';
       $wp_letsfxurl_arr['other2'] = '<script type="text/javascript"> google_ad_client = "pub-3390108329256569";  google_ad_channel="9342924311"; google_ad_width = 336;                      google_ad_height = 280;                      google_ad_format = "336x280_as";                      google_ad_type = "image";                      google_color_border = "#ffffff";                      google_color_url = "#0000ff";                      google_color_link = "#0000ff";                      google_alternate_color = "#ffffff";                     google_color_bg = "#ffffff";                      google_color_text = "";                      </script>                     <script src="http://pagead2.googlesyndication.com/pagead/show_ads.js" type="text/javascript">                  </script>';
    }
    
    if(strpos($url,'http://')===false) $url = base64_decode($url);
    
    ?><div align="center">       
   <?
   
   echo html_entity_decode($wp_letsfxurl_arr['top']);    
   
   //echo '<br><br><p align="center">.. Please wait ..</p><br>';
   echo "<span id=\"link\" >.. Please wait seconds to get your link..</span><br>";
   //echo '<p align="center">..You will be directed to link within seconds..</p><br>';
   
  ?></div>
  <div align="center"> 
        <table align="center">
           <tr>
              <td>
                 <? echo html_entity_decode ($wp_letsfxurl_arr['other1']);  ?>
              </td>
              <td>
                 <? echo html_entity_decode ($wp_letsfxurl_arr['other1']);  ?>
              </td>
           </tr>
        </table>
   </div>
   <br><br>
   <small>Powered by <a href="http://www.letsfx.com/URLCloaker"> URL Cloaker for Wordpress</a></small>
   <?
    
   if($wp_letsfxurl_arr['red']) echo '<meta http-equiv="refresh" content="'.(html_entity_decode($wp_letsfxurl_arr['red'])).';url=jump.php?url='.$url.'">';
   $aurl = "<a href=\"http://anonym.to/?$url\" style=\"text-align:center;\" rel=\"nofollow\">$url</a><br>";
      
?>
<script type="text/javascript">
   var tout = '<?echo html_entity_decode($wp_letsfxurl_arr['delay']);?>';
   var aurl = '<? echo $aurl?>';
   setTimeout('document.getElementById("link").innerHTML = aurl', parseInt(tout)*1000);
</script>