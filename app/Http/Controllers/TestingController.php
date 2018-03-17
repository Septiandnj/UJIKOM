<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testing;

class TestingController extends Controller
{
    
    public function api()
    {
        return testing::all();
    }
}
