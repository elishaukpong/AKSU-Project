<?php

namespace App\Entities\Apartments;

use App\Contract\ModelHelpers as Helper;
use App\Traits\ModelHelpers;
use Shamaseen\Repository\Generator\Utility\Entity;

/**
 * Class ApartmentType
 * @package App\Entities
 */
class ApartmentType extends Entity implements Helper
{
    use ModelHelpers;

    protected $guarded = [];
}
