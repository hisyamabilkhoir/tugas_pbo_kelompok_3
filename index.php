<?php
include_once "Kambing.php";
include_once "Sapi.php";

echo "------- Data Kambing -------";
echo "<br>";
$kambing = new Kambing();
echo $kambing->berkomunikasi();
echo "<br>";
echo $kambing->makan();

echo "<br>";

echo "------- Data Sapi -------";
echo "<br>";
$sapi = new Sapi();
echo $sapi->berkomunikasi();
echo "<br>";
echo $sapi->makan();
