<?php

namespace App\Entities\Files;

//use Cviebrock\EloquentSluggable\Sluggable;
use Shamaseen\Repository\Generator\Utility\Entity;

/**
 * Class File
 * @package App\Entities
 */
class File extends Entity
{
//    use Sluggable;

    protected $guarded = [];

    /**
     * Get all of the owning fileable models.
     */
    public function fileable()
    {
        return $this->morphTo();
    }

//    /**
//     * Return the sluggable configuration array for this model.
//     *
//     * @return array
//     */
//    public function sluggable()
//    {
//        return [
//            'slug' => [
//                'source' => 'name'
//            ]
//        ];
//    }
}
