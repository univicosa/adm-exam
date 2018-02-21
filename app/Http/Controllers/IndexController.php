<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * @return View
     */
    public function form(): View
    {
        return view('form');
    }

    public function final(): View
    {
        return view('final');
    }
}
