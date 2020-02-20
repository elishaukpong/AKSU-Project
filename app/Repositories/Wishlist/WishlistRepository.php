<?php

namespace App\Repositories\Wishlist;

use App\Entities\Wishlist\Wishlist;
use App\Interfaces\Wishlist\WishlistInterface;
use App\Repositories\Apartments\ApartmentRepository;
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
     * @var ApartmentRepository
     */
    private $apartment;

    /**
     * @param App $app
     * @param ApartmentRepository $apartment
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function __construct(App $app, ApartmentRepository $apartment)
    {
        $this->apartment = $apartment;
        parent::__construct($app);
    }

    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return Wishlist::class;
    }

    public function create($data = [])
    {
        $apartment = $this->apartment->findOrFail($data['apartment_id']);

        unset($data['apartment_id']);
        $data['user_id'] = auth()->user()->id;
        $data['wishable_type'] = get_class($apartment);
        $data['wishable_id'] = $apartment->id;

        return $this->model->create($data);
    }
}
