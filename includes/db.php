<?php
$conn = pg_connect("host=127.0.0.1 dbname=katya_site user=postgres password=123")
   or die("Connection error: " . pg_last_error());
?>
