<!DOCTYPE html>
<html>
<title>www.class.php </title>
<?php
class Phone_Number
{
    var $no_hp;
    var $email;
    var $usia;
}
$andi = new Phone_Number();
$dede = new Phone_Number();

$andi->no_hp = "081374657276";
$andi->email = "andi27@gmail.com";
$andi->usia  =  "17 tahun";

$dede->no_hp = "081364473711";
$dede->email = "dederiski655@gmail.com";
$dede->usia = "18 tahun";
echo "Phone Number Untuk Andi" . "<br>";
echo $andi->no_hp;
echo "<br/>";
echo $andi->email;
echo "<br/>";
echo $andi->usia;

echo "<br/><br/>" . "Phone Number Untuk Dede" . "<br>";
echo $dede->no_hp;
echo "<br/>";
echo $dede->email;
echo "<br/>";
echo $dede->usia;
?>

</html>