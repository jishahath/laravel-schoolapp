@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    Welcome <strong> {{ Auth::user()->name }} </strong> 
                    
        
                    <div class="links">
                        <a href="{{ route('showStudent') }}">Students</a>,
                        <a href="{{ route('showEvent') }}">Events</a>,
                        <a href="{{ route('showDuty') }}">Duty</a>  or
                        <a href="{{ route('showStudentlist') }}">Students List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Styles -->
<style>

    .alert {
        font-size: 16px;
        font-family: monospace;
    }

    .balance {
        font-size: 56px;
        font-family: monospace;
    }

</style>
