<!DOCTYPE html>
<html>
    <head>
        <title>Multiversum | Store</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>" />
        <script src="js/store.js" async></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <header class="main-header">
            <nav class="main-nav nav">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="store">STORE</a></li>
                    <li><a href="about-us">ABOUT</a></li>
                </ul>
            </nav>
            <h1 class="brand-name brand-name-large">Multiversum</h1>
        </header>
        <section class="container content-section">
            <h2 class="section-header">MUSIC</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Album 1</span>
                    <img class="shop-item-image" src="Images/Album 1.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Album 2</span>
                    <img class="shop-item-image" src="Images/Album 2.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Album 3</span>
                    <img class="shop-item-image" src="Images/Album 3.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Album 4</span>
                    <img class="shop-item-image" src="Images/Album 4.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">MERCH</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">T-Shirt</span>
                    <img class="shop-item-image" src="Images/Shirt.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Coffee Cup</span>
                    <img class="shop-item-image" src="Images/Cofee.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$6.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="brand-name">Multiversum</h3>
            </div>
        </footer>
        <style media="screen">
            @import url('https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap');
            @import url("https://fonts.googleapis.com/css?family=Metal+Mania");

            * {
                box-sizing: border-box;
                font-family: Raleway;
                color: #777;
            }

            html, body {
                margin: 0;
                padding: 0;
                min-height: 100%;
            }

            .nav ul {
                margin: 0;
            }

            .nav li {
                display: inline;
            }

            .nav a {
                display: inline-block;
                padding: .5em;
                color: white;
                text-decoration: none;
            }

            .main-nav {
                text-align: center;
                font-size: 1.1em;
                font-weight: lighter;
                border-bottom: 1px solid rgba(255, 255, 255, .3)
            }

            .main-nav li {
                padding: 0 5%;
            }

            .nav a:hover {
                background-color: rgba(255, 255, 255, .3)
            }

            .main-header {
                background-color: #2c3e50;
                background-blend-mode: multiply;
                background-size: cover;
                padding-bottom: 30px;
            }

            .brand-name {
                text-align: center;
                margin: 0;
                font-size: 4em;
                font-family: 'Do Hyeon', sans-serif;
                font-weight: normal;
                color: white;
            }

            .brand-name-large {
                font-size: 8em;
            }

            .content-section {
                margin: 1em;
            }

            .container {
                max-width: 900px;
                margin: 0 auto;
                padding: 0 1.5em;
            }
            .section-header {
                font-family:  'Do Hyeon', sans-serif;
                font-weight: normal;
                color: #333;
                text-align: center;
                font-size: 2.5em;
            }

            .about-brand-image {
                float: left;
                height: 200px;
                width: 200px;
                margin: 15px;
                border-radius: 50%;
            }

            .main-footer {
                background-color: #2c3e50;
                color: white;
                padding: .25em 0;
            }

            .main-footer-container {
                display: flex;
                align-items: center;
            }

            .main-footer-container ul {
                flex-grow: 1;
                text-align: end;
            }

            .footer-nav li {
                padding: 0 .5em;
            }

            .footer-nav img {
                width: 30px;
                height: 30px;
            }

            .btn {
                text-align: center;
                vertical-align: middle;
                padding: .67em .67em;
                cursor: pointer;
            }

            .btn-header {
                margin: .5em 15% 2em 15%;
                color: white;
                border: 2px solid #2D9CDB;
                background-color: rgba(255, 255, 255, .1);
                border-radius: 0;
                font-size: 1.5em;
                font-weight: lighter;
                padding-left: 2em;
                padding-right: 2em;
            }

            .btn-header:hover {
                background-color: rgba(255, 255, 255, .3);
            }

            .btn-play {
                display: block;
                margin: 0 auto;
                color: #2D9CDB;
                font-size: 4em;
                border-radius: 50%;
                width: 100px;
                height: 100px;
                padding: 0;
                text-align: center;
            }

            .btn-primary {
                color: white;
                background-color: #56CCF2;
                border: none;
                border-radius: .3em;
                font-weight: bold;
            }

            .btn-primary:hover {
                background-color: #2D9CDB;
            }

            .tour-row {
                border-bottom: 1px solid black;
                padding-bottom: 1em;
                margin-bottom: 1em;
            }

            .tour-row:last-child {
                border: none;
            }

            .tour-item {
                display: inline-block;
                padding-right: .5em;
            }

            .tour-date {
                color: #555;
                width: 11%;
                font-weight: bold;
            }

            .tour-city {
                width: 24%;
            }

            .tour-arena {
                width: 42%;
            }

            .tour-btn {
                max-width: 19%;
            }

            .shop-item {
                margin: 30px;
            }

            .shop-item-title {
                display: block;
                width: 100%;
                text-align: center;
                font-weight: bold;
                font-size: 1.5em;
                color: #333;
                margin-bottom: 15px;
            }

            .shop-item-image {
                height: 250px;
            }

            .shop-item-details {
                display: flex;
                align-items: center;
                padding: 5px;
            }

            .shop-item-price {
                flex-grow: 1;
                color: #333;
            }

            .shop-items {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
            }

            .cart-header {
                font-weight: bold;
                font-size: 1.25em;
                color: #333;
            }

            .cart-column {
                display: flex;
                align-items: center;
                border-bottom: 1px solid black;
                margin-right: 1.5em;
                padding-bottom: 10px;
                margin-top: 10px;
            }

            .cart-row {
                display: flex;
            }

            .cart-item {
                width: 45%;
            }

            .cart-price {
                width: 20%;
                font-size: 1.2em;
                color: #333;
            }

            .cart-quantity {
                width: 35%;
            }

            .cart-item-title {
                color: #333;
                margin-left: .5em;
                font-size: 1.2em;
            }

            .cart-item-image {
                width: 75px;
                height: auto;
                border-radius: 10px;
            }

            .btn-danger {
                color: white;
                background-color: #EB5757;
                border: none;
                border-radius: .3em;
                font-weight: bold;
            }

            .btn-danger:hover {
                background-color: #CC4C4C;
            }

            .cart-quantity-input {
                height: 34px;
                width: 50px;
                border-radius: 5px;
                border: 1px solid #56CCF2;
                background-color: #eee;
                color: #333;
                padding: 0;
                text-align: center;
                font-size: 1.2em;
                margin-right: 25px;
            }

            .cart-row:last-child {
                border-bottom: 1px solid black;
            }

            .cart-row:last-child .cart-column {
                border: none;
            }

            .cart-total {
                text-align: end;
                margin-top: 10px;
                margin-right: 10px;
            }

            .cart-total-title {
                font-weight: bold;
                font-size: 1.5em;
                color: black;
                margin-right: 20px;
            }

            .cart-total-price {
                color: #333;
                font-size: 1.1em;
            }

            .btn-purchase {
                display: block;
                margin: 40px auto 80px auto;
                font-size: 1.75em;
            }

        </style>

    </body>
</html>
