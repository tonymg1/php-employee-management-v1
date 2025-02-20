<!-- TODO Application entry point. Login view -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <title>Login</title>

    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/" />
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />

    <script src="./assets/js/index.js" defer></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, 0.1);
            border: solid rgba(0, 0, 0, 0.15);
            border-width: 1px 0;
            box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
                inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -0.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>

<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form id="login-form" method="post" action="./src/library/loginController.php?action=login">
            <img class="mb-4" src="./assets/brand/working-vector.ico" alt="" width="72" height="57" />

            <h1 class="h3 mb-3 fw-normal">Please login</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="user-email" required />
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="user-password" required />
                <label for="floatingPassword">Password</label>
            </div>

            <input class="w-100 btn btn-lg btn-primary" type="submit" value="Login" name="login" />

            <?php
                if (isset($_GET["action"]) && $_GET["action"] == "loginError") {
                    ?>
                    <div class="alert alert-danger incorrect-credentials-alert" role="alert">
                        Incorrect credentials
                    </div>
                    <?php
                }
            ?>

            <p class="mt-5 mb-3 text-muted">&copy; 2022 Squad Hamilton, Inc</p>
        </form>
    </main>
</body>

</html>