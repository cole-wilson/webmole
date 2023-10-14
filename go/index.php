<?php
$u = 'https://'.$_GET['u']; 
$html = file_get_contents($u);
$html = str_replace("http","https://webmole.rf.gd/go/?u=http",$html);
$html = str_replace('="/',"https://webmole.rf.gd/go/?u=https://www.reddit.com/",$html);
echo $html;
?>