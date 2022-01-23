<?php
require_once("class.cryptor.php");
$userid = 1;
$crypt = new Cryptor();
$newid = $crypt->encryptId($userid);
echo "<a href='http://localhost/php/php_securing_url_id/destinationpage.php?id=".$newid."'>Go To Page</a>";
?>