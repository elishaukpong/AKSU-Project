<?php

namespace App\Http\Controllers\Files;

use App\Http\Requests\Files\FileRequest;
use App\Interfaces\Files\FileInterface;
use Shamaseen\Repository\Generator\Utility\Controller;

/**
 * Class FileController
 * @package App\Http\Controllers\Files
 * @property-read FileInterface $interface
 */
class FileController extends Controller
{

    protected $routeIndex = 'files';

    protected $pageTitle = 'File';
    protected $createRoute = 'files.create';

    protected $viewIndex = 'files.index';
    protected $viewCreate = 'files.create';
    protected $viewEdit = 'files.edit';
    protected $viewShow = 'files.show';

    /**
     * FileController constructor.
     * @param FileInterface $interface
     * @param FileRequest $request
     */
    public function __construct(FileInterface $interface, FileRequest $request)
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
