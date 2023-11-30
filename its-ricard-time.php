<?php

$nbrRicard = 1;

do {
    echo 'Come on ricard number ' .$nbrRicard."\n";
    if ($nbrRicard == 3) {
        echo "I'll have to stop soon!\n";
    }elseif ($nbrRicard == 3) {
        echo "I am no longer very fresh ...\n";
    }
    $nbrRicard++;
} while($nbrRicard < 7);
?>