<?php

namespace App\Http\Controllers\Apartments;

use App\Http\Requests\Apartments\ApartmentTagRequest;
use App\Interfaces\Apartments\ApartmentTagInterface;
use Shamaseen\Repository\Generator\Utility\Controller;

/**
 * Class ApartmentTagController
 * @package App\Http\Controllers\Apartments
 * @property-read ApartmentTagInterface $interface
 */
class ApartmentTagController extends Controller
{

    protected $routeIndex = 'admin/apartment/tags';

    protected $pageTitle = 'Apartment Tag';
    protected $createRoute = 'admin/apartment/create';

    protected $viewIndex = 'apartment.tags.index';
    protected $viewCreate = 'apartment.tags.create';
    protected $viewEdit = 'apartment.tags.edit';
    protected $viewShow = 'apartment.tags.show';

    /**
     * ApartmentTagController constructor.
     * @param ApartmentTagInterface $interface
     * @param ApartmentTagRequest $request
     */
    public function __construct(ApartmentTagInterface $interface, ApartmentTagRequest $request)
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
