<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid</title>
    <style>
        .container{
            display: grid;
            height: 100vh;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-template-rows: 0.2fr 1.8fr 1.5fr 0.5fr;
            grid-template-areas: 
            "nav nav nav nav"
            "sidebar main main main"
            "sidebar content1 content2 content3"
            "sidebar footer footer footer";
            grid-gap: 5px;
            color: azure;
            text-align: center;
            font-weight: bolder;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .navbar{
            background-color: aquamarine;
            grid-area: nav;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }
        .nav-items{
            display: flex;
            justify-content: center;
            list-style: none;
            flex: 1;
        }
        .nav-items li {
            margin: 0 15px;
        }

        .nav-items a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        .nav-items a:hover {
            color: black;
            background-color: crimson;
            padding: 10px;
        }
        .main{
            background-color:burlywood;
            grid-area: main;
            border-radius: 5px;
        }
        .sidebar{
            background-color:cadetblue;
            grid-area: sidebar;
            border-radius: 5px;
            padding-top: 10px;
        }
        .content1{
            background-color:coral ;
            grid-area: content1;
            border-radius: 5px;
            padding-top: 10px;
        }
        .content2{
            background-color:darkcyan;
            grid-area: content2;
            border-radius: 5px;
            padding-top: 10px;
        }
        .content3{
            background-color:darkslateblue;
            grid-area: content3;
            border-radius: 5px;
            padding-top: 10px;
        }
        .footer{
            background-color:hotpink;
            grid-area: footer;
            border-radius: 5px;
            padding-top: 10px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <x-grid.nav />
        <main class="main">Main</main>
        <x-grid.sidabar />
        <div class="content1">content1</div>
        <div class="content2">content2</div>
        <div class="content3">content3</div>
        <div class="footer">Footer</div>
    </div>
</body>
</html>