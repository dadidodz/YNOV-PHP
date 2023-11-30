<?php

$hour = date('H');
if (6 < $hour and $hour < 12) {
    echo 'Hello! Have a nice day :)';
  } elseif (12 < $hour and $hour < 18) {
    echo 'Have a good afternoon!';
  } elseif (18 < $hour and $hour < 21) {
    echo 'Good evening! Hope you had a good day!';
  } else {
    echo 'Good night! See you tomorrow :)';
  }


?>