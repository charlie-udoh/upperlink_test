@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="text-align: center;">
               <h2>Welcome to My Job Application</h2><br>
                @if(isset($message))
                    @if($message == 'closed')
                        <p class="alert alert-warning">Sorry, Application is now closed!</p>
                    @elseif($message == 'applied')
                        <p class="alert alert-success">Your Application has been successfully received</p>
                    @endif
                @else
                    <a href="{{ url('/apply') }}" class="btn btn-lg btn-primary">Apply Now</a>
                @endif
            </div>
        </div>
    </div>
@endsection