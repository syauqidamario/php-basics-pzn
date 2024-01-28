<?php

$nilai = "A";

switch ($nilai){
    case "A":
        echo "You graduate well." . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "You graduate" . PHP_EOL;
        break;
    case "D":
        echo "You did not graduate" . PHP_EOL;
        break;
    default:
        echo "Perhaps you were in the wrong major." . PHP_EOL;
}

switch ($nilai):
    case "A":
        echo "You graduate well." . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "You graduate" . PHP_EOL;
        break;
    case "D":
        echo "You didn't graduate." . PHP_EOL;
        break;
    default:
        echo "Perhaps you're in the wrong major." . PHP_EOL;
endswitch;