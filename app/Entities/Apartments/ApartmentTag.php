<?php

namespace App\Entities\Apartments;

use App\Traits\ModelHelpers;
use App\Contract\ModelHelpers as Helper;
use Shamaseen\Repository\Generator\Utility\Entity;

/**
 * Class ApartmentTag
 * @package App\Entities
 */
class ApartmentTag extends Entity implements Helper
{
    use ModelHelpers;

    protected $guarded = [];

    public static $colors = ['light'];

    public function apartments()
    {
        return $this->belongsToMany(Apartment::class);
    }

    public static function getButtonColor(){
        return self::$colors[array_rand(self::$colors, 1)];
    }
}
