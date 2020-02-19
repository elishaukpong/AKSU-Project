<?php

namespace App\Entities\Apartments;

use App\Entities\Files\File;
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

    /**
     * Get the apartment's file.
     */
    public function file()
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function tags()
    {
        return $this->belongsToMany(ApartmentTag::class);
    }
}
