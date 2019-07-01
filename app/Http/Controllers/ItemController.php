<?php

namespace App\Http\Controllers;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {

    }
}
