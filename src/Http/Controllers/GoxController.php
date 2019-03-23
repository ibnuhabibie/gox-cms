<?php

namespace Mungil\Gox\Http\Controllers;

use Illuminate\Routing\Controller;

class GoxController extends Controller
{
    public function index()
    {
        return view('gox::layout');
    }

}