<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\RoleRequest;
use App\Interfaces\User\RoleInterface;
use App\Http\Controllers\BaseController as Controller;


/**
 * Class RoleController
 * @package App\Http\Controllers\User
 * @property-read RoleInterface $interface
 */
class RoleController extends Controller
{

    protected $routeIndex = 'admin/roles';

    protected $pageTitle = 'Role';
    protected $createRoute = 'admin/roles/create';

    protected $viewIndex = 'roles.index';
    protected $viewCreate = 'roles.create';
    protected $viewEdit = 'roles.edit';
    protected $viewShow = 'roles.index';

    /**
     * RoleController constructor.
     * @param RoleInterface $interface
     * @param RoleRequest $request
     */
    public function __construct(RoleInterface $interface, RoleRequest $request)
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
