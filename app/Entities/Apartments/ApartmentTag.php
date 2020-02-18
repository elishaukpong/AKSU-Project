<?php

namespace App\Entities\Apartments;

use Shamaseen\Repository\Generator\Utility\Entity;

/**
 * Class ApartmentTag
 * @package App\Entities
 */
class ApartmentTag extends Entity
{
    protected $guarded = [];

    public function getShortDescAttribute()
    {
        $string = substr($this->description, 0, 50);
        $lastOccurenceOfSpace = strrpos($string, ' ');
        return substr($string, 0, $lastOccurenceOfSpace) . '...';

    }
}
