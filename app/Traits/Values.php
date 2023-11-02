<?php

namespace App\Traits;

trait Values
{
    public function gender($index)
    {
        // Male = 1, Female = 2
        $gender = ['', 'male', 'female'];
        return $gender[$index];
    }

    // You can add more methods here
}
