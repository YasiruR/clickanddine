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
            background-image: url('/img/web-application.jpg');
        }

        .button {
            background-color: #259d6d;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 12px;
            width: 250px;
            position:absolute;
            transition: .5s ease;
            bottom: 10%;
            left: 25%;
        }

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

        .button2 {
            background-color: #78341a;
            transition: .5s ease;
            left: 60%;
            position: relative;
        }
        .button3 {
            background-color: #E74C3C;
            transition: .5s ease;
            left: 90%;
            width: 100px;
            position: relative;
        }

        h1 {
            font-family: Kristen ITC;
            color: darkblue;
            font-size: 40px;
            position: absolute;
            left: 35%;
        }

        div.container {
            position: absolute;
            bottom: 20%;
            left: 5%;
        }

        img {
            position: absolute;
            left: 80%;
            top: 90%;
        }

   </style>

    {{--<script type="text/javascript">--}}
        {{--$(document).ready(function () {--}}
            {{--$('table tbody tr').click(function () {--}}
                {{----}}
            {{--})--}}
        {{--})--}}
    {{--</script>--}}

</head>
<body>
<h1>Notifications</h1>
<img src="/img/1_Primary_logo_on_transparent_269x67.png">
<div>
    <a  href="/admin/functions">
        <img src="/img/Graphicloads-100-Flat-Home.ico"
             class="homebutton"> </a>

</div>
</body>
<table>
    <thead>
    <th scope="col"> Reservation ID </th>
    <th scope="col"> Customer's name </th>
    <th scope="col"> Reserved time </th>
    <th scope="col"> Table ID </th>
    <th scope="col"> Waiter's ID </th>
    </thead>
    <tbody>
    @foreach($reservations as $reservation)
        <tr>
            <td> {{ $id = $reservation->reservation_id }} </td>
            <td> {{ $reservation->customer }} </td>
            <td> {{ $reservation->reserved_time }} </td>
            <td> {{ $table_id = $reservation->table_id }} </td>
            <td> {{ $reservation->waiter_id }} </td>

            <td>
                {!! Form::open(['url' => '/admin/notifications/removereservation/']) !!}
                <div class = "form-group">
                    <input type="hidden" name="id" value={{$id}}}>
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'type'=>'submit']) !!}
                </div>
                {!! Form::close() !!}
            </td>
            <td>
                {!! Form::open(['url' => '/admin/notifications/waiter']) !!}
                <div class = "form-group">
                    {!! Form::submit('Waiter Assignment', ['class' => 'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
            </td>
            <td>
                {!! Form::open(['url' => '/admin/notifications/table']) !!}
                <div class = "form-group">
                    <input type="hidden" name="table_id" value={{$table_id}}}>
                    {!! Form::submit('Table Reservation', ['class' => 'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{--<script>--}}
    {{--var index, table = document.getElementById();--}}
    {{--for (var i = 1; i < table.rows.length; i++) {--}}
        {{--table.rows[i].cells[5].onclick = function () {--}}
            {{--var c = confirm("Are you sure of deleting this reservation ?");--}}
            {{--if (c == true) {--}}
                {{--index = this.parentElement.rowIndex;--}}
                {{--table.deleteRow(index);--}}
                {{--console.log(index);--}}
            {{--}--}}
        {{--}--}}
    {{--}--}}
{{--</script>--}}


{{--<div>--}}

    {{--{!! Form::open(['route' => ['reservations.delete', $reservation=>reservation_id], 'method' => 'DELETE']) !!}--}}

    {{--{!! Form::open(['url' => '/admin/notifications']) !!}--}}

    {{--<div class = "form-group">--}}
        {{--{!! Form::label('id', 'Reservation ID : ') !!}--}}
        {{--{!! Form::text('id', null, ['class' => 'form-control']) !!}--}}
    {{--</div>--}}

    {{--<div class = "form-group">--}}
        {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}
{{--</div>--}}

<div class="container">
    <a href="/admin/viewfeedback" class="button" style="vertical-align:middle"><span> View Feedbacks </span></a><p></p>
    <a href="/admin/waitinglist" class="button button2" style="vertical-align:middle"><span> View Waiting List </span></a><p></p>
</div>
</html>
