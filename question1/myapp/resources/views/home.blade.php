@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body" style="text-align: center;">
                    You are logged in!.
                   <h4>Welcome To the Administative Section</h4>
                    <a href="{{ url('/applications') }}" class="btn btn-primary btn-lg">View List Of Applicants</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
