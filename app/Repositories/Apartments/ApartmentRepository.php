<?php

namespace App\Repositories\Apartments;

use App\Entities\Apartments\Apartment;
use App\Entities\Files\File;
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
        $apartmentData['amount'] = $data['amount'];
        $apartmentData['location'] = $data['location'];
        $apartmentData['landmark'] = $data['landmark'];
        $apartmentData['apartment_type_id'] = $data['apartment_type_id'];
        $apartmentData['description'] = $data['description'];
        $apartmentData['user_id'] = auth()->id();

        $apartment = $this->model->create($apartmentData);
        $apartment->tags()->attach($data['apartment_tags']);
        $primaryImage = $data['apartment_file'];

        $this->uploadImage($primaryImage, $apartment, 'apartments', File::getImageDescription(1));

        if(isset($data['apartment_second_file'])){
            $this->uploadImage($data['apartment_second_file'], $apartment, 'apartments', File::getImageDescription(2));
        }

        if(isset($data['apartment_third_file'])){
            $this->uploadImage($data['apartment_third_file'], $apartment, 'apartments', File::getImageDescription(3));
        }

        return $apartment;
    }

    public function update($entityId = 0, $data= [])
    {
        $apartment = $this->model->findOrFail($entityId);

        $apartmentData['name'] = $data['name'];
        $apartmentData['amount'] = $data['amount'];
        $apartmentData['location'] = $data['location'];
        $apartmentData['landmark'] = $data['landmark'];
        $apartmentData['apartment_type_id'] = $data['apartment_type_id'];
        $apartmentData['description'] = $data['description'];

        $apartment->update($apartmentData);
        $apartment->tags()->sync($data['apartment_tags']);

        if(isset($data['apartment_file'])){
            $this->updateImage($data['apartment_file'], $apartment, 'apartments', File::getImageDescription(1));
        }

        if(isset($data['apartment_second_file'])){
            $this->updateImage($data['apartment_second_file'], $apartment, 'apartments', File::getImageDescription(2));
        }

        if(isset($data['apartment_third_file'])){
            $this->updateImage($data['apartment_third_file'], $apartment, 'apartments', File::getImageDescription(3));
        }


        return $data;
    }

    private function uploadImage($imageObject, $model, $path, $description = null)
    {
        return $this->file->createImage($imageObject, $model, $path, $description);
    }

    private function updateImage($imageObject, $model, $path, $description = null)
    {
        return $this->file->updateImage($imageObject, $model, $path, $description);
    }
}
