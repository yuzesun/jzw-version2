@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create an Organization</div>

                    <div class="panel-body form-horizontal">
                        {{--<form class="form-horizontal" method="GET" action="{{url('organizations')}}">--}}

                        {{ HTML::ul($errors->all()) }}

                        {{ Form::model($organization, array('route' => array('organization.update', $organization->id), 'method' => 'PUT')) }}
                        {{--{{ csrf_field() }}--}}

                        <div class="form-group{{ $errors->has('organization_name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Organization Name</label>

                            <div class="col-md-6">
                                <input id="organization_name" type="text" class="form-control" name="organization_name" value="{{ old('organization_name', $organization->organization_name) }}" required autofocus>

                                @if ($errors->has('organization_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('organization_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address_1') ? ' has-error' : '' }}">
                            <label for="address_1" class="col-md-4 control-label">Address 1</label>

                            <div class="col-md-6">
                                <input id="address_1" type="text" class="form-control" name="address_1" value="{{ old('address_1', $organization->address_1) }}" required autofocus>

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
                                <input id="address_2" type="text" class="form-control" name="address_2" value="{{ old('address_2', $organization->address_2) }}" autofocus>

                                @if ($errors->has('address_2'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('address_2') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city', $organization->city) }}" required autofocus>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('city') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">State</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" value="{{ old('state', $organization->state) }}" required autofocus>

                                @if ($errors->has('state'))
                                    <span class="help-block">
                                                    <strong>{{ $errors->first('state') }}</strong>
                                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}">
                            <label for="zipcode" class="col-md-4 control-label">Zip Code</label>

                            <div class="col-md-6">
                                <input id="zipcode" type="text" class="form-control" name="zipcode" value="{{ old('zipcode', $organization->zipcode) }}" required autofocus>

                                @if ($errors->has('zipcode'))
                                    <span class="help-block">
                                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('office_number') ? ' has-error' : '' }}">
                            <label for="office_number" class="col-md-4 control-label">Office Number</label>

                            <div class="col-md-6">
                                <input id="office_number" type="text" class="form-control" name="office_number" value="{{ old('office_number', $organization->office_number) }}" required autofocus>

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
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email', $organization->email) }}" >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Edit Organization
                            </button>
                            <a href="{{url('organization')}}" type="button" class="btn btn-default">Cancel</a>
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Create--}}
                                {{--</button>--}}
                                {{--<a href="{{url('organization')}}" type="button" class="btn btn-default">Cancel</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {!! Form::close() !!}
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
