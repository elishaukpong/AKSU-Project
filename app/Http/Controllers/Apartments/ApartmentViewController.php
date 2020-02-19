<?php

namespace App\Http\Controllers\Apartments;

use App\Http\Requests\Apartments\ApartmentViewRequest;
use App\Interfaces\Apartments\ApartmentViewInterface;
use Shamaseen\Repository\Generator\Utility\Controller;

/**
 * Class ApartmentViewController
 * @package App\Http\Controllers\Apartments
 * @property-read ApartmentViewInterface $interface
 */
class ApartmentViewController extends Controller
{

    protected $routeIndex = '';

    protected $pageTitle = 'ApartmentView';
    protected $createRoute = 'apartmentViews.create';

    protected $viewIndex = 'apartmentViews.index';
    protected $viewCreate = 'apartmentViews.create';
    protected $viewEdit = 'apartmentViews.edit';
    protected $viewShow = 'apartmentViews.show';

    /**
     * ApartmentViewController constructor.
     * @param ApartmentViewInterface $interface
     * @param ApartmentViewRequest $request
     */
    public function __construct(ApartmentViewInterface $interface, ApartmentViewRequest $request)
    {
        $this->routeIndex = url()->previous();
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
