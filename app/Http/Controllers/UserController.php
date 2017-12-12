<?php

namespace App\Http\Controllers;

use App\Organization;
use App\State;
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
        $states = State::pluck('state_code', 'state_code');
        $organization = Organization::findOrFail($id);
        return View::make('organizations.edit', compact('states'))->with('organization', $organization);
    }

    public function update($id)
    {
        $rules = array(
            'organization_name' => 'required',
            'address_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipCode' => 'required|numeric',
            'office_number' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('organization/create')
                ->withErrors($validator);
        } else {
            // store
            $organization = Organization::findOrFail($id);
            $organization->organization_name = Input::get('organization_name');
            $organization->address_1 = Input::get('address_1');
            $organization->address_2 = Input::get('address_2');
            $organization->city = Input::get('city');
            $organization->state = Input::get('state');
            $organization->zipCode = Input::get('zipCode');
            $organization->office_number = Input::get('office_number');
            $organization->email = Input::get('email');
            $organization->save();

            // redirect
            Session::flash('message', 'Successfully Updated Organization');
            return Redirect::to('organization');
        }
    }
}
