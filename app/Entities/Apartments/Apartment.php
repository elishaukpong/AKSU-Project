<?php

namespace App\Entities\Apartments;

use Shamaseen\Repository\Generator\Utility\Entity;

/**
 * Class Apartment
 * @package App\Entities
 */
class Apartment extends Entity
{
    const APPROVED_APARTMENT = '1';
    const UNAPPROVED_APARTMENT = '0';

    protected $guarded = [];
}
