<?php

namespace App\Entities\Apartments;

use App\Entities\Files\File;
use App\Entities\User\User;
use App\Traits\ModelHelpers;
use App\Contract\ModelHelpers as Helper;
use Shamaseen\Repository\Generator\Utility\Entity;

/**
 * Class Apartment
 * @package App\Entities
 */
class Apartment extends Entity implements Helper
{

    use ModelHelpers;

    const APPROVED_APARTMENT = '1';
    const UNAPPROVED_APARTMENT = '0';

    protected $guarded = [];

    /**
     * Get the apartment's file.
     */
    public function photos()
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function tags()
    {
        return $this->belongsToMany(ApartmentTag::class);
    }

    public function type()
    {
        return $this->belongsTo(ApartmentType::class, 'apartment_type_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
