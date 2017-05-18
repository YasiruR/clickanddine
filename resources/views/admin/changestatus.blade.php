<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous">
    </script>
    <style>
        table {
            font-family: Helvetica;
            font-size: 18px;
            border: 1px solid black;
            width: 80%;
            border-collapse: collapse;
            text-align: center;
            position:absolute;
            top: 20%;
            left: 5%;
        }

        td, th {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: #145A32;
            color: white;
        }

        tr:hover {background-color: #f5f5f5}

        .homebutton {
            position:absolute;
            transition: .5s ease;
            top: 5%;
            left: 90%;
            height: 100px;
            width: 100px;
        }

        body {
            font-family: Helvetica;
            background-image: url('/img/web-application.jpg');        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        h1 {
            font-family: Kristen ITC;
            color: darkblue;
            font-size: 40px;
            position: absolute;
            left: 40%;
        }

        .btn {
            background-color: #1b6d85;
        }

        .btn:hover {
            background-color: #6b9dbb;
        }

        img {
            position: absolute;
            left: 80%;
            top: 90%;
        }


    </style>
</head>

<body>
<a  href="/admin/functions">
    <img src="/img/Graphicloads-100-Flat-Home.ico"
         class="homebutton"> </a>

<h1> Employees </h1>
<img src="/img/1_Primary_logo_on_transparent_269x67.png">
</body>

<table>
    <thead>
    <th scope="col"> Employee ID </th>
    <th scope="col"> Name </th>
    <th scope="col"> Availability </th>
    </thead>
    <tbody>
    @foreach($waiters as $waiter)
    <tr>
        <td> {{ $waiters_id = $waiter->waiters_id }} </td>
        <td> {{ $waiter->name }} </td>
        <td> {{ $availability = $waiter->availability }} </td>
        <td>
            {!! Form::open(['url' => '/admin/waiters/changestatus']) !!}
            <div class = "form-group">
                <input type="hidden" name="id" value={{$waiters_id}}>
                {!! Form::submit('Change Availability', ['class' => 'btn btn-danger btn-block', 'type'=>'submit']) !!}
            </div>
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</html>

