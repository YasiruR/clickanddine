<!DOCTYPE html>
<html>
<head>
    <style>
        .image {
            position: relative;
            height: 500px;
            width: 1000px;
            top: 5%;
            left: 10%;
            border-style: solid;
        }

        .homebutton {
            position: fixed;
            transition: .5s ease;
            top: 5%;
            left: 90%;
            height: 100px;
            width: 100px;
        }

        .btn-group .button {
            background-color: #186A3B;
            border: 1px solid green;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            float: left;
            position: relative;
            top: 80%;
            border-radius: 12px;

            /*buttons are needed to move leftwards with the image above it*/
        }
        .btn-group .button:not(:last-child) {
            border-right: none;
        }
        .btn-group .button:hover {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
        }

        .btn-group2 .button {
            background-color: #1B4F72;
        }

        .btn-group2 .button:hover {
            /*background-color: #3498DB;*/
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
        }

        body {
            background-image: url('/img/1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        div.text {
            font-family: Kristen ITC;
            color: #F4D03F;
            font-size: 30px;
            position: relative;
            top: 10px;
            left: 10px;
            text-shadow: 2px 2px #6E2C00;
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
    <img src="/img/restaurant-wallpaper-full-hd.jpg" class="image">

    <a  href="/">
        <img src="/img/Home-icon.png" class="homebutton"> </a>

    <div class="btn-group">

        <button type="button" onclick="location.href='{{ url('/customer/reservation/reservationform/1') }}'" class="button" role="button">1</button>
        <button type="button" onclick="location.href='{{ url('/customer/reservation/reservationform/2') }}'" class="button" role="button">2</button>
        <button type="button" onclick="location.href='{{ url('/customer/reservation/reservationform/3') }}'" class="button" role="button">3</button>
        <button type="button" onclick="location.href='{{ url('/customer/reservation/reservationform/4') }}'" class="button" role="button">4</button>
    </div>

    <div class="btn-group btn-group2">
        <button type="button" onclick="location.href='{{ url('/customer/reservation/reservationform/5') }}'" class="button" role="button">5</button>
        <button type="button" onclick="location.href='{{ url('/customer/reservation/reservationform/6') }}'" class="button" role="button">6</button>
        <button type="button" onclick="location.href='{{ url('/customer/reservation/reservationform/7') }}'" class="button" role="button">7</button>
        <button type="button" onclick="location.href='{{ url('/customer/reservation/reservationform/8') }}'" class="button" role="button">8</button>
    </div>

    <div class="text">
        Reserve your preferred table just by clicking on the relevant table number!
    </div>

</body>
</html>