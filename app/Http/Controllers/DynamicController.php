<?php

namespace App\Http\Controllers;


use App\Repositories\CarRepository;
use Illuminate\View\View;

class DynamicController extends Controller
{
    /**
     * @var CarRepository
     */
    protected $repository;

    /**
     * DynamicController constructor.
     *
     * @param CarRepository $repository
     */
    public function __construct(CarRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        return view('dynamic');
    }
}
