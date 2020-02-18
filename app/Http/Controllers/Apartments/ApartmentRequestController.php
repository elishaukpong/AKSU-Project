<?php

namespace App\Http\Controllers\Apartments;

use App\Http\Requests\Apartments\ApartmentRequestRequest;
use App\Interfaces\Apartments\ApartmentRequestInterface;
use Shamaseen\Repository\Generator\Utility\Controller;

/**
 * Class ApartmentRequestController
 * @package App\Http\Controllers\Apartments
 * @property-read ApartmentRequestInterface $interface
 */
class ApartmentRequestController extends Controller
{

    protected $routeIndex = 'apartmentRequests';

    protected $pageTitle = 'ApartmentRequest';
    protected $createRoute = 'apartmentRequests.create';

    protected $viewIndex = 'apartmentRequests.index';
    protected $viewCreate = 'apartmentRequests.create';
    protected $viewEdit = 'apartmentRequests.edit';
    protected $viewShow = 'apartmentRequests.show';

    /**
     * ApartmentRequestController constructor.
     * @param ApartmentRequestInterface $interface
     * @param ApartmentRequestRequest $request
     */
    public function __construct(ApartmentRequestInterface $interface, ApartmentRequestRequest $request)
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
