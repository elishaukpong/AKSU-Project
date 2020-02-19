<?php

namespace App\Repositories\Apartments;

use App\Entities\Apartments\ApartmentView;
use App\Interfaces\Apartments\ApartmentViewInterface;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class ApartmentViewRepository
 * @package App\Repositories\Apartments
 * @property-read ApartmentView $model
 */
class ApartmentViewRepository extends AbstractRepository implements ApartmentViewInterface
{
    protected $with = [];
    /**
     * @var ApartmentRepository
     */
    private $apartment;

    /**
     * @param App $app
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
        return ApartmentView::class;
    }

    public function create($data = [])
    {
        $apartment = $this->apartment->findOrFail($data['apartment_id']);

        $data['user_id'] = auth()->user()->id;
        $data['owner_id'] = $apartment->user_id;

        return $this->model->create($data);
    }
}
