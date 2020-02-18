<?php

namespace App\Repositories\Files;

use App\Entities\Files\File;
use App\Interfaces\Files\FileInterface;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class FileRepository
 * @package App\Repositories\Files
 * @property-read File $model
 */
class FileRepository extends AbstractRepository implements FileInterface
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
        return File::class;
    }
}
