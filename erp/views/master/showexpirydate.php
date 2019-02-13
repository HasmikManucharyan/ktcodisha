<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/vehicle">Vehicle >></a><a href="<?php echo URL; ?>master/vehiclemaster">Vehiclemaster >></a>Expiry Date >></p>
<?php

$date1=$rows['date("Y/m/d")'];
$date2=$rows['FitnessExpiryDate'];
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
?>

<?
  if ($diff <= 7) $color = "red";
  else if ($diff <= 30) $color = "yellow";
  else $color = "green";
  echo "<div style='background-color: {$color};'>Expires in {$diff} day(s)</div>";
?>