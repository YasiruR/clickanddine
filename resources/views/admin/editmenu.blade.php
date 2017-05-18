<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
            background-image: url('/img/web-application.jpg');        }

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
            position:relative;
            transition: .5s ease;
            top: 450px;
            right: 0;
        }

        .button2 {
            background-color: #E74C3C;
            position:relative;
            transition: .5s ease;
            top: 20px;
            right: 10px;
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


        h1 {
            font-family: Kristen ITC;
            color: darkblue;
            font-size: 40px;
            position: absolute;
            left: 35%;
        }

        /* Dropdown Button */
        .dropbtn {
            background-color: #204d74;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            position: absolute;
        }

        /* Dropdown button on hover & focus */
        .dropbtn:hover, .dropbtn:focus {
            background-color: #2e6da4;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
            float: inherit;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: #f1f1f1}

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {display:block;}

        .deletedropdown {
            position:relative;
            transition: .5s ease;
            top: 350px;
            left: 900px;
        }

        img {
            position: absolute;
            left: 80%;
            top: 90%;
        }

    </style>
</head>

<body>
<h1>Edit Menu List</h1>
<img src="/img/1_Primary_logo_on_transparent_269x67.png">
<div>
    <a  href="/admin/managemenu">
        <img src="/img/Graphicloads-100-Flat-Home.ico"
             class="homebutton"> </a>
</div>
</body>
<div>
    <table>
        <thead>
        <th scope="col"> Name </th>
        <th scope="col"> Price </th>
        </thead>
        <tbody>
        @foreach($menu as $menuitem)
            <tr>
                <td> {{ $menuitem->name }} </td>
                <td> Rs. {{$menuitem->price}}.00 </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="container">
    <div class="dropdown">
        <button onclick="myFunction()" class="button">Add food item to the menu</button>
        <div id="myDropdown" class="dropdown-content">
            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">

            @foreach($food as $food)
                <a href="/admin/editmenu/add/{{$food->food_id}}"> {{ $food->name }} </a>
            @endforeach
        </div>
    </div>
</div>

<div class="container" class="deletedropdown">
    <div class="deletedropdown">
        <button onclick="myFunction2()" class="button button2">Delete food items from the menu</button>
        <div id="myDropdown2" class="dropdown-content">
            <input type="text" placeholder="Search.." id="myInput2" onkeyup="filterFunction2()">

            @foreach($menu as $menuitem)
                <a href="/admin/editmenu/delete/{{$menuitem->food_id}}"> {{ $menuitem->name }} </a>
            @endforeach
        </div>
    </div>
</div>

<script>
    /* When the user clicks on the button,
     toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
</script>

<script>
    /* When the user clicks on the button,
     toggle between hiding and showing the dropdown content */
    function myFunction2() {
        document.getElementById("myDropdown2").classList.toggle("show");
    }

    function filterFunction2() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput2");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown2");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
</script>

</html>