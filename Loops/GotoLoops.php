<?php

$counter = 1;
while(true){
    echo "While loop $counter" . PHP_EOL;
    $counter++;
    if($counter>10){
        goto end;
    }
}

end:echo"End Loop";
