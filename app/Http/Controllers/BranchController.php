<?php

namespace App\Http\Controllers;

use App\Organization;
use App\State;
use App\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use View;
use Validator;
use Input;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $branches = Branch::all();
        return View::make('branches.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $organization = Organization::pluck('organization_name', 'id');
        $states = State::pluck('state_code', 'state_code');
        return View::make('branches.create', compact('states', 'organization'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $rules = array(
            'organization_id' => 'required',
            'branch_name' => 'required',
            'address_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipCode' => 'required|numeric',
            'office_number' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('branch/create')
                ->withErrors($validator);
        } else {
            // store
            $branch = new Branch;
            $branch->organization_id = Input::get('organization_id');
            $branch->branch_name = Input::get('branch_name');
            $branch->address_1 = Input::get('address_1');
            $branch->address_2 = Input::get('address_2');
            $branch->city = Input::get('city');
            $branch->state = Input::get('state');
            $branch->zipCode = Input::get('zipCode');
            $branch->office_number = Input::get('office_number');
            $branch->email = Input::get('email');
            $branch->save();

            // redirect
            Session::flash('message', 'Successfully Created Branch');
            return Redirect::to('branch');
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
        $organization = Organization::pluck('organization_name', 'id');
        $states = State::pluck('state_code', 'state_code');
        $branch = Branch::findOrFail($id);
        return View::make('branches.edit', compact('states', 'organization'))->with('branch', $branch);
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
            'organization_id' => 'required',
            'branch_name' => 'required',
            'address_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipCode' => 'required|numeric',
            'office_number' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('branch/create')
                ->withErrors($validator);
        } else {
            // store
            $branch = Branch::findOrFail($id);
            $branch->organization_id = Input::get('organization_id');
            $branch->branch_name = Input::get('branch_name');
            $branch->address_1 = Input::get('address_1');
            $branch->address_2 = Input::get('address_2');
            $branch->city = Input::get('city');
            $branch->state = Input::get('state');
            $branch->zipCode = Input::get('zipCode');
            $branch->office_number = Input::get('office_number');
            $branch->email = Input::get('email');
            $branch->save();

            // redirect
            Session::flash('message', 'Successfully Updated Branch');
            return Redirect::to('branch');
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
        $branch = Branch::findorFail($id);
        $branch->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the Branch');
        return Redirect::to('branch');
    }
}
