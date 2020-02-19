<?php

namespace App\Repositories\Wishlist;

use App\Entities\Wishlist\Wishlist;
use App\Interfaces\Wishlist\WishlistInterface;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class WishlistRepository
 * @package App\Repositories\Wishlist
 * @property-read Wishlist $model
 */
class WishlistRepository extends AbstractRepository implements WishlistInterface
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
        return Wishlist::class;
    }
}
