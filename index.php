<?php
include_once "Kambing.php";
include_once "Sapi.php";
include_once "Anjing.php";

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

echo "<br>";

echo "------- Data Anjing -------";
echo "<br>";
$anjing = new Anjing();
echo $anjing->berkomunikasi();
echo "<br>";
echo $anjing->makan();
