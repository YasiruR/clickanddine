@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <a href="http://127.0.0.1:8000/admin/functions"> Click here to continue as admin </a>
            </div>
        </div>
    </div>
</div>
@endsection
