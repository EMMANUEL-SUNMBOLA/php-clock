<?php
for ($i=0; $i < 2; $i++) { 
  # code...
    $geek2 = date("d-D-M-Y");
  $geek = gmdate("H:i:s") . "\n";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="refresh" content=".5">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dist/style.css">
  <title>clock</title>
</head>
<body>
  <div class="container" id="cont1">
    <h1>west african time</h1>
  </div>
  <div class="container" id="cont2">
<?=$geek2?>
  </div>
  <div class="container" id="cont2">
<?=$geek?>
  </div>
  <!-- will add the alarm system soon -->
  <!-- the alarm will work as thus ; if isset a particular time echo auto play attribute to the audio tag . sounds simple sha ,maybe tomorrow God abeg -->
</body>
</html>