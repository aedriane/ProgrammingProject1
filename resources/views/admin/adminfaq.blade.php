@extends('admin.layout.auth')

@section('content')

@desktop

<link href="{{ asset('css/css.css') }}" rel="stylesheet">

<div class="container2">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="">
                <div class="panel-heading title"><p>FAQs</p></div>

                <div class="panel-body">
                    <p>This page is for FAQs regarding regular enquiries and assistance users need.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@enddesktop




@mobile

<link href="{{ asset('css/css.css') }}" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="">
                <div class="panel-heading title"><p>FAQs</p></div>

                <div class="panel-body">
                    <p>This page is for FAQs regarding regular enquiries and assistance users need.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endmobile






@endsection
