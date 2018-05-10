<?php

namespace catalogo\Http\Controllers;

use catalogo\Area;
use catalogo\Tipo;
use catalogo\Http\Requests\AreaRequest;

class AreasController extends Controller
{
    public function index ()
    {

      $areas = Area::all();

      return view('areas.index', compact('areas'));
    }

    public function show ($alias)
    {
      $area = Area::where('Area_Alias', $alias)->firstOrFail();

      return view('areas.show', compact('area'));
    }

    public function create ()
    {
      return view('areas.create');
    }

    public function store (AreaRequest $requisicao)
    {
      Area::create($requisicao->all());

      return redirect('areas');
    }

    public function edit ($id)
    {
      $area = Area::findOrFail($id);
    
      return view('areas.edit', compact('area'));
    }

    public function update ($id, AreaRequest $requisicao)
      {
        $area = Area::findOrFail($id);

        $area->update($requisicao->all());
      
        return redirect('areas');
      }      


}
