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


        /* form css  */

        .card-registration .select-input.form-control[readonly]:not([disabled]) 
        {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }
        .card-registration .select-arrow {
            top: 13px;
            }
    </style>

</head>

<body style="background-image : url('/images/main_banner5.jpg')">

    <div class='d-flex justify-content-center headings pt-4 pb-1 text-light' style="background-color:black;">
        <a class="navbar-brand" href="#"><i class="fa-brands fa-napster fa-2x mx-2"></i></a>
        <h3>Resonance</h3>
    </div>



    <!-- registration form  -->

    <section class="h-100">
        <div class="container py-3 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4" style="opacity:95%;">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="/images/weeknd.jpg"
                        alt="Sample photo" class="img-fluid"
                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                    </div>
                    <div class="col-md-7">
                    <div class="card-body p-md-5 text-black">
                        <h3 class="py-3 mb-5 text-uppercase headings text-light" style="text-align:center; background-color:black;">Become a part of our community</h3>

                        <div class="row headings">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <input type="text" id="first_name" class="form-control form-control-lg" />
                            <label class="form-label" for="first_name">First name</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <input type="text" id="last_name" class="form-control form-control-lg" />
                            <label class="form-label" for="last_name">Last name</label>
                            </div>
                        </div>
                        </div>

                        <div class="form-outline mb-4 headings">
                        <input type="email" id="email" class="form-control form-control-lg" />
                        <label class="form-label" for="email">E-mail Address</label>
                        </div>


                        <div class="row headings">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <input type="password" id="pass1" class="form-control form-control-lg" />
                            <label class="form-label" for="pass1">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <input type="password" id="pass2" class="form-control form-control-lg" />
                            <label class="form-label" for="pass2">Confirm Password</label>
                            </div>
                        </div>
                        </div>

                        
                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2 headings">

                        <h6 class="mb-0 me-4">Role : </h6>

                        <div class="form-check form-check-inline mb-0 me-4">
                            <input class="form-check-input" type="radio" name="role_radio" id="writer"
                            value="writer" />
                            <label class="form-check-label" for="writer">Writer</label>
                        </div>

                        <div class="form-check form-check-inline mb-0 me-4">
                            <input class="form-check-input" type="radio" name="role_radio" id="reader"
                            value="reader" />
                            <label class="form-check-label" for="reader">Reader</label>
                        </div>

                        </div>

                        <div><button type="button" class="btn btn-dark headings" style="font-size:23px;" id="sign_up_btn">Sign Up</button></div>

                        <div class="alert alert-danger headings my-3" id="registration_error" role="alert" style="display:none;">
                        
                        </div>

                        <div class="headings my-5"><h5>Already a Member? <a href="login.php">Sign In</a></h5>
                        
                    
                        <div class="headings my-5 text-secondary" style="font-size:12px;">*If you choose to provide us with your email address or any other personally identifiable information, we will use it only to send you our newsletter and other weekly updates*</div>

                        </div>

                        

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script src="handler.js"></script>
</body>
</html>