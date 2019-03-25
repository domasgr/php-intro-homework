<?php

namespace
{
    function calculateHomeWorkSum(...$numbers){
        $acc = 0;
        foreach ($numbers as $n) {
            $acc += $n;
        }
        return $acc;
    }
}

namespace Nfq\Akademija\Not_Typed
{
    function calculateHomeWorkSum(...$numbers): int{
        $acc = 0;
        foreach ($numbers as $n) {
            $acc += $n;
        }
        return $acc;
    }
}

namespace Nfq\Akademija\Soft
{
    function calculateHomeWorkSum(int...$numbers): int{
        $acc = 0;
        foreach ($numbers as $n) {
            $acc += $n;
        }
        return $acc;
    }
}

