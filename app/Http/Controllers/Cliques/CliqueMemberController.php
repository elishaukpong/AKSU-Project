<?php

namespace App\Http\Controllers\Cliques;

use App\Http\Requests\Cliques\CliqueMemberRequest;
use App\Interfaces\Cliques\CliqueMemberInterface;
use Shamaseen\Repository\Generator\Utility\Controller;

/**
 * Class CliqueMemberController
 * @package App\Http\Controllers\Cliques
 * @property-read CliqueMemberInterface $interface
 */
class CliqueMemberController extends Controller
{

    protected $routeIndex = 'cliqueMembers';

    protected $pageTitle = 'CliqueMember';
    protected $createRoute = 'cliqueMembers.create';

    protected $viewIndex = 'cliqueMembers.index';
    protected $viewCreate = 'cliqueMembers.create';
    protected $viewEdit = 'cliqueMembers.edit';
    protected $viewShow = 'cliqueMembers.show';

    /**
     * CliqueMemberController constructor.
     * @param CliqueMemberInterface $interface
     * @param CliqueMemberRequest $request
     */
    public function __construct(CliqueMemberInterface $interface, CliqueMemberRequest $request)
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
