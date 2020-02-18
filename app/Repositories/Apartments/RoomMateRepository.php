<?php

namespace App\Repositories\Apartments;

use App\Entities\Apartments\RoomMate;
use App\Interfaces\Apartments\RoomMateInterface;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class RoomMateRepository
 * @package App\Repositories\Apartments
 * @property-read RoomMate $model
 */
class RoomMateRepository extends AbstractRepository implements RoomMateInterface
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
        return RoomMate::class;
    }
}
