<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebStructureController extends Controller
{
    public function index(){
        return view('admin.structure.index');
    }
}
