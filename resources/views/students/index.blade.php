@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('STUDENT DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <tr>NIM</th>
                                <tr>Name</th>
                                <th>Class</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach($student as $s)
                            <tr>
                                <td>{{$s->nim}}</td>
                                <td>{{$s->name}}</td>
                                <td>{{$s->class}}</td>
                            </tr>    
                @endforeach
            </tbody>
            </div>
        </div>
    </div>
</div>
@endsection