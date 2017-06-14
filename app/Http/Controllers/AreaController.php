<?php

namespace catalogo\Http\Controllers;

use Illuminate\Http\Request;
use catalogo\Area;

class AreaController extends Controller
{
    public function index ()
    {

      $areas = Area::all();

      return view('area.index', compact('areas'));
    }
}
