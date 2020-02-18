<?php

namespace App\Repositories\User;

use App\Entities\User\Role;
use App\Interfaces\User\RoleInterface;
use Illuminate\Database\Eloquent\Collection;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class RoleRepository
 * @package App\Repositories\User
 * @property-read Role $model
 */
class RoleRepository extends AbstractRepository implements RoleInterface
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
        return Role::class;
    }

    /**
     * @inheritDoc
     */
    public function all($columns = ['*'])
    {
        // TODO: Implement all() method.
    }
}
