<?php
require 'DatabaseInteraction.php';

$dbi = new DatabaseInteraction ();
$dbi->logout ();
$url = 'http://localhost/JSNWeb/index.php';
header ( "Location:$url" );
?>