<?php
for ($p = 0; $p < 100; ++$p) {
    if ($p % 2 and $p!=99) {
        echo $p . ', '; // 1 3 5 7 9
    }elseif($p % 2 and $p==99){
        echo $p;
    }
}

?>