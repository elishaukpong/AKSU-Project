<?php

namespace App\Http\Controllers\Cliques;

use App\Http\Requests\Cliques\CliqueRequest;
use App\Interfaces\Cliques\CliqueInterface;
use Shamaseen\Repository\Generator\Utility\Controller;

/**
 * Class CliqueController
 * @package App\Http\Controllers\Cliques
 * @property-read CliqueInterface $interface
 */
class CliqueController extends Controller
{

    protected $routeIndex = 'cliques';

    protected $pageTitle = 'Clique';
    protected $createRoute = 'cliques.create';

    protected $viewIndex = 'cliques.index';
    protected $viewCreate = 'cliques.create';
    protected $viewEdit = 'cliques.edit';
    protected $viewShow = 'cliques.show';

    /**
     * CliqueController constructor.
     * @param CliqueInterface $interface
     * @param CliqueRequest $request
     */
    public function __construct(CliqueInterface $interface, CliqueRequest $request)
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
