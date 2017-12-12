<?php

namespace App\Http\Controllers;

use App\Organization;
use App\State;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use View;
use Validator;
use Input;

class UserController extends Controller
{
    public function edit($id)
    {
        $user = Auth::user();
        $states = State::pluck('state_code', 'state_code');
        return View::make('users.edit', compact('states', 'user'));
    }

    public function update($id)
    {
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'address_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipCode' => 'required|numeric',
            'phone_number' => 'required',
            'email' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('user/' .$id .'/edit')
                ->withErrors($validator);
        } else {
            // store
            $user = User::findOrFail($id);
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            $user->address_1 = Input::get('address_1');
            $user->address_2 = Input::get('address_2');
            $user->city = Input::get('city');
            $user->state = Input::get('state');
            $user->zipCode = Input::get('zipCode');
            $user->phone_number = Input::get('phone_number');
            $user->email = Input::get('email');
            $user->save();

            // redirect
            Session::flash('message', 'Successfully Updated Organization');
            return Redirect::to('user/' .$id .'/edit');
        }
    }
}
