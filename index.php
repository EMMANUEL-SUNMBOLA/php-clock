<?php
for ($i=0; $i < 2; $i++) {
  $geek2 = date("d-D-M-Y");
  $geek = gmdate("H") + 1.. gmdate(":i:s") . "\n";
  $Cd = date("d");
  $Cm = date("m");
  $Cy = date("y");
  $Ch = gmdate("H");
  $CM = gmdate("i");
  $Cs = gmdate("s");
  $S =  "It's " .  60- $Cs. " sec(s) "  ;
  $m =  60- $CM. " min(s) "  ;
  $H =  24- $Ch. " hr(s) " ;
  $D =  25 - $Cd . " day(s) " ;
  $M =  12-$Cm .  " month(s) left to christmas " ;
  if(date("d-m-Y") !== "25-Dec-2022"){
    $celeb = "alm1";
  }
  /**
   * [ attempted to make the clock show 0 (sec,min,hr)  at the beginning of each (sec,min,hr) ]
   */
  // if($S&&$m&&$H&&$D&&$M !== 0){
  //   if($S == 60){
  //     $S =  "0 sec(s) "  ;
  //   }
  //   if($m == 60){
  //     $M =  "0 min(s) "  ;
  //   }
  //   if($H == 24){
  //     $H =  "0 hr(s) " ;
  //   }
  // }

  /**
   * count down to my birthday finishing soon... 
   */
  if(date("d-M") == "29-July"){
    $celeb = "bday";
    break;
  }

}
/**
 * count down to christmas every year
 */
if(date("d-m") == "25-Dec"){
  $S =  "MER" ;
  $m =  "RY "  ;
  $H =  "CHRIS" ;
  $D =  "TMAS  " ;
  $M =  "🎄🎄🎄🎄🎄🎄" ;
}
/**
 * might add reminder for other notable calendar dates 
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- meta tag to reload the website every 1s so aS get the life feed from the clock instead of a stagnant one. this is the best way ive found container
might change in tghe future anticipate -->
  <meta http-equiv="refresh" content="1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dist/style.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style.css">
  <title>clock</title>
</head>
<body>
  <div class="occ" style="<?php if (isset($celeb)) {
    echo "background-color: #00cba9;";}?>">
    <ul>
      <li><?php if (isset($celeb) && ($celeb == 'bday')) {
        echo "HAPPY BIRTHDAY DEV EMMANUEL";}?></li>
      <li><?php if (isset($celeb) && ($celeb == 'nyr')) {
        echo "HAPPY NEW YEAR COMR.";}?></li>
      <li><?php if (isset($celeb) && ($celeb == 'alm1')) {    
    echo $S.$m.$H.$D.$M;}?></li>
    </ul>
  </div>
  <div class="bum">

    <div class="container" id="cont1">
      <h1>west african time</h1>
    </div>
    <div class="container" id="cont2">
  <?=$geek2?>
    </div>
    <div class="container" id="cont2">
  <?=$geek?>
  </div>
  </div>
<!-- will add the alarm system soon ==  cancelled -->
<!--
due to meta tag whic reloads the page every 1s the alarm hasn't been able to work as proposed
the alarm will work as thus ; if isset a particular time echo auto play attribute to the audio tag . sounds simple sha ,maybe tomorrow God abeg -->
<!-- check in day 2 about to add the alarm -->
</body>
</html>