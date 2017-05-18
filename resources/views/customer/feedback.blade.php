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
            color: white;
            font-size: 40px;
            position: absolute;
            left: 20%;
            top: 7%;
        }

        body {
            font-family: Helvetica;
            background-image: url("/img/background_default.jpg");
            background-size: cover;
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

        .container {
            position: absolute;
            top: 25%;
            left: 7%;
        }

        .form-group {
            color: white;
        }

    </style>

</head>
<body>
<img src="/img/1_Primary_logo_on_transparent_269x67.png">
<h1>Add your comment on ClickAndDine :)</h1>

<br><br><br><br><br><br><br>

{{--<a  href="/">--}}
    {{--<img src="http://www.iconarchive.com/download/i87094/graphicloads/colorful-long-shadow/Home.ico"--}}
         {{--class="homebutton"> </a>--}}

<a  href="/">
    <img src="/img/Graphicloads-100-Flat-Home.ico"
         class="homebutton"> </a>

<div class="container">
    <div>
        {!! Form::open(['url' => '/customer/feedback']) !!}

        <div class = "form-group">
            {!! Form::label('name', 'Your name : ') !!}
            {!! Form::text('name', null, ['class' => 'form-control'])!!}
        </div>

        <div class = "form-group">
            {!! Form::label('feedback', 'Feedback : ') !!}
            {!! Form::textarea('feedback', null, ['class' => 'form-control']) !!}
        </div>

        <br><br>
        <div class = "form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
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