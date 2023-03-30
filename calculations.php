<?php
  //Get the user input
  $heightOfTrapezoid = floatval($_POST["height"]);
  $sideAOfTrapezoid = floatval($_POST["side-a"]);
  $sideBOfTrapezoid = floatval($_POST["side-b"]);

  //Calculate the area
  $area = (($sideAOfTrapezoid + $sideBOfTrapezoid) * $heightOfTrapezoid) / 2;
  $areaRounded = round($area, 2);
?>

<h3>Results:</h3>
The area of the trapezoid is <?php echo "$areaRounded" ?> cm<sup>2</sup>.<br>
