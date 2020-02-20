<?php

namespace App\Http\Controllers\Coins;

use App\Http\Requests\Coins\CoinRequest;
use App\Interfaces\Coins\CoinInterface;
use Shamaseen\Repository\Generator\Utility\Controller;

/**
 * Class CoinController
 * @package App\Http\Controllers\Coins
 * @property-read CoinInterface $interface
 */
class CoinController extends Controller
{

    protected $routeIndex = 'coins';

    protected $pageTitle = 'Coin';
    protected $createRoute = 'coins.create';

    protected $viewIndex = 'coins.index';
    protected $viewCreate = 'coins.create';
    protected $viewEdit = 'coins.edit';
    protected $viewShow = 'coins.show';

    /**
     * CoinController constructor.
     * @param CoinInterface $interface
     * @param CoinRequest $request
     */
    public function __construct(CoinInterface $interface, CoinRequest $request)
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
