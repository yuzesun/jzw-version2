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

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $organizations = Organization::all();
        return View::make('organizations.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $states = State::pluck('state_code', 'state_code');
        return View::make('organizations.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
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
            $organization = new Organization;
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
            Session::flash('message', 'Successfully Created Organization');
            return Redirect::to('organization');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $states = State::pluck('state_code', 'state_code');
        $organization = Organization::findOrFail($id);
        return View::make('organizations.edit', compact('states'))->with('organization', $organization);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $rules = array(
            'organization_name' => 'required|unique:organizations,organization_name,'.$id,
            'address_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipCode' => 'required|numeric',
            'office_number' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('organization/' .$id .'/edit')
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $organization = Organization::findorFail($id);
        $organization->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the Organization');
        return Redirect::to('organization');
    }
}
