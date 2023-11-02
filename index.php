<?php
include "Kambing.php";

echo "------- Data Kambing -------";
$kambing = new Kambing();
echo $kambing->berkomunikasi();
echo "<br>";
echo $kambing->makan();
