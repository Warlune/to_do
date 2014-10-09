<?php

echo exec('clear');
// Create array to hold list of todo items
$items = [];
// array_unshift($items, "phoney");
// unset($items[0]);

 // List array items formatted for CLI
 function sortItems($sort) {
    // $string = '';
    // var_dump($sort);
    $input = getinput($upper);
    if ($input == "A") {
        $key++;
        sort($sort);
     // return $sort;
    }elseif ($input == "Z") {
        arsort($sort);
        // var_dump($sort);
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
 // Get STDIN, strip whitespace and newlines,
 // and convert to uppercase if $upper is true
 function getinput($upper = false) {   

    $input = strtoupper(trim(fgets(STDIN)));
        return $input;
    // Return filtered STDIN inpu
}

// The loop!
do {
    // Iterate through list items
    // $input = '';
    // foreach ($items as $key => $item) {
    //     // *** or $key++; ***
    //     // Display each item and a newline
    //     echo "[{$key}] {$item}\n";
    // }
    echo exec('clear');
    // echo $sort;
    echo listitems($items);


    // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
      $input = getinput($upper);
    // Check for actionable input

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

    // if ($input === 'N')  {
    //     // Ask for entry
    //     echo 'Enter item: ';
    //     // Add entry to list array
    //     $items[] = trim(fgets(STDIN));
    // } elseif ($input === 'R') {
    //     // Remove which item?
    //     echo 'Enter item number to remove: ';
    //     // Get array key
    //     $key = trim(fgets(STDIN));
    //     $key--;
    //     // Remove from array
    //     unset($items[$key]);
    // } elseif ($input === 'S') {
    //     echo 'Sort from "A" (A-Z) or "Z" (Z-A) ';
        
    //     $items = sortItems($items);


    // }
// Exit when input is (Q)uit
} while ($input != 'Q');
echo exec('clear');
// Say Goodbye!
echo 'Goodbye!' . PHP_EOL;

// Exit with 0 errors
exit(0);
