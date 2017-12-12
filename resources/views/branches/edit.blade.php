@extends('layouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/branch')}}">Branch</a></li>
            <li class="breadcrumb-item active">Branch Profile</li>
        </ol>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit a Branch</div>

                    <div class="panel-body form-horizontal">

                        {{ HTML::ul($errors->all()) }}

                        {{ Form::model($branch, array('route' => array('branch.update', $branch->id), 'method' => 'PUT')) }}

                        <div class="form-group{{ $errors->has('organization_id') ? ' has-error' : '' }}">
                            <label for="organization_id" class="col-md-4 control-label">Organizaiton Name</label>

                            <div class="col-md-6" style="">
                                {!! Form::select('organization_id', $organization->all(), null, ['class'=>'form-control', 'required']) !!}
                                @if ($errors->has('organization_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('organization_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('branch_name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Branch Name or Number</label>

                            <div class="col-md-6">
                                <input id="branch_name" type="text" class="form-control" name="branch_name" value="{{ old('branch_name', $branch->branch_name) }}" required>

                                @if ($errors->has('branch_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('branch_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address_1') ? ' has-error' : '' }}">
                            <label for="address_1" class="col-md-4 control-label">Address 1</label>

                            <div class="col-md-6">
                                <input id="address_1" type="text" class="form-control" name="address_1" value="{{ old('address_1', $branch->address_1) }}" required>

                                @if ($errors->has('address_1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address_2') ? ' has-error' : '' }}">
                            <label for="address_2" class="col-md-4 control-label">Address 2</label>

                            <div class="col-md-6">
                                <input id="address_2" type="text" class="form-control" name="address_2" value="{{ old('address_2', $branch->address_2) }}">

                                @if ($errors->has('address_2'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('address_2') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('zipCode') ? ' has-error' : '' }}">
                            <label for="zipCode" class="col-md-4 control-label">Zip Code</label>

                            <div class="col-md-6">
                                <input id="zipCode" type="text" pattern="[0-9]{5}" maxlength="5" style="width: 70px;" class="form-control" name="zipCode" value="{{ old('zipCode', $branch->zipCode) }}" required>

                                @if ($errors->has('zipCode'))
                                    <span class="help-block">
                                                            <strong>{{ $errors->first('zipCode') }}</strong>
                                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" style="width: 190px;" class="form-control" name="city" value="{{ old('city', $branch->city) }}" required>
                                @if ($errors->has('city'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('city') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">State</label>

                            <div class="col-md-6" style="width: 110px;">
                                {!! Form::select('state', array(null) + $states->all(), null, ['id' => 'state', 'class'=>'form-control', 'required']) !!}
                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('office_number') ? ' has-error' : '' }}">
                            <label for="office_number" class="col-md-4 control-label">Office Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="office_number" value="{{ old('office_number', $branch->office_number) }}" required>

                                @if ($errors->has('office_number'))
                                    <span class="help-block">
                                                            <strong>{{ $errors->first('office_number') }}</strong>
                                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email', $branch->email) }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Branch
                                </button>
                                <a href="{{url('branch')}}" type="button" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/phone.js') }}"></script>

    <script src="{{ asset('js/zipcodefinder.js') }}"></script>

@endsection
