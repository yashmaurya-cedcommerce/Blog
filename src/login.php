<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="style.css">


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!-- font awesome cdn  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google font link  -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Ubuntu&display=swap" rel="stylesheet">


    <!-- ajax cdn link  -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <style>
        .headings {
            font-family: 'Bebas Neue', cursive;
        }
    </style>

</head>
<body style="background-image : url('/images/main_banner5.jpg')">

    

    <div class='d-flex justify-content-center headings pt-4 pb-1 text-light' style="background-color:black;">
        <a class="navbar-brand" href="#"><i class="fa-brands fa-napster fa-2x mx-2"></i></a>
        <h3>Resonance</h3>
        <a href="admin_login.php" style="width: 83%; text-align: right; text-decoration:none;" class="mt-2"><h5>Login as Admin</h5></a>
    </div>

    <div class="container">
        <div class="mx-auto my-5 p-4 headings" style="width:50%; text-align:center; color: white; background-color:black; opacity:90%; border-radius : 20px;">
            <h1>Sign In To Begin</h1>

            <form>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="email_id" class="form-control" />
                    <label class="form-label" for="email_id">Email address</label>
                </div>

                <div id="email_alert">
                    
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="password_id" class="form-control" />
                    <label class="form-label" for="password_id">Password</label>
                </div>
                
                <div id="password_alert">

                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                    </div>

                    <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="button" class="btn btn-primary btn-block mb-4" id="sign_in_btn">Sign in</button>

                <div id="credential_error_div">

                </div>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="signup.php">Register</a></p>
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                    </button>
                </div>
            </form>

        </div>
    </div>
   

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="handler.js"></script>
</body>
</html>