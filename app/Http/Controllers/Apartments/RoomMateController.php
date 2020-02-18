<?php

namespace App\Http\Controllers\Apartments;

use App\Http\Requests\Apartments\RoomMateRequest;
use App\Interfaces\Apartments\RoomMateInterface;
use Shamaseen\Repository\Generator\Utility\Controller;

/**
 * Class RoomMateController
 * @package App\Http\Controllers\Apartments
 * @property-read RoomMateInterface $interface
 */
class RoomMateController extends Controller
{

    protected $routeIndex = 'roomMates';

    protected $pageTitle = 'RoomMate';
    protected $createRoute = 'roomMates.create';

    protected $viewIndex = 'roomMates.index';
    protected $viewCreate = 'roomMates.create';
    protected $viewEdit = 'roomMates.edit';
    protected $viewShow = 'roomMates.show';

    /**
     * RoomMateController constructor.
     * @param RoomMateInterface $interface
     * @param RoomMateRequest $request
     */
    public function __construct(RoomMateInterface $interface, RoomMateRequest $request)
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
