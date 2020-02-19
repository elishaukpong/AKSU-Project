<?php

namespace App\Http\Controllers\Wishlist;

use App\Http\Requests\Wishlist\WishlistRequest;
use App\Interfaces\Wishlist\WishlistInterface;
use Shamaseen\Repository\Generator\Utility\Controller;

/**
 * Class WishlistController
 * @package App\Http\Controllers\Wishlist
 * @property-read WishlistInterface $interface
 */
class WishlistController extends Controller
{

    protected $routeIndex = 'wishlists';

    protected $pageTitle = 'Wishlist';
    protected $createRoute = 'wishlists.create';

    protected $viewIndex = 'wishlists.index';
    protected $viewCreate = 'wishlists.create';
    protected $viewEdit = 'wishlists.edit';
    protected $viewShow = 'wishlists.show';

    /**
     * WishlistController constructor.
     * @param WishlistInterface $interface
     * @param WishlistRequest $request
     */
    public function __construct(WishlistInterface $interface, WishlistRequest $request)
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
