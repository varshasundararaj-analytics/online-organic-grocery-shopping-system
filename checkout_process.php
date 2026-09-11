<?php
session_start();

$host = "localhost:3307";
$username = "root";
$password = "";
$db = "livinfresh";

$con = mysqli_connect(
    $host,
    $username,
    $password,
    $db
);

if (!$con) {
    die(
        "Connection failed: "
        . mysqli_connect_error()
    );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Livin Fresh</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, Helvetica, sans-serif;
            background:#f4f7f1;
            color:#333;
            min-height:100vh;
        }

        /* TOP NAVIGATION */

        .checkout-nav{
            max-width:1000px;
            margin:0 auto;
            padding:24px 20px 10px;

            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:10px;
        }

        .checkout-nav-left,
        .checkout-nav-right{
            display:flex;
            gap:10px;
        }

        .nav-btn{
            display:inline-block;
            padding:9px 15px;

            text-decoration:none;
            color:#333;

            background:white;
            border:1px solid #ddd;
            border-radius:5px;

            font-size:14px;
            font-weight:600;
        }

        .nav-btn:hover{
            background:#7faa3d;
            color:white;
        }

        .logout-btn{
            background:#333;
            color:white;
        }

        /* MAIN CHECKOUT AREA */

        .checkout-wrapper{
            max-width:1000px;
            margin:20px auto 50px;
            padding:0 20px;
        }

        .checkout-title{
            text-align:center;
            margin-bottom:25px;
        }

        .checkout-title h1{
            color:#2f6b2f;
            font-size:34px;
            margin-bottom:8px;
        }

        .checkout-title p{
            color:#666;
            font-size:15px;
        }

        .checkout-card{
            max-width:650px;
            margin:0 auto;

            background:white;

            padding:35px;

            border-radius:10px;

            box-shadow:
                0 4px 16px rgba(0,0,0,0.10);
        }

        .form-group{
            margin-bottom:20px;
        }

        label{
            display:block;
            margin-bottom:7px;

            font-size:15px;
            font-weight:600;

            color:#333;
        }

        input[type="text"],
        input[type="email"]{
            width:100%;

            padding:12px 13px;

            border:1px solid #ccc;
            border-radius:5px;

            font-size:15px;

            outline:none;
        }

        input[type="text"]:focus,
        input[type="email"]:focus{
            border-color:#7faa3d;
        }

        .place-order-btn{
            width:100%;

            padding:13px;

            border:none;
            border-radius:6px;

            background:#7faa3d;
            color:white;

            font-size:16px;
            font-weight:700;

            cursor:pointer;
        }

        .place-order-btn:hover{
            background:#65922e;
        }

        /* MOBILE */

        @media(max-width:600px){

            .checkout-nav{
                flex-direction:column;
                align-items:flex-start;
            }

            .checkout-nav-right{
                flex-wrap:wrap;
            }

            .checkout-card{
                padding:25px 20px;
            }

            .checkout-title h1{
                font-size:28px;
            }
        }

    </style>

</head>


<body>

    <div class="checkout-nav">

        <div class="checkout-nav-left">

            <a
                href="Cart.php"
                class="nav-btn"
            >
                ← Back to Cart
            </a>

        </div>


        <div class="checkout-nav-right">

            <a
                href="home2.php"
                class="nav-btn"
            >
                Home
            </a>

            <a
                href="logout.php"
                class="nav-btn logout-btn"
            >
                Logout
            </a>

        </div>

    </div>


    <div class="checkout-wrapper">

        <div class="checkout-title">

            <h1>Billing Address</h1>

            <p>
                Enter your delivery details to complete your order.
            </p>

        </div>


        <div class="checkout-card">

            <form
                action="checkout.php"
                method="POST"
            >

                <div class="form-group">

                    <label for="firstname">
                        First Name
                    </label>

                    <input
                        id="firstname"
                        type="text"
                        name="firstname"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="address">
                        Address
                    </label>

                    <input
                        id="address"
                        type="text"
                        name="address"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="city">
                        City
                    </label>

                    <input
                        id="city"
                        type="text"
                        name="city"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="state">
                        State
                    </label>

                    <input
                        id="state"
                        type="text"
                        name="state"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="zip">
                        Zip Code
                    </label>

                    <input
                        id="zip"
                        type="text"
                        name="zip"
                        required
                    >

                </div>


                <input
                    type="submit"
                    class="place-order-btn"
                    value="Place Order"
                >

            </form>

        </div>

    </div>

</body>

</html>