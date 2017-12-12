@extends('layouts.app')

@section('content')

    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
            <li class="breadcrumb-item active">Branches</li>
        </ol>
        <div style="padding: 20px 0px;">
            <a href="{{URL::to('branch/create')}}" class="btn btn-primary" style="">Add Branch</a>
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
                <a type="button" class="btn btn-default" href="{{ action('BranchController@index') }}">View All Branches</a>
            </div>
        </div>


        @if(sizeOf($branches) != 0)

            <table class="table table-striped table-bordered table-hover text-center">
                <thead>
                <tr class="">
                    <th class="text-center">Organization Name</th>
                    <th class="text-center">Branch Name</th>
                    <th class="text-center">Location</th>
                    <th class="text-center">Office Number</th>
                    <th class="text-center">Email</th>
                    <th class="text-center" colspan="2">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($branches as $branch)
                    <tr>
                        <td style="vertical-align: middle">{{ $branch->BranchOrganization->organization_name }}</td>
                        <td style="vertical-align: middle">{{ $branch->branch_name }}</td>
                        <td style="vertical-align: middle">{{ $branch->city }}, {{ $branch->state }} {{ $branch->zipCode }}</td>
                        <td style="vertical-align: middle">{{ $branch->office_number }}</td>
                        <td style="vertical-align: middle">{{ $branch->email }}</td>
                        <td style="vertical-align: middle"><a href="{{ URL::to('branch/' . $branch->id . '/edit') }}" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Profile</a></td>

                        <td class="" style="vertical-align: middle">
                            {!! Form::open(['method' => 'DELETE', 'route'=>['branch.destroy', $branch->id]]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                {{--{{$organizations->links()}}--}}
                </tbody>
            </table>
        @else
            <p>No Branch is stored in the system yet.</p>
        @endif
        {{--{{$organizations->links()}}--}}
    </div>



@endsection