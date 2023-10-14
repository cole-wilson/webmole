<?php
$filename = $_GET['u'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if $ext == 'jpg':
    echo "img";
if $ext == 'com':
    echo "website";

echo $ext;
?>