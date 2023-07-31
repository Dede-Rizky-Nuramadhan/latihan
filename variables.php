<!DOCTYPE html>
<html>
<title>Belajar</title>
<?php
class dealer
{
    var $merk = "Honda";
    var $type = "Ignis";
    var $penumpang = "4 orang";
    var $bahanbakar = "Pertamax";

}
class dealer2
{
    var $merk = "Toyota";
    var $type = "Pajero";
    var $penumpang = "10 orang";
    var $bahanbakar = "Pertamax ";

}
$mobil = new dealer();
$mobil2 = new dealer2();
?>
<html>
<table>

    <tr>
        <th align="left">Merek Mobil</th>
        <th>:</th>
        <th align="left">
            <?php echo $mobil->merk ?>
        </th>
    </tr>
    <tr>
        <th align="left">Type Mobil</th>
        <th>:</th>
        <th align="left">
            <?php echo $mobil->type ?>
        </th>
        </th>
    <tr>
        <th align="left">Penumpang</th>
        <th>:</th>
        <th align="left">
            <?php echo $mobil->penumpang ?>
        </th>
    </tr>
    <tr>
        <th align="left">Bahan Bakar</th>
        <th>:</th>
        <th align="left">
            <?php echo $mobil->bahanbakar ?>
        </th>
    </tr>
</table>
<table>

    <tr>
        <th align="left">Merek Mobil</th>
        <th>:</th>
        <th align="left">
            <?php echo $mobil2->merk ?>
        </th>
    </tr>
    <tr>
        <th align="left">Type Mobil</th>
        <th>:</th>
        <th align="left">
            <?php echo $mobil2->type ?>
        </th>
        </th>
    <tr>
        <th align="left">Penumpang</th>
        <th>:</th>
        <th align="left">
            <?php echo $mobil2->penumpang ?>
        </th>
    </tr>
    <tr>
        <th align="left">Bahan Bakar</th>
        <th>:</th>
        <th align="left">
            <?php echo $mobil2->bahanbakar ?>
        </th>
    </tr>
</table>

</html>