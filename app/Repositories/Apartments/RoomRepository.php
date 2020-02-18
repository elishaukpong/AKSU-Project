<?php

namespace App\Repositories\Apartments;

use App\Entities\Apartments\Room;
use App\Interfaces\Apartments\RoomInterface;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class RoomRepository
 * @package App\Repositories\Apartments
 * @property-read Room $model
 */
class RoomRepository extends AbstractRepository implements RoomInterface
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
        return Room::class;
    }
}
