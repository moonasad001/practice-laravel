<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController
{
    public function index()
    {
        $records = Customer::all();
        return view('customers.index', compact('records'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        Customer::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'favourite_language' => $request->input('favourite_language'),
            'ip_address' => $request->input('ip_address'),
            'birthdate' => $request->input('birthdate'),
        ]);

//        $successMessage = "Customer created successfully";
//        return view('customers.store', compact('successMessage'));

        session()->flash('successMessage', 'Customer created successfully');
        return redirect()->action([self::class, 'index']);
    }
}
