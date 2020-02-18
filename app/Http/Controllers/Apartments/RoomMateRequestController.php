<?php

namespace App\Http\Controllers\Apartments;

use App\Http\Requests\Apartments\RoomMateRequestRequest;
use App\Interfaces\Apartments\RoomMateRequestInterface;
use Shamaseen\Repository\Generator\Utility\Controller;

/**
 * Class RoomMateRequestController
 * @package App\Http\Controllers\Apartments
 * @property-read RoomMateRequestInterface $interface
 */
class RoomMateRequestController extends Controller
{

    protected $routeIndex = 'roomMateRequests';

    protected $pageTitle = 'RoomMateRequest';
    protected $createRoute = 'roomMateRequests.create';

    protected $viewIndex = 'roomMateRequests.index';
    protected $viewCreate = 'roomMateRequests.create';
    protected $viewEdit = 'roomMateRequests.edit';
    protected $viewShow = 'roomMateRequests.show';

    /**
     * RoomMateRequestController constructor.
     * @param RoomMateRequestInterface $interface
     * @param RoomMateRequestRequest $request
     */
    public function __construct(RoomMateRequestInterface $interface, RoomMateRequestRequest $request)
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
