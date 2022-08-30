<?php
require 'Edit.php';

$array = new Edit();

$showArray = $array->custom($argv);

echo 'command_name: ' . $showArray['command_name'] . "\n";
echo "Arguments:\n";
//print_console($showArray['Arguments']);
print_console($showArray['Options']);

//foreach ($showArray['Option'] as $item){
//    echo "\t-\t$item\n";
//}

function print_console($value)
{
    foreach ($value as $item) {
        if (is_array($item)) {
            print_console($item);
        } else {
            echo "\t-\t$item\n";
        }
    }

}