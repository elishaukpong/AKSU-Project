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
}
