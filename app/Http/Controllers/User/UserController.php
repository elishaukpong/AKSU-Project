<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\UserRequest;
use App\Interfaces\User\UserInterface;
use App\Http\Controllers\BaseController as Controller;
/**
 * Class UserController
 * @package App\Http\Controllers\User
 * @property-read UserInterface $interface
 */
class UserController extends Controller
{

    protected $routeIndex = 'users';

    protected $pageTitle = 'User';
    protected $createRoute = 'users.create';

    protected $viewIndex = 'users.index';
    protected $viewCreate = 'users.create';
    protected $viewEdit = 'users.edit';
    protected $viewShow = 'users.show';

    /**
     * UserController constructor.
     * @param UserInterface $interface
     * @param UserRequest $request
     */
    public function __construct(UserInterface $interface, UserRequest $request)
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('user.dashboard');
    }
}
