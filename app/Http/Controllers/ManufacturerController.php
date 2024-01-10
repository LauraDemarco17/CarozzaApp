<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    public function index()
    {


        $manufacturers = Manufacturer::all();

        // Return a view and pass the manufacturers data to it
        return view('manufacturers.index', compact('manufacturers'));
    }



}
