<?php

namespace App\Repositories\Apartments;

use App\Entities\Apartments\ApartmentType;
use App\Interfaces\Apartments\ApartmentTypeInterface;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class ApartmentTypeRepository
 * @package App\Repositories\Apartments
 * @property-read ApartmentType $model
 */
class ApartmentTypeRepository extends AbstractRepository implements ApartmentTypeInterface
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
        return ApartmentType::class;
    }
}
