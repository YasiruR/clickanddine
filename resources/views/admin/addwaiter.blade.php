<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        h1 {
            font-family: Kristen ITC;
            color: darkblue;
            font-size: 40px;
            position: absolute;
            left: 35%;
        }

        body {
            font-family: Helvetica;
            background-image: url('/img/web-application.jpg');
        }

        .homebutton {
            position:absolute;
            transition: .5s ease;
            top: 5%;
            left: 90%;
            height: 100px;
            width: 100px;
        }

        img {
            position: absolute;
            left: 80%;
            top: 90%;
        }

    </style>

</head>
<body>
<h1>Add new employee</h1>
<img src="/img/1_Primary_logo_on_transparent_269x67.png">

<br><br><br><br><br><br><br>

<div class="container">
    <a  href="/admin/waiters">
        <img src="/img/Graphicloads-100-Flat-Home.ico"
             class="homebutton"> </a>
    <div>
        {!! Form::open(['url' => '/admin/waiters']) !!}

        <div class = "form-group">
            {!! Form::label('name', 'Name of the employee : ') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class = "form-group">
            {!! Form::label('availability', 'Availability : ') !!}
            {!! Form::text('availability', 'available', ['class' => 'form-control']) !!}
        </div>
        <br><br>
        <div class = "form-group">
            {!! Form::submit('Add employee', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>

@if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

</body>
</html>