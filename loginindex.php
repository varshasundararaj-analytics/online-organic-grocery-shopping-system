<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Livin Fresh</title>

    <link rel="stylesheet" href="loginstyle.css">
</head>

<body>

<div class="login-wrap">

    <div class="login-html">

        <input id="tab-1"
               type="radio"
               name="tab"
               class="sign-in"
               checked>

        <label for="tab-1" class="tab">
            Sign In
        </label>


        <input id="tab-2"
               type="radio"
               name="tab"
               class="sign-up">

        <label for="tab-2" class="tab">
            Sign Up
        </label>


        <div class="login-form">

            <!-- SIGN IN -->
            <div class="sign-in-htm">

                <form action="connect.php" method="POST">

                    <div class="form-group">

                        <label for="signin-username" class="label">
                            Username
                        </label>

                        <input id="signin-username"
                               type="text"
                               class="input"
                               name="username"
                               required>

                    </div>


                    <div class="form-group">

                        <label for="signin-password" class="label">
                            Password
                        </label>

                        <input id="signin-password"
                               type="password"
                               class="input"
                               name="password"
                               required>

                    </div>


                    <div class="form-group">

                        <input type="submit"
                               class="button"
                               value="Sign In">

                    </div>

                </form>

            </div>


            <!-- SIGN UP -->
            <div class="sign-up-htm">

                <form action="login.php" method="POST">

                    <div class="form-group">

                        <label for="signup-username" class="label">
                            Username
                        </label>

                        <input id="signup-username"
                               type="text"
                               class="input"
                               name="username"
                               required>

                    </div>


                    <div class="form-group">

                        <label for="signup-password" class="label">
                            Password
                        </label>

                        <input id="signup-password"
                               type="password"
                               class="input"
                               name="password"
                               required>

                    </div>


                    <div class="form-group">

                        <label for="signup-email" class="label">
                            Email Address
                        </label>

                        <input id="signup-email"
                               type="email"
                               class="input"
                               name="email"
                               required>

                    </div>


                    <div class="form-group">

                        <input type="submit"
                               class="button"
                               value="Sign Up">

                    </div>


                    <div class="hr"></div>

                    <div class="foot-lnk">

                        <label for="tab-1">
                            Already Member?
                        </label>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>