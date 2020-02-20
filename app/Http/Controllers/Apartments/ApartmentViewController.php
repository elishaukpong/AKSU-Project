<?php

namespace App\Http\Controllers\Apartments;

use App\Entities\Apartments\Apartment;
use App\Http\Requests\Apartments\ApartmentViewRequest;
use App\Interfaces\Apartments\ApartmentViewInterface;
use Shamaseen\Repository\Generator\Utility\Controller;

/**
 * Class ApartmentViewController
 * @package App\Http\Controllers\Apartments
 * @property-read ApartmentViewInterface $interface
 */
class ApartmentViewController extends Controller
{

    protected $routeIndex = '';

    protected $pageTitle = 'Apartment View';
    protected $viewIndex = 'apartment.request.index';
    private $apartment;

    /**
     * ApartmentViewController constructor.
     * @param ApartmentViewInterface $interface
     * @param ApartmentViewRequest $request
     */
    public function __construct(ApartmentViewInterface $interface, ApartmentViewRequest $request, Apartment $apartment)
    {
        $this->apartment = $apartment;
        $this->routeIndex = url()->previous();
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
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return parent::store();
    }

    public function showApartmentRequests($id)
    {
        $apartment = $this->apartment->findOrFail($id);
        $this->params['entities'] = $apartment->viewRequests()->simplePaginate($this->limit);

        return view('apartment.requests.usershow', $this->params);
    }
}
