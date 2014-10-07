<?php

// Create array to hold list of todo items
$items = [];
array_unshift($items, "phoney");
unset($items[0]);
// The loop!
do {
    // Iterate through list items
    foreach ($items as $key => $item) {
        // *** or $key++; ***
        // Display each item and a newline
        echo "[{$key}] {$item}\n";
    }

    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = strtolower(trim(fgets(STDIN)));

    // Check for actionable input
    if ($input === 'n')  {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = trim(fgets(STDIN));
    } elseif ($input === 'r') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // *** $key--; ***
        // Remove from array
        unset($items[$key]);
    }
// Exit when input is (Q)uit
} while ($input != 'q');

// Say Goodbye!
echo 'Goodbye!' . PHP_EOL;

// Exit with 0 errors
exit(0);
