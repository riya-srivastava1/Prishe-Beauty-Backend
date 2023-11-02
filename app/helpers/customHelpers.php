<?php

// function gender($index)
// {
//     // Male = 1, Female = 2
//     $gender = ['', 'male', 'female'];
//     return $gender[$index];
// }


function gender($index)
{
    // Male = 1, Female = 2
    $gender = ['', 'male', 'female'];

    // Check if $index is a valid key in $gender array
    if (array_key_exists($index, $gender)) {
        return $gender[$index];
    } else {
        // Handle the case where $index is not a valid key
        return 'Unknown gender';
    }
}
