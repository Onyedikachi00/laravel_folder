<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            display: grid;
            height: 100vh;
            grid-auto-columns:1fr;
            grid-auto-rows: 0.4fr 1.5fr 1.7fr 0.4fr; 
            grid-gap: 8px;
            color: azure;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-align: center;

        }
        .navbar{
            background-color: lightsteelblue;
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }
        ul{
            display: flex;
            justify-content: center;
            list-style: none;
            flex: 1;
        }
        ul li{
            margin: 0px 15px;
        }
        .main{
            background-color:burlywood;
            width: 80%;
            margin: 0px auto;
        }
        .footer{
            background-color:palegreen;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <div class="logo"> <img src="" alt="Logo"></div>
            <div class="nav-items">
                <ul>
                    <li>Home</li>
                    <li>About</li>
                    <li>Contact</li>
                </ul>
            </div>
            <div class="sign">
                <button>sign in</button>
            </div>
        </nav>
        <main class="main">Main</main>
        <x-grid.section />
        <div class="footer">Footer</div>
    </div>
</body>
</html>