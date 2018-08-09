<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Hash;

class CustomersController extends Controller
{
    public function store(Request $request)
    {
        /*
         * Funkcja sprawdza form który jest do niej wysłany
         *
         */
        $this->validation($request);
        $requestData=$request->all();
        $requestData['password']=Hash::make($requestData['password']);
        Customer::create($requestData);
        return redirect('/');
    }

    public function validation($request)
    {
        return $this->validate($request, [
            'email' => 'required|email|max:255|unique:customers',
            'name' => 'required|max:255',
            'password' => 'required|max:255',
            'address' => 'required|max:255',
            'zipcode' => 'required|max:255',
            'city' => 'required|max:255',
            'phone' => 'required|numeric|digits-between:10,15'

        ]);
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

    public function login(Request $request)
    {
        $customer = Customer::where('email', request('email'))->first();
        if (isset($customer->password) and Hash::check(request('password'), $customer->password)) {
            session(['name' => $customer->name]);
            return redirect('/');
        } else {
            $_SESSION['errors']='Nieprawidłowy login lub hasło';
            return redirect('/');
        }
    }
}
