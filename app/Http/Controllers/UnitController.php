<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{

    // display units page
    public function index() {
      $units = Unit::paginate(28);
      return view('admin.units.units')->with(['units' => $units]);
    }

    // display add units form
    public function showAdd() {
      return view('admin.units.add_edit');
    }
}
