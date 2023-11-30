<?php
$number=2;
while($number <100)
{
    $div_count=0;
    for ($i=1;$i<=$number;$i++) {
        if(($number%$i)==0) {
            $div_count++;
        }
    }
    if($div_count<3 and $number!=97) { echo $number.", ";}elseif($div_count<3 and $number==97){ echo $number."";}$number=$number+1; }
?>