<?php
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http')
.'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

header('Location: '.str_replace('admin.php','',$url).'wp-content/themes/urbanomedialab/cm/admin.php');
?>