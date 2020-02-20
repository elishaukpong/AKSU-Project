<?php

namespace App\Repositories\Cliques;

use App\Entities\Cliques\CliqueMember;
use App\Interfaces\Cliques\CliqueMemberInterface;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class CliqueMemberRepository
 * @package App\Repositories\Cliques
 * @property-read CliqueMember $model
 */
class CliqueMemberRepository extends AbstractRepository implements CliqueMemberInterface
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
        return CliqueMember::class;
    }
}
