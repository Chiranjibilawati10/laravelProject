@extends('layouts.app')


@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Listing <a class="btn btn-default btn-xs" href="/dashboard">Go Back</a></div>

            <div class="card-body">
            	{!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
    				{{Form::bsText('name', '', ['placeholder' => 'Company Name'])}}
    				{{Form::bsText('website', '', ['placeholder' => 'Company Website'])}}
    				{{Form::bsText('email', '', ['placeholder' => 'Contact Email'])}}
    				{{Form::bsText('phone', '', ['placeholder' => 'Contact Person'])}}
    				{{Form::bsText('address', '', ['placeholder' => 'Business Address'])}}
    				{{Form::bsText('bio', '', ['placeholder' => 'About this business'])}}
    				{{Form::bsSubmit('submit')}}
				{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection