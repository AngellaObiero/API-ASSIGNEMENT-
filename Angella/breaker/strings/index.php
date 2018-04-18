<?php

$welcome_message = "Vanessa showed Angella a string";

//Declare the above in 2 more ways
$welcome_message1 = 'June showed Masitsa a loop';
$welcome_message2 = <<<WMK
Emma showed Shishi an array
WMK;
//Display every word of the string above on a new line

//split this string
$welcome_message_array = explode(' ',$welcome_message);
foreach($welcome_message_array as $word){
  echo "{$word}<br/>";
}
//


?>
