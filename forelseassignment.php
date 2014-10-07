<?php 
 
//http://app.codeup.com/php_ii/control-structures-ii/foreach-with-keys.html
 
$trees = array(
    'Scale' => array(
        'genus' => 'Lepidodendron',
        'species' => 'freakius',
        'extinct' => true,
    ),
    'Lambert Pine' => array(
        'genus' => 'Pinus',
        'species' => 'lambertiana',
        'extinct' => false
    ),
    'English Oak' => array(
        'genus' => 'Quercus',
        'species' => 'robur',
        'extinct' => false
    ),
    'Coast Redwood' => array(
        'genus' => 'Sequoia',
        'species' => 'sempervirens',
        'extinct' => false
    )
);

echo exec('clear');
echo PHP_EOL;


foreach ($trees as $title => $properties) {
    echo "$title Tree ";
    echo "(" . $properties['genus'] . ' ';
    echo $properties['species'] . ")" . PHP_EOL;
    
        
        foreach ($properties as $thing => $thin) {
         if (is_string($thin) == true) {
         } elseif ((is_bool($thin) == true) && ($thin == true)) {
             echo "Extinct? Yes\n";
             echo "-------------------------\n";
         } elseif ((is_bool($thin) == true) && ($thin == false)) {
             echo "Extinct? No\n";
             echo "-------------------------\n";
         }
     }
 }

 
// Achieve the following output:
 
// Scale Tree (Lepidodendron freakius)
// Extinct? Yes
// ---------------
// Lambert Pine Tree (Pinus lambertiana)
// Extinct? No
// ---------------
// English Oak Tree (Quercus robur)
// Extinct? No
// ---------------
// Coast Redwood Tree (Sequoia sempervirens)
// Extinct? No
// ---------------
 
?>