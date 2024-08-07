@extends('layouts.app')
@section('content')

@if (Auth::user()->is_admin == 1)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center ex-page-content">
                            <h2>Success</h2><br>
                            <a class="mb-5 btn btn-info waves-effect waves-light" href="{{ route('cert.appearance.admin') }}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center ex-page-content">
                            <h2>Success</h2><br>
                            <a class="mb-5 btn btn-info waves-effect waves-light" href="{{ route('cert.appearance') }}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@endsection
