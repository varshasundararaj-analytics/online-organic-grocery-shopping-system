<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Livin Fresh</title>

    <link rel="stylesheet" href="css/home.css">

</head>

<body background="Homepage.png">

    <body>

    <div class="home-wrapper">

        <header class="home-header">

            <div class="brand-area">

                <img
                    src="images/livin logo.jpeg"
                    alt="Livin Fresh Logo"
                    class="home-logo"
                >

                <div class="brand-text">

                    <h1>LIVIN FRESH</h1>

                    <p>
                        Fresh • Organic • Healthy
                    </p>

                </div>

            </div>


            <nav class="home-nav">

                <a href="home2.php">
                    Home
                </a>

                <a href="loginindex.php">
                    Login
                 </a>

                <a href="about.php">
                    About
                </a>

                <a href="Gallery.php">
                    Gallery
                </a>

                <a href="Cart.php">
                    Cart
                </a>

                <a href="contact.php">
                    Contact
                </a>

                <a
                    href="logout.php"
                    class="logout-btn"
                >
                    Logout
                </a>

            </nav>

        </header>


        <main class="home-content">

            <div class="home-text">

                <p class="welcome">
                    Welcome
                </p>

                <h2>
                    Giving Your Health
                    <br>
                    A New Intake!
                </h2>

                <p class="quote">

                    “Eating healthy food fills your body with
                    energy and nutrients.

                    <br><br>

                    Imagine your cells smiling back at you and saying:
                    “Thank you!”

                </p>

                <a
                    href="Gallery.php"
                    class="explore-btn"
                >
                    Explore Products
                </a>

            </div>

        </main>

    </div>


    <script
        src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1">
    </script>


    <df-messenger
        intent="WELCOME"
        chat-title="OOGSS-Chatbot"
        agent-id="d8f57fd5-9e99-49dd-9d42-c78a21d2db41"
        language-code="en">
    </df-messenger>


</body>
</html>