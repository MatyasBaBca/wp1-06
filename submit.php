<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>.</title>
  </head>
  <body>
    <?php
    $SPZ = filter_input (INPUT_POST, "SPZ");?>
    <p> SPZ: <?php echo $SPZ; ?> </p>
    <?php
    $weight = filter_input (INPUT_POST, "weight"); ?>
    <p> Váha vozidla: <?php echo $weight; ?> </p>
    <?php
    $brand = filter_input (INPUT_POST, "brand"); ?>
    <p> Značka vozidla: <?php echo $brand; ?> </p>
   <?php
    $color = filter_input (INPUT_POST, "color"); ?>
    <p> Barva vozidla: <?php echo $color; ?> </p>
    <?php
    $name = filter_input (INPUT_POST, "name"); ?>
    <p> Jméno: <?php echo $name; ?> </p>
  </body>
</html>
