<?php
require_once("class.cryptor.php");
$crypt = new Cryptor();

if(isset($_GET["id"])){
    $userid = $_GET["id"];
    $decryptedid = $crypt->decryptId($userid);
echo "This is thwe user id:".$decryptedid;
}
?>