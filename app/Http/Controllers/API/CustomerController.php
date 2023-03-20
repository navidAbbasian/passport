<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $input = Customer::all();
        return response()->json($input,200);
    }
    public function store( Request $request) 
    {
        $input = $request->all();
        Customer::create($input);
    }
}
