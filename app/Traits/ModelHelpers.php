<?php


namespace App\Traits;


trait ModelHelpers
{
    public function getShortDescAttribute()
    {
        $string = substr($this->description, 0, 50);
        $lastOccurenceOfSpace = strrpos($string, ' ');
        return substr($string, 0, $lastOccurenceOfSpace) . '...';
    }
}
