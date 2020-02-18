<?php

namespace App\Repositories\Apartments;

use App\Entities\Apartments\ApartmentRequest;
use App\Interfaces\Apartments\ApartmentRequestInterface;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class ApartmentRequestRepository
 * @package App\Repositories\Apartments
 * @property-read ApartmentRequest $model
 */
class ApartmentRequestRepository extends AbstractRepository implements ApartmentRequestInterface
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
        return ApartmentRequest::class;
    }
}
