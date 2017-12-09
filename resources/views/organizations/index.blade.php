@extends('layouts.app')

@section('content')

    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
            <li class="breadcrumb-item active">Organizations</li>
        </ol>
        <div style="padding: 20px 0px;">
            <a href="{{URL::to('organization/create')}}" class="btn btn-primary" style="">Add Organization</a>
        </div>
        
        {{--<div class="col-md-offset-8 col-lg-offset-8 col-xs-offset-8 form-inline">--}}
            {{--{{ Form::open(['method'=> 'GET', 'action' => 'OrderController@searchOrder']) }}--}}
            {{--{{Form::input('search','q', null, ['placeholder' => 'Purchase order number...','class'=>'form-control', 'autocomplete'=>'off'])}}--}}
            {{--{!! Form::submit('Search', ['class' => 'btn btn-default']) !!}--}}
            {{--{{ Form::close() }}--}}
        {{--</div>--}}
        <div class="" style="padding: 30px 0px 10px;">
            @if (Session::has('message'))
                <div class="alert alert-success" style="width: 280px; float: left;">{{ Session::get('message') }}</div>
            @endif
            <div class="" style="padding: 60px 0px 20px; float: right;">
                <a type="button" class="btn btn-default" href="{{ action('OrganizationController@index') }}">View All Organizations</a>
            </div>
        </div>


        @if(sizeOf($organizations) != 0)

            <table class="table table-striped table-bordered table-hover text-center">
                <thead>
                <tr class="warning">
                    <th class="text-center">Organization Name</th>
                    <th class="text-center">Location</th>
                    <th class="text-center">Office Number</th>
                    <th class="text-center">Email</th>
                    <th class="text-center" colspan="2">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($organizations as $organization)
                    <tr>
                        <td style="vertical-align: middle">{{ $organization->organization_name }}</td>
                        <td style="vertical-align: middle">{{ $organization->city }}, {{ $organization->state }} {{ $organization->zipcode }}</td>
                        <td style="vertical-align: middle">{{ $organization->office_number }}</td>
                        <td style="vertical-align: middle">{{ $organization->email }}</td>
                        {{--<td style="vertical-align: middle"><a href="{{route('organizations.show',$organization->id)}}" class="btn btn-primary">Details</a></td>--}}
                        {{--<td style="vertical-align: middle"><a href="{{route('organizations.edit',$organization->id)}}" class="btn btn-warning">Update</a></td>--}}
                        <td style="vertical-align: middle"><a href="{{ URL::to('organization/' . $organization->id . '/edit') }}" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></td>

                        <td class="" style="vertical-align: middle">
                            {!! Form::open(['method' => 'DELETE', 'route'=>['organization.destroy', $organization->id]]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                {{--{{$organizations->links()}}--}}
                </tbody>
            </table>
        @else
            <p>No Organization is stored in the system yet.</p>
        @endif
        {{--{{$organizations->links()}}--}}
    </div>



@endsection