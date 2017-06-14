<?php

namespace catalogo\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index ()
    {
      return view('layout.index');
    }

    public function form ()
    {
      return view('layout.form');
    }
}
