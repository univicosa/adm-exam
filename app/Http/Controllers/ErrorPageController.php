<?php

namespace App\Http\Controllers;


use App\Repositories\SpaceshipRepository;
use Illuminate\View\View;

class ErrorPageController extends Controller
{
    /**
     * @var SpaceshipRepository
     */
    protected $repository;

    /**
     * ErrorPageController constructor.
     *
     * @param SpaceshipRepository $spaceship
     */
    public function __construct(SpaceshipRepository $spaceship)
    {
        $this->repository = $spaceship;
    }

    /**
     * @param null|string $list
     *
     * @return View
     */
    public function index($list = null): View
    {
        if ($list === 'just-do-it') return view('spaceships')->with('spaeships', $this->repository->listAll());

        return view('error');
    }
}
