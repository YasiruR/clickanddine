<!DOCTYPE html>
<html>
<head>
    <style>
        .homebutton {
            position:absolute;
            transition: .5s ease;
            top: 5%;
            left: 90%;
            height: 100px;
            width: 100px;
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
            top: 10%;
            left: 40%;
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

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }

        h1 {
            font-family: Helvetica;
            color: #C0392B;
            font-size: 18px;
        }

        .button2 {
            background-color: #2ECC71;
            position:absolute;
            transition: .5s ease;
            top: 30%;
            left: 40%;
        }
        .button3 {
            background-color: #E74C3C;
            position:absolute;
            transition: .5s ease;
            top: 50%;
            left: 40%;
        }
        .button4 {
            background-color: #8E44AD;
            position:absolute;
            transition: .5s ease;
            top: 70%;
            left: 40%;
        }


        body {
            background-image: url('/img/desk_restaurant_wine_glasses_plates_flowers_roses_80713_1920x1080.jpg');
            background-size: cover;
            /*background-position: center center;*/
        }

        img {
            position: absolute;
            left: 80%;
            top: 90%;
        }


    </style>
</head>
<body>

    <h1>
        <a href="/admin/notifications" class="button" style="vertical-align:middle"><span> Notifications </span></a><p></p>
        <a href="/admin/tables" class="button button2" style="vertical-align:middle"><span> View tables </span></a><p></p>
        <a href="/admin/managemenu" class="button button3" style="vertical-align:middle"><span> Manage menu lists </span></a><p></p>
        <a href="/admin/waiters" class="button button4" style="vertical-align:middle"><span> Add/Remove Employee </span></a><p></p>

        <a  href="/">
        <img src="/img/Home-icon.png" class="homebutton"> </a>
    </h1>
    <img src="/img/1_Primary_logo_on_transparent_269x67.png">
</body>
</html>