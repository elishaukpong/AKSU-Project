<?php

namespace App\Entities\Apartments;

use App\Entities\User\User;
use Shamaseen\Repository\Generator\Utility\Entity;

/**
 * Class ApartmentView
 * @package App\Entities
 */
class ApartmentView extends Entity
{
    protected $guarded = [];

    public function viewer()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function owner()
    {
        $this->belongsTo(User::class, 'owner_id');
    }
}
