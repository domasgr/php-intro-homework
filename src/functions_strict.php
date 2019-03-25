<?php

declare(strict_types=1);


namespace Nfq\Akademija\Strict
{   
    function calculateHomeWorkSum(int...$numbers): int {
        $acc = 0;
        
        foreach ($numbers as $n) {
            $acc += $n;
        }
        return $acc;
    }  
    
}
