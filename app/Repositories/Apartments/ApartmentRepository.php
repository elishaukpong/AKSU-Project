<?php

namespace App\Repositories\Apartments;

use App\Entities\Apartments\Apartment;
use App\Interfaces\Apartments\ApartmentInterface;
use App\Repositories\Files\FileRepository;
use Illuminate\Database\Eloquent\Collection;
use Shamaseen\Repository\Generator\Utility\AbstractRepository;
use Illuminate\Container\Container as App;

/**
 * Class ApartmentRepository
 * @package App\Repositories\Apartments
 * @property-read Apartment $model
 */
class ApartmentRepository extends AbstractRepository implements ApartmentInterface
{
    protected $with = [];
    /**
     * @var FileRepository
     */
    private $file;

    /**
     * @param App $app
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function __construct(App $app, FileRepository $file)
    {
        $this->file = $file;
        parent::__construct($app);
    }

    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return Apartment::class;
    }

    public function create($data = [])
    {
        $apartmentData['name'] = $data['name'];
        $apartmentData['location'] = $data['location'];
        $apartmentData['landmark'] = $data['landmark'];
        $apartmentData['apartment_type_id'] = $data['apartment_type_id'];
        $apartmentData['description'] = $data['description'];
        $apartmentData['user_id'] = auth()->id();

        $apartment = $this->model->create($apartmentData);
        $apartment->tags()->attach($data['apartment_tags']);
        $primaryImage = $data['apartment_file'];

        $this->uploadImage($primaryImage, $apartment, 'apartments');

        if(isset($data['apartment_second_file'])){
            $this->uploadImage($data['apartment_second_file'], $apartment, 'apartments');
        }

        if(isset($data['apartment_third_file'])){
            $this->uploadImage($data['apartment_third_file'], $apartment, 'apartments');
        }

        return $apartment;
    }

    private function uploadImage($imageObject, $model, $path)
    {
        $this->file->createImage($imageObject, $model, $path);
    }
}
