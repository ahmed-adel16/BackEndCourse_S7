<?php

function predictAge($age1, $age2, $age3, $age4, $age5, $age6, $age7, $age8) {
    $ages = [$age1, $age2, $age3, $age4, $age5, $age6, $age7, $age8];
    $sum = 0;
    
    foreach ($ages as $age) {
        $sum += $age * $age; 
    }
    
    return (int)(sqrt($sum) / 2); 
}

// Example usage
// echo predictAge(65, 60, 75, 55, 60, 63, 64, 45); 

function countLines($filename) {

    $file = fopen($filename, "r");
    $lineCount = 0;

    while (!feof($file)) {
        fgets($file);
        $lineCount++;
    }

    fclose($file);
    return $lineCount;
}

// Example usage
$filename = "text.txt"; // Replace with your file name
$lineCount = countLines($filename);

if ($lineCount !== null) {
    echo "Number of lines in '$filename': $lineCount";
}
?>




