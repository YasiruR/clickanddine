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
            background-image: url("/img/BracketBackground.png");
            background-size: cover;
        }

        .homebutton {
            position: absolute;
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
<img src="/img/1_Primary_logo_on_transparent_269x67.png">
<h1>Reserve the table</h1>

<br><br><br><br><br><br><br>

<div class="container">
    <a href="/customer/reservation">
        <img src="/img/Graphicloads-100-Flat-Home.ico"
             class="homebutton"> </a>
    <div>
        {!! Form::open(['url' => '/customer/reservation']) !!}
        {{--<div class="form-group">--}}
        {{--<input type="hidden" id="waiter_id" name="waiter_id" value="0"/>--}}
            {{--</div>--}}
        <div class="form-group">
            {!! Form::label('name', 'Name : ') !!}
            {!! Form::text('customer', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('table_id', 'Table No : ') !!}
            {{--{!! Form::label('table_id', $number) !!}--}}
            {!! Form::text('table_id', $number, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('time', 'Reserved time : ') !!}
            {!! Form::input('time', 'time', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        </div>
        <br><br>
        <div class="form-group" onclick="validation()">
            {!! Form::submit('Done !', ['class' => 'btn btn-primary form-control']) !!}
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

<link rel="stylesheet" type="text/css" href="/sweetalert/sweetalert.css">
<script  src="/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
    function validation() {
        if ($customer && $time) {
            swal("Good job!", "You clicked the button!", "success");
        } else {
            sweetAlert("Oops...", "Something went wrong!", "error");
        }
    }
</script>
</body>
</html>