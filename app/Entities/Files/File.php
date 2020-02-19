<?php

namespace App\Entities\Files;

use Cviebrock\EloquentSluggable\Sluggable;
use Shamaseen\Repository\Generator\Utility\Entity;

/**
 * Class File
 * @package App\Entities
 */
class File extends Entity
{
    use Sluggable;

    protected $guarded = [];

    static $imageDescription = ['1' => 'primary_image', '2' => 'second_image', '3' =>'third_image'];

    /**
     * Get all of the owning fileable models.
     */
    public function fileable()
    {
        return $this->morphTo();
    }

    public function getDisplayPath()
    {
        return '/storage/' . $this->path;
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public static function getImageDescription($key)
    {
       return self::$imageDescription[$key];
    }
}
