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
    protected $storage;

    /**
     * @param App $app
     * @param \Storage $storage
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function __construct(App $app, \Storage $storage)
    {
        $this->storage = $storage;
        parent::__construct($app);
    }

    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return File::class;
    }

    public function createImage($imageObject, $model, $local_path)
    {
        $attributes['file'] = $imageObject;
        $attributes['name'] = $imageObject->getClientOriginalName();
        $attributes['size'] = $imageObject->getSize();
        $attributes['type'] = $imageObject->getClientMimeType();
        $attributes['fileable_type'] = get_class($model);
        $attributes['fileable_id'] = $model->id;
        $attributes['user_id'] = auth()->user()->id;
        $attributes['local_path'] = $local_path;


        return $this->create($attributes);
    }

    /**
     * @param array $attributes
     *
     * @return bool|mixed
     */
    public function create($attributes = [])
    {
        $attributes['path'] = $this->storage::disk('public')->put($attributes['local_path'], $attributes['file']);
        unset($attributes['file']);
        unset($attributes['local_path']);

        return parent::create($attributes);
    }
}
