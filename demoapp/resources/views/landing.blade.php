<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 10px auto;
            padding: 0;
            background-color: #E9EFEC;
            width: 92%;
        }
        .navbar {
            background-color: #C4DAD2;
            overflow: hidden;
            text-align: center;
            margin-bottom: 15px;
        }
        .navbar a {
            display: inline-block;
            color: #16423C;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #16423C;
            color: #E9EFEC;
        }
        .banner {
            background: url('img/banner.jpg') no-repeat center center;
            background-size: cover;
            color: #E9EFEC;
            padding: 50px 0;
            text-align: center;
        }
        .banner h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .main-content {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }
        .products {
            flex: 2;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            background-color: #E9EFEC;
        }
        .product {
            flex: 1 1 calc(45% - 20px);
            margin: 10px;
            padding: 20px;
            background-color: #C4DAD2;
            text-align: center;
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
        .signup-form {
            flex: 1;
            margin: 10px;
            padding: 20px;
            background-color: #C4DAD2;
            text-align: center;
        }
        .signup-form input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
        }
        .signup-form button {
            padding: 10px 20px;
            background-color: #16423C;
            color: #E9EFEC;
            border: none;
            cursor: pointer;
        }
        .signup-form button:hover {
            background-color: #0d2b24;
        }
        .footer {
            background-color: #6A9C89;
            color: #E9EFEC;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <x-navbar />
    <x-banner />
    <div class="main-content">
        <div class="products">
            <div class="product">
                <img src="img/pineapple.jpg" alt="Product 1" style="height: 300px;">
                <h2>Pineapple</h2>
                <p><b><small>NGN</small></b> 2,200.00</p>
            </div>
            <div class="product">
                <img src="img/tomatoes.jpg" alt="Product 1" style="height: 300px;">
                <h3>Tomatoes (basket)</h3>
                <p><b><small>NGN</small></b> 13,000.00</p>
            </div>
            <div class="product">
                <img src="img/banana.jpg" alt="Product 1" style="height: 300px;">
                <h2>Banana</h2>
                <p><b><small>NGN</small></b> 1,200.00</p>
            </div>
            <div class="product">
                <img src="img/oranges.jpg" alt="Product 1" style="height: 300px;">
                <h2>Oranges</h2>
                <p><b><small>NGN</small></b> 500.00</p>
            </div>
        </div>
        <div class="signup-form">
            <h2>Sign Up</h2>
            <form>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>
    <x-footer />
</body>
</html>
