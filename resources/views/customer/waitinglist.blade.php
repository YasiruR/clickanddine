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
            background-image: url("/img/BracketBackground.png");
            background-size: cover;        }

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
            left: 25%;
            bottom: 30%;
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
            left: 55%;
            bottom: 30%;
        }

        h1 {
            font-family: Kristen ITC;
            color: #d43f3a;
            font-size: 35px;
            position: absolute;
            top: 30%;
            text-align: center;
        }

        h2 {
            font-family: Kristen ITC;
            color: #196c4b;
            font-size: 35px;
            position: absolute;
            top: 75%;
            text-align: center;
            left: 27%;
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
    <h1>Sorry, Your preferred table has already been reserved! But you can add yourself to the waiting list. :)</h1>
    <div>
        <a  href="/customer/reservation">
            <img src="/img/Graphicloads-100-Flat-Home.ico"
                 class="homebutton"> </a>

        <a href="/customer/reservation" class="button" style="vertical-align:middle"><span> Reserve another table </span></a><p></p>
        <a href="/customer/reservation/waitinglistform/{{$number}}" class="button button2" style="vertical-align:middle"><span> Add to waiting list </span></a><p></p>
    </div>
    <h2> We'll call you once the table is available! </h2>
</body>
</html>