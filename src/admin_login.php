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
        <a href="login.php" style="width: 83%; text-align: right; text-decoration:none;" class="mt-2"><h5>Login as user</h5></a>
    </div>

    <div class="container">
        <div class="mx-auto my-5 p-4 headings" style="width:50%; text-align:center; color: white; background-color:black; opacity:90%; border-radius : 20px;">
            <h1 style="letter-spacing:2px;">Login as Admin</h1>

            <form>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="admin_email_id" class="form-control" />
                    <label class="form-label" for="admin_email_id">Email address</label>
                </div>

                

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="admin_password_id" class="form-control" />
                    <label class="form-label" for="admin_password_id">Password</label>
                </div>
                
                

                <!-- 2 column grid layout for inline styling -->
                

                <!-- Submit button -->
                <button type="button" class="btn btn-primary btn-block mb-4" id="admin_sign_in">Sign in</button>

                <div class="alert alert-danger headings my-3" id="admin_login_alert" role="alert" style="display:none;">
                        
                </div>

                
                </div>
            </form>

        </div>
    </div>
   

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="handler.js"></script>
</body>
</html>