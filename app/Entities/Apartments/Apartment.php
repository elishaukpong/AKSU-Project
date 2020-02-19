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

    //TODO add model listeners to delete images when an apartment is deleted
    //TODO use softdeletes too on all models
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

    //TODO change apartment.index to use this, when youre ready to deploy
//    public function primaryImage()
//    {
//        return $this->photos()->whereDescription('primary_image')->first();
//    }

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

    public function viewedByOwner()
    {
        return $this->user_id === auth()->user()->id;
    }
}
