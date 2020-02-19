<?php

namespace App\Http\Controllers\Apartments;

use App\Entities\Apartments\ApartmentTag;
use App\Http\Requests\Apartments\ApartmentRequest;
use App\Interfaces\Apartments\ApartmentInterface;
use Shamaseen\Repository\Generator\Utility\Controller;
use App\Entities\Apartments\ApartmentType;

/**
 * Class ApartmentController
 * @package App\Http\Controllers\Apartments
 * @property-read ApartmentInterface $interface
 */
class ApartmentController extends Controller
{

    protected $routeIndex = 'apartments';

    protected $pageTitle = 'Apartment';
    protected $createRoute = 'apartment.create';

    protected $viewIndex = 'apartment.index';
    protected $viewCreate = 'apartment.create';
    protected $viewEdit = 'apartment.edit';
    protected $viewShow = 'apartment.show';

    /**
     * ApartmentController constructor.
     * @param ApartmentInterface $interface
     * @param ApartmentRequest $request
     */
    public function __construct(ApartmentInterface $interface, ApartmentRequest $request)
    {
        parent::__construct($interface, $request);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return parent::index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->params['types'] = ApartmentType::all();
        $this->params['tags'] = ApartmentTag::all();
        return parent::create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return parent::store();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return parent::show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return parent::edit($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id)
    {
        return parent::update($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        return parent::destroy($id);
    }
}
