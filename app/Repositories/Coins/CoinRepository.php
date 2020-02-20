<?php

namespace App\Repositories\Coins;

use App\Entities\Coins\Coin;
use App\Interfaces\Coins\CoinInterface;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class CoinRepository
 * @package App\Repositories\Coins
 * @property-read Coin $model
 */
class CoinRepository extends AbstractRepository implements CoinInterface
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
        return Coin::class;
    }
}
