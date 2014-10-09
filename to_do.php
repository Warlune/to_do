<?php

echo exec('clear');

$items = [];

 function sortItems($sort) {
    $input = getinput($upper);
    if ($input == "A") {
        $key++;
        sort($sort);
    }elseif ($input == "Z") {
        arsort($sort);
    } else {
        echo "must enter A or B for sorting options\n";
    }
    return $sort;

 }

 function listitems($list) {
    $string = '';
    foreach($list as $key => $items) {
        $key++;
        $string .= "[{$key}] {$items}" . PHP_EOL;

    }

    return $string;
}

 function getinput($upper = false) {   

    $input = strtoupper(trim(fgets(STDIN)));
        return $input;
    // Return filtered STDIN input
}

do {
    echo exec('clear');
    echo listitems($items);
    echo '(N)ew item, (R)emove item, (S)ort, (Q)uit : ';
      $input = getinput($upper);
switch ($input)  {
        case 'N':
            echo 'Enter item: ';
            $items[] = trim(fgets(STDIN));
            break;
        case 'R':
            echo 'Enter item number to remove: ';
            $key = trim(fgets(STDIN));
            $key--;
            unset($items[$key]);
            break;
        case 'S':
            echo 'Sort from "A" (A-Z) or "Z" (Z-A) ';
            $items = sortItems($items);
            break;
 
    }

} while ($input != 'Q');
echo exec('clear');
echo 'Goodbye!' . PHP_EOL;

// Exit with 0 errors
exit(0);
