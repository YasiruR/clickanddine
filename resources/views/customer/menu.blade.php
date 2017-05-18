<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url("/img/menu.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        h1 {
            font-family: Lucida Handwriting;
            font-size: 35px;
            color: #117864;
            text-shadow: 2px 2px #FDFEFE;
            position: relative;
            left: 35%;
        }

        .homebutton {
            position: fixed;
            transition: .5s ease;
            top: 5%;
            left: 90%;
            height: 100px;
            width: 100px;
        }


        table {
            font-family: Helvetica;
            font-size: 18px;
            border: 1px solid black;
            width: 80%;
            border-collapse: collapse;
            text-align: center;
            position:absolute;
            top: 30%;
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

        img {
            position: absolute;
            left: 80%;
            top: 90%;
        }

    </style>
</head>
<body>
    <img src="/img/1_Primary_logo_on_transparent_269x67.png">
    <h1>TODAY'S MENU! :)</h1>

    <a  href="/">
        <img src="/img/Home-icon.png" class="homebutton"> </a>

</body>

<table>
    <thead>
    <th scope="col"> Food ID </th>
    <th scope="col"> Name </th>
    <th scope="col"> Price </th>
    </thead>
    <tbody>
    @foreach($menu as $menu)
        <tr>
            <td> {{ $menu->food_id }} </td>
            <td> {{ $menu->name }} </td>
            <td> Rs. {{$menu->price}}.00 </td>
        </tr>
    @endforeach
    </tbody>
</table>
</html>
