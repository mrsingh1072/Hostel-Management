<?php
$dbuser="if0_42056941";
$dbpass="Saurabh1100";
$host="sql301.infinityfree.com";
$db="if0_42056941_trimurtihostel";

$mysqli = new mysqli($host,$dbuser,$dbpass,$db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>