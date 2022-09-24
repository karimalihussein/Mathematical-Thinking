<?php

namespace App\Models;

class Source
{
    /**
     * a two-digit number that becomes 7 times smaller after the first digit is removed
     * not difficult to find not so many choices 
     * divisble by 7: 14, 21, 28, 35, 42, 49, 56, 63, 70, 77, 84, 91, 98
     * but what if we asked for a number thet become 57 times smaller 
     * you say : 7125 = 57 * 125
     * no need to explain how you find it
     * ab .. z = 57 * b .. z
     * x = b ... z has k digits
     * a x 10^k + x = 57 * x
     * a x 10^k = 56 * x = 7 * 8 * x
     * a divisble by 7: only a 7 works
     * 10^k = 8 * x; 10 and 100 not multiple of 8
     * 1000 works, x = 125
     * also 71250 = 57 * 1250, etc..
     *  
     */




    
}