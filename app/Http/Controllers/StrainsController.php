<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Strain;

class StrainsController extends Controller
{
    protected $strains;

        public function index(){
                $strains = Strain::all();
                return view('strains.index', compact('strains'));
        }

        public function show($id) {
                $strain = Strain::findorFail($id);

                return view ('strains.show', compact('strain'));
        }

}
