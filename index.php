<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

</style>
<body>
<?php
$redak=$_GET['redak'];
$stupac=$_GET['stupac'];
?>
    <form>
    <table>
        <tr>
    Broj redaka
    <input type="number" name="redak" value="<?php echo $redak;?>">
    Broj stupaca
    <input type="number" name="stupac" value="<?php echo $stupac;?>">
    <input type="submit" value="Kreiraj tablicu">
    </tr>
    </table>
    </form>
    <hr/>
<?php

echo "<table  width ='200' style='text-align:center'  border=\"1\">";
for ($k=$stupac+$redak-1;$k>$redak;$k--){
    echo '<tr>','<td>', $k,'</td>', '</tr>';
}
for ($i=$redak;$i>0;$i--){
   //echo '<tr>';
         echo '<td>', $i,'</td>';
   //echo '</tr>'; 
    }

?>

</body>
</html>
