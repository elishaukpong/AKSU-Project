<?php

namespace App\Http\Controllers\Apartments;

use App\Http\Requests\Apartments\RoomRequest;
use App\Interfaces\Apartments\RoomInterface;
use Shamaseen\Repository\Generator\Utility\Controller;

/**
 * Class RoomController
 * @package App\Http\Controllers\Apartments
 * @property-read RoomInterface $interface
 */
class RoomController extends Controller
{

    protected $routeIndex = 'rooms';

    protected $pageTitle = 'Room';
    protected $createRoute = 'rooms.create';

    protected $viewIndex = 'rooms.index';
    protected $viewCreate = 'rooms.create';
    protected $viewEdit = 'rooms.edit';
    protected $viewShow = 'rooms.show';

    /**
     * RoomController constructor.
     * @param RoomInterface $interface
     * @param RoomRequest $request
     */
    public function __construct(RoomInterface $interface, RoomRequest $request)
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
