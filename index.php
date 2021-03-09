<?php
include "header.php";
$wizard = "Gandalf";
require "wizard.php";
echo "Hello fellowship";

$ringOwnerName = 'Frodon';
$ringCreatorName = 'Sauron';
$companyMembersNbr = 12;
$ringOnFinger = true;
$ringOwnerName = "Boromir";
$companyMembersNbr = $companyMembersNbr + 1;
echo $companyMembersNbr;
echo $middleEarth;
$middleEarth = " ";

echo " le nom du porteur est ".  $ringOwnerName;
$name= " le nom du porteur est ".  $ringOwnerName;
$name = $name . " " . $ringCreatorName ;
echo $name;
echo strtoupper($name);
$name = strtoupper($name);
echo $name;
include "footer.php";
?>