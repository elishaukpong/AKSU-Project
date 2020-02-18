<?php

namespace App\Repositories\Apartments;

use App\Entities\Apartments\RoomMateRequest;
use App\Interfaces\Apartments\RoomMateRequestInterface;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class RoomMateRequestRepository
 * @package App\Repositories\Apartments
 * @property-read RoomMateRequest $model
 */
class RoomMateRequestRepository extends AbstractRepository implements RoomMateRequestInterface
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
        return RoomMateRequest::class;
    }
}
