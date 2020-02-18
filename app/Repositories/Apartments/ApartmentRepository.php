<?php

namespace App\Repositories\Apartments;

use App\Entities\Apartments\Apartment;
use App\Interfaces\Apartments\ApartmentInterface;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class ApartmentRepository
 * @package App\Repositories\Apartments
 * @property-read Apartment $model
 */
class ApartmentRepository extends AbstractRepository implements ApartmentInterface
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
        return Apartment::class;
    }
}
