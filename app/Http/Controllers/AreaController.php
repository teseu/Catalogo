<?php

namespace catalogo\Http\Controllers;

use Request;
use catalogo\Area;

class AreaController extends Controller
{
    public function index ()
    {

      $areas = Area::all();

      return view('area.index', compact('areas'));
    }

    public function show ($alias)
    {
      $area = Area::where('Area_Alias', $alias)->firstOrFail();

      return view('area.show', compact('area'));
    }

    public function create ()
    {
      return view('area.create');
    }

    public function store ()
    {
      $entrada = Request::all();

      Area::create($entrada);

      return redirect('area');
    }
}
