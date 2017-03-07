@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div id="items_table" class="table-responsive col-md-10 col-md-offset-1">
                <table class="table table-hover table-bordered" style="background-color: white">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>First Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Phone Num</th>
                        <th>Image</th>
                        <th>Applied at</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $s=1; ?>
                    @foreach($jobapplications as $jobapplication)
                        <tr>
                            <td>{{ $s++ }}</td>
                            <td>{{ $jobapplication->firstname }}</td>
                            <td>{{ $jobapplication->surname }}</td>
                            <td>{{ $jobapplication->email }}</td>
                            <td>{{ $jobapplication->phonenum }}</td>
                            <td><a href="{{public_path('/uploads').$jobapplication->image}}" target="_blank">{{ $jobapplication->image }}</a></td>
                            <td>{{ date('Y-m-d h:i:s a', strtotime($jobapplication->created_at)) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
