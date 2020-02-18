<?php

namespace App\Repositories\Apartments;

use App\Entities\Apartments\ApartmentTag;
use App\Interfaces\Apartments\ApartmentTagInterface;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class ApartmentTagRepository
 * @package App\Repositories\Apartments
 * @property-read ApartmentTag $model
 */
class ApartmentTagRepository extends AbstractRepository implements ApartmentTagInterface
{
    protected $with = [];

    /**
     * @param App $app
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function __construct(App $app)
    {
        parent::__construct($app);
    }

    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return ApartmentTag::class;
    }
}
