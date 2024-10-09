<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .navbar {
            background-color: #ddd;
            overflow: hidden;
            text-align: center;
        }
        .navbar a {
            display: inline-block;
            color: black;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #000;
            color: #fff;
        }
        .container {
            max-width: 1000px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .top {
            max-width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .top img {
            width: 50%;
            margin-bottom: 20px;
        }
        .top ul {
            list-style-type: none;
            padding: 0;
        }
        .top ul li {
            margin: 5px 0;
        }
        .middle-container {
            display: flex;
            justify-content: space-between;
        }
        .side-container {
            flex: 1;
            padding: 10px;
            background: #f4f4f4;
            margin: 0 10px;
        }
        .side-container ul {
            list-style-type: none;
            padding: 0;
        }
        .side-container ul li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="landing">Home</a>
        <a href="#profile">Profile</a>
        <a href="#contact">Contact</a>
    </div>
        
    <div class="top">
        <img src="{{ URL("img/profile.jpg")}}" alt="Profile Picture" style="height: 250px; border-radius:50%;">
        <h4>Name: Cyprian Onyedikachi</h4>
        <h4>Reg. No.: 0102307272</h4>
        <h4>Department: Software Engineering</h4>
        <h4>Course Code: BIT6193</h4>
        <h4>Email: onyedikachc@gmail.com</h4>
        
    </div>
    <div class="container">
        <div class="middle-container">
            <div class="side-container">
                <h2>Topics covered so far</h2>
                <hr/>
                <ul>
                    <li>1. Laravel and it's folders</li>
                    <li>2. View Component</li>
                    <li>3. Layout</li>
                    <li>4. Passing data to components</li>
                    <li>5. Calling components</li>
                </ul>
            </div>
            <div class="side-container">
                <h2>Achievements </h2>
                <hr/>
                <ul>
                    <li>1. Basic Laravel Knowledge</li>
                    <li>2. Creating and editing '.blade.php' files</li>
                    <li>3. Creating and modifing Route</li>
                    <li>4. Handling Laravel Template</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
