@extends('layouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/organization')}}">Organization</a></li>
            <li class="breadcrumb-item active">Add an Organization</li>
        </ol>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create an Organization</div>

                    <div class="panel-body form-horizontal">

                        {{ HTML::ul($errors->all()) }}

                        {!! Form::open(['url' => 'organization']) !!}
                        {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('organization_name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Organization Name</label>

                                <div class="col-md-6">
                                    <input id="organization_name" type="text" class="form-control" name="organization_name" value="{{ old('organization_name') }}" required autofocus>

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
                                    <input id="address_1" type="text" class="form-control" name="address_1" value="{{ old('address_1') }}" required autofocus>

                                    @if ($errors->has('address_1'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address_1') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address_2') ? ' has-error' : '' }}">
                                <label for="address_2" class="col-md-4 control-label">Address 2 (Optional)</label>

                                <div class="col-md-6" style="width: 140px;">
                                    <input id="address_2" type="text" class="form-control" name="address_2" value="{{ old('address_2') }}" autofocus>

                                    @if ($errors->has('address_2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address_2') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('zipCode') ? ' has-error' : '' }}">
                                <label for="zipCode" class="col-md-4 control-label">Zip Code</label>

                                <div class="col-md-6" style="width: 140px;">
                                    <input id="zipCode" type="text" pattern="[0-9]{5}" maxlength="5" style="width: 70px;" class="form-control" name="zipCode" value="{{ old('zipcode') }}" required autofocus>

                                    @if ($errors->has('zipCode'))
                                        <span class="help-block">
                                                            <strong>{{ $errors->first('zipCode') }}</strong>
                                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div id="hideCity" class="form-group{{ $errors->has('city') ? ' has-error' : '' }}" style="display: none;">
                                <label for="city" class="col-md-4 control-label">City</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" style="width: 190px;" class="form-control" name="city" value="{{ old('city') }}" required autofocus>
                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('city') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>

                            <div id="hideState" class="form-group{{ $errors->has('state') ? ' has-error' : '' }}" style="display: none;">
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

                                <div class="col-md-6" style="width: 160px;">
                                    <input id="phone" type="text" placeholder="(555) 555-5555" class="form-control" name="office_number" value="{{ old('office_number') }}" required autofocus>

                                    @if ($errors->has('office_number'))
                                        <span class="help-block">
                                                            <strong>{{ $errors->first('office_number') }}</strong>
                                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address (Optional)</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

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
                                        Create
                                    </button>
                                    <a href="{{url('organization')}}" type="button" class="btn btn-default">Cancel</a>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/hideCityState.js') }}"></script>
    <script src="{{ asset('js/zipcodefinder.js') }}"></script>
    <script src="{{ asset('js/phone.js') }}"></script>

@endsection
