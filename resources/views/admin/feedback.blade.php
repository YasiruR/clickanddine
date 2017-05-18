<!DOCTYPE html>
<html>
<head>
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

        img {
            position: absolute;
            left: 80%;
            top: 90%;
        }

    </style>
</head>

<body>
<h1>Customers' Comments</h1>
<img src="/img/1_Primary_logo_on_transparent_269x67.png">
<div>
    <a  href="/admin/notifications">
        <img src="/img/Graphicloads-100-Flat-Home.ico"
             class="homebutton"> </a>
</div>
</body>
<table>
    <thead>
    <th scope="col"> Customer </th>
    <th scope="col"> Feedback </th>
    </thead>
    <tbody>
    @foreach($feedback as $feedback)
        <tr>
            <td> {{ $feedback->name }} </td>
            <td> {{ $feedback->feedback }} </td>
        </tr>
    @endforeach
    </tbody>

</table>