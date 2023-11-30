<?php
    $alphas = range('A', 'Z');
    foreach ($alphas as $key => $value){
        if ($value!='Z'){echo $value. ' | ';}else{echo $value;}
    }
?>