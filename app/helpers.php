<?php

use App\Models\Portfolio;
use PHPUnit\Framework\Constraint\Count;

function hiiii()
{
    dd('hiiii');
}


function CheckUserProtflio()
{
    $check = Portfolio::where('user_id', auth()->user()->id)->get();
    if (Count($check) == 1) {
        return true;
    } else {
        return false;
    }
}
