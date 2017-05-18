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
            text-align: center;
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
            background-color: #2E86C1;
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
            left: 5%;
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
            background-color: #2ECC71;
            transition: .5s ease;
            left: 35%;
        }
        .button3 {
            background-color: #E74C3C;
            transition: .5s ease;
            left: 65%;
        }

        h1 {
            font-family: Kristen ITC;
            color: darkblue;
            font-size: 40px;
            position: absolute;
            left: 35%;
        }

        h2 {
            position: relative;
            left: 10%;
            font-family: Candara;
            color: maroon;
        }

        img {
            position: fixed;
            left: 80%;
            top: 90%;
        }

    </style>
</head>
<body>

<h1>View Tables</h1>
<img src="/img/1_Primary_logo_on_transparent_269x67.png">
<div>
    <a  href="/admin/functions">
        <img src="/img/Graphicloads-100-Flat-Home.ico"
             class="homebutton"> </a>
</div>
</body>
<table>
    <thead>
    <th scope="col"> Table ID </th>
    <th scope="col"> Status </th>
    {{--<th scope="col"> Change status </th>--}}
    </thead>
    <tbody>
        {{--<tr>--}}
            {{--<td> 1 </td>--}}
            {{--<td> {{$table->status}} </td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td> 2 </td>--}}
            {{--<td>  </td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td> 3 </td>--}}
            {{--<td>  </td>--}}
        {{--</tr>        <tr>--}}
            {{--<td> 4 </td>--}}
            {{--<td>  </td>--}}
        {{--</tr>        <tr>--}}
            {{--<td> 5 </td>--}}
            {{--<td>  </td>--}}
        {{--</tr>        <tr>--}}
            {{--<td> 6 </td>--}}
            {{--<td>  </td>--}}
        {{--</tr>        <tr>--}}
            {{--<td> 7 </td>--}}
            {{--<td>  </td>--}}
        {{--</tr>        <tr>--}}
            {{--<td> 8 </td>--}}
            {{--<td>  </td>--}}
        {{--</tr>--}}
        @foreach($tables as $table)
            <tr>
                <td> {{ $id = $table->table_id }} </td>
                <td> {{ $table->status }} </td>
                <td>
                    {!! Form::open(['url' => '/admin/tables/status']) !!}
                    <div class = "form-group">
                        <input type="hidden" name="id" value={{$id}}}>
                        {!! Form::submit('Change', ['class' => 'btn btn-danger btn-block', 'type'=>'submit']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>

</table>
<h2>0 = available</h2>
<h2>1 = occupied</h2>
</html>