<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoriesController extends Controller
{
    /**
     * Index
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inventories');
    }
}
