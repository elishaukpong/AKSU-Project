<?php

namespace App\Repositories\Cliques;

use App\Entities\Cliques\Clique;
use App\Interfaces\Cliques\CliqueInterface;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class CliqueRepository
 * @package App\Repositories\Cliques
 * @property-read Clique $model
 */
class CliqueRepository extends AbstractRepository implements CliqueInterface
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
        return Clique::class;
    }
}
