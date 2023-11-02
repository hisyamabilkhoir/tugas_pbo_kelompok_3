<?php
include "Kambing.php";

echo "------- Data Kambing -------";
echo "<br>";
$kambing = new Kambing();
echo $kambing->berkomunikasi();
echo "<br>";
echo $kambing->makan();
