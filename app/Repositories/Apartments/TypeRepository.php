<?php

namespace App\Repositories\Apartments;

use App\Entities\Apartments\Type;
use App\Interfaces\Apartments\TypeInterface;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class TypeRepository
 * @package App\Repositories\Apartments
 * @property-read Type $model
 */
class TypeRepository extends AbstractRepository implements TypeInterface
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
        return Type::class;
    }
}
