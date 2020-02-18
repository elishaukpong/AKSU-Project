<?php

namespace App\Repositories\User;

use App\Entities\User\User;
use App\Interfaces\User\UserInterface;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class UserRepository
 * @package App\Repositories\User
 * @property-read User $model
 */
class UserRepository extends AbstractRepository implements UserInterface
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
        return User::class;
    }
}
