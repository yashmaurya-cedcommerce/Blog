<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resonance</title>



    <link rel="stylesheet" href="style.css">


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!-- font awesome cdn  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google font link  -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Ubuntu&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">

    <!-- roboto font link  -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">


    <!-- ajax cdn link  -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        .headings {
            font-family: 'Bebas Neue', cursive;
        }

        .main_text
        {
            font-family: 'Roboto Condensed', sans-serif;
        }

        /* multiple tab css  */

        body {
            padding: 0;
            margin: 0;
            background-color: #eee;
            /* background-image: url('floating_notes.png'); */
            }
            .border-grey {
            border: 1px solid;
            border-end-start-radius: 5px;
            border-end-end-radius: 5px;
            border-top: none;
            border-color: #dee2e6;
            }
            .active {
            background-color: white;
            }
            #myTab {
            background-color: #dee2e6;
            }
            .nav-link {
            color: black;
            font-weight: bold;
            }


        /* card template css  */

        .testimonial-card .card-up {
        height: 120px;
        overflow: hidden;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        }

        .aqua-gradient {
        background: linear-gradient(40deg, #2096ff, #05ffa3) !important;
        }

        .testimonial-card .avatar {
        width: 120px;
        margin-top: -60px;
        overflow: hidden;
        border: 5px solid #fff;
        border-radius: 50%;
        }
        
        .sub_headings
        {
            font-family: 'League Gothic', sans-serif;
        }


        #add_new_blog_btn
        {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        td
        {
            height: 40px;
            /* border: 2px solid black; */
        }

        .td_medium
        {
            width: 380px;
            border: 2px solid black;
        }

        .td_large
        {
            width: 650px;
            height: 300px;
            border: 2px solid black
        }

        .labels
        {
            font-weight: bolder;
            width:100px;
        }

         @import url('https://fonts.googleapis.com/css?family=Nunito:400,600,700');

        


        .glow-on-hover {
            /* width: 220px; */
            /* height: 50px; */
            border: none;
            outline: none;
            color: black;
            /* background: white; */
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 14px;
            /* background-color:white; */
            
            
        }

        .glow-on-hover:before {
            content: '';
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
            position: absolute;
            top: -2px;
            left:-2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            transition: opacity .3s ease-in-out;
            border-radius: 10px;
        }

        .glow-on-hover:active {
            color: black;
        }

        .glow-on-hover:active:after {
            background: transparent;
        }

        .glow-on-hover:hover:before {
            opacity: 1;
        }

        .glow-on-hover:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: white;
            left: 0;
            top: 0;
            border-radius: 10px;
        }

        @keyframes glowing {
            0% { background-position: 0 0; }
            50% { background-position: 400% 0; }
            100% { background-position: 0 0; }
        }

        #profile_li:hover 
        {
            cursor: pointer;
            background: black;
            color:white;
            opacity: 90%;
            border-radius: 8px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        /* .blog_thumbnail
        {
            transition: width 2s, height 4s;
        } */

        .blog_thumbnail:hover
        {
            cursor: pointer; 
            /* opacity: 85%; */
            /* filter: blur(1px); */
            -ms-transform: scale(0.5); /* IE 9 */
            -webkit-transform: scale(0.5); /* Safari 3-8 */
            transform: scale(0.9);
            /* display: inline-block; */
        }

        /* .thumbnail_btn
        {
            display: none;
        }

        .thumbnail_section:hover + .thumbnail_btn
        {
            display: block;
        } */

    </style>


</head>

<body>


    <!-- navbar  -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#"><i class="fa-brands fa-napster fa-2x"></i></a>
            <!-- Search form -->
            <form class="input-group" style="width: 400px">
                <input type="search" class="form-control" placeholder="Search an Item" aria-label="Search" />
                <button class="btn btn-outline-dark" type="button" data-mdb-ripple-color="dark" style="padding: .45rem 1.5rem .35rem;">
                    Search
                </button>
            </form>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav ms-auto">
                    
                    <li class="nav-item dropdown">
                        <!-- <a class="nav-link d-flex flex-column text-center" aria-current="page" href="#"><i class="fas fa-user-friends fa-lg"></i></a> -->
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-gear mt-2" style="color:black; font-size:20px;"></i>
                        </button>

                        <ul class="dropdown-menu" style="font-size:12px;" id="drop_down_ul">
                            <li><a class="dropdown-item" href="home.php">Home</a></li>
                            <?php 
                                if(isset($_SESSION['user_name']))
                                {
                            ?>
                                <li><a class="dropdown-item profile" href="my_blogs.php" style="text-decoration:none;">My Blogs</a></li>
                                <li><a class="dropdown-item sign_out_btn" href="" >Sign Out</a></li>
                            <?php
                                }
                                else
                                {
                            ?>
                                <li><a class="dropdown-item" href="login.php" >Sign In</a></li>
                            <?php
                                }
                            ?>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#about_us_div">About Us</a></li>
                        </ul>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link active d-flex flex-column text-center" aria-current="page" href="#"><i class="fas fa-home fa-lg mt-3 mx-1" style="color:black;"></i></a>
                    </li>

                    <li class="nav-item profile" id="profile_li"><a href="my_blogs.php" style="text-decoration:none;">
                        <h6 class="mt-3 mx-2"><i class="fa-solid fa-user-check"></i>
                        <?php
                            echo strtok($_SESSION['user_name'], " ");
                        ?>
                        </h6></a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>

    <!-- Navbar -->


    <div class='d-flex justify-content-center headings pt-3 pb-1 text-light' style="background-color:black;">
        
        <h3>Resonance</h3>

    </div>

    <div class="container-fluid row d-flex justify-content-center p-5 mx-0" style="background-image: url('/images/main_banner5.jpg');">
        


        <div class="col-sm-12 col-md-12 headings text-light" style="text-align:center; background-color:black; opacity:90%; border-radius : 10px;">
            <h2 class="my-3" style="text-shadow: 1px 1px #919191; letter-spacing:1px; ">"The music is not in the notes, but in the silence between."</h2>
            <h3 class="my-3" style="text-shadow: 1px 1px #919191;">- Mozart</h3>
            <!-- <h1 class="my-5" style="text-shadow: 1px 2px #919191;">- More than just genres</h1>
            <h1 class="my-5" style="text-shadow: 1px 2px #919191;">- More than just arists</h1> -->

            <h4 class="my-5 sub_headings" style="letter-spacing:2px;"> Resonance helps you connect with a community that resonates with your music taste, views and opinions! </h4>
        </div>

        <div class="container-fluid my-3" id="add_blog_div" style="text-align:center;">
            <?php if($_SESSION['approved'] == 'yes' && $_SESSION['role'] != 'reader')
            {
                ?>
            <button type="button" class="btn pt-3 glow-on-hover" id="add_new_blog_btn" style="background-color:#e2e4e3; color:black;" data-bs-toggle="modal" data-bs-target="#add_blog_modal"><h4 class="headings">+ Add a New Blog</h4></button>
            <?php
            }
            else if($_SESSION['approved'] == 'no' && $_SESSION['role'] != 'reader')
            {
            ?>
            <div class="alert alert-danger" role="alert" style="font-weight:bold;">
                *You are no longer an approved writer (Your blogs are removed)
            </div>
            <?php
            }
            
            ?>
        </div>
    </div>


    


    <div class="container-fluid mt-4">


        <ul class="m-0 nav nav-fill nav-justified nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation"> <button class="active nav-link tab_btn" id="home-tab" data-bs-toggle="tab" data-bs-target="#modern" type="button" role="tab" aria-controls="home" aria-selected="true"> <i class="fas fa-home"></i><span> Modern </button></span> </li>
            <li class="nav-item" role="presentation"> <button class="nav-link tab_btn" id="profile-tab" data-bs-toggle="tab" data-bs-target="#retro" type="button" role="tab" aria-controls="profile" aria-selected="false"> <i class="fas fa-user-astronaut"></i><span> Retro </button></span> </li>
            <li class="nav-item" role="presentation"> <button class="nav-link tab_btn" id="messages-tab" data-bs-toggle="tab" data-bs-target="#indie" type="button" role="tab" aria-controls="messages" aria-selected="false"> <i class="far fa-envelope-open"></i><span> Indie <span></span></button> </li>
            <li class="nav-item" role="presentation"> <button class="nav-link tab_btn" id="settings-tab" data-bs-toggle="tab" data-bs-target="#alt" type="button" role="tab" aria-controls="settings" aria-selected="false"> <i class="fas fa-sliders-h"></i><span> Alt </span></span></button> </li>
        </ul>


        


        <div class="border-grey bg-white p-3 tab-content">


            <div class="tab-pane active" id="modern" role="tabpanel" aria-labelledby="home-tab">
                <p class='main_text my-4' style="font-weight:bold; letter-spacing:1px; font-size:18px;">In music, modernism is an aesthetic stance underlying the period of change and development in musical language that occurred around the turn of the 20th century, a period of diverse reactions in challenging and reinterpreting older categories of music.</p>


                <div class="row d-flex justify-content-center py-5 bg-dark" id="modern">
                    
                    <?php
                    include 'connection.php';

                    $sql = "SELECT * FROM `blogs` WHERE `category` = 'modern' AND `approved_blog` = 'yes';";
                    
                    $result = $dsn->query($sql);

                    $table = $result->fetchAll(PDO::FETCH_ASSOC);
                    $modern_txt = '';
                    foreach($table as $key=>$value)
                    {
                        $u_id =  $value['user_id'];

                        $sql2 = "SELECT * FROM `users` WHERE `user_id` = '$u_id';";
                        
                        $result2 = $dsn->query($sql2);

                        $table2 = $result2->fetchAll(PDO::FETCH_ASSOC);
                        if($table2[0]['approved'] == 'no')
                        {
                            continue;
                        }
                        $intro = substr($value['content'], 0,80);

                        $modern_txt .= '<section class="col mx-auto my-2 col-xs-6 col-sm-6 col-md-6 thumbnail_section" style="max-width: 29rem;">';

                        $modern_txt .= '<div class="card testimonial-card shadow-lg p-3 mb-5 bg-body rounded blog_thumbnail" id="'.$value['blog_id'].'" style="transition: transform .2s;">';
                        
                        $modern_txt .= '<div class="card-up">';

                        $modern_txt .= '<img src="'.$value['image'].'" class="img-fluid" alt="no image">';

                        $modern_txt .= '</div>';

                        $modern_txt .= '<div class="card-body text-center">';
                        
                        // $modern_txt .= '<button type="button" class="btn btn-primary thumbnail_btn">Read Blog</button>';

                        $modern_txt .= '<h4 class="card-title font-weight-bold">'.$value['title'].'</h4><hr>';

                        $modern_txt .= '<p><i class="fas fa-quote-left"></i>'.$intro.'..</p>';

                        $modern_txt .= '<h6>~ '.$table2[0]['username'].'</h6>';

                        // $b_id = $value['blog_id'];

                        // $_SESSION[$b_id] = $table2[0]['username'];
                        // $modern_txt .= '<h6>~ '.$b_id." written by ".$_SESSION[$b_id].'</h6>';

                        $modern_txt .= '</div></div>';
                        
                        $modern_txt .= '</section>';
                    }
                    echo $modern_txt;

                    ?>
                    
                    
                    
                    
                    
                </div>

            </div>

            <div class="tab-pane" id="retro" role="tabpanel" aria-labelledby="profile-tab">
            <p class='main_text my-4' style="font-weight:bold; letter-spacing:1px; font-size:18px;"> Retro Songs can be songs that capture an era from your youth or a pivotal time in your life. Often they can be that bubblegum pop you heard non-stop as a child. Retro Songs can make you relive a moment, a day, an evening, a summer, or even a lifetime.</p>


                <div class="row d-flex justify-content-center py-5 bg-dark"  id="retro">
        
                    <?php
                    include 'connection.php';

                    $sql = "SELECT * FROM `blogs` WHERE `category` = 'retro' AND `approved_blog` = 'yes';";
                    
                    $result = $dsn->query($sql);

                    $table = $result->fetchAll(PDO::FETCH_ASSOC);
                    $modern_txt = '';
                    foreach($table as $key=>$value)
                    {
                        $u_id =  $value['user_id'];

                        $sql2 = "SELECT * FROM `users` WHERE `user_id` = '$u_id'";
                        
                        $result2 = $dsn->query($sql2);

                        $table2 = $result2->fetchAll(PDO::FETCH_ASSOC);
                        if($table2[0]['approved'] == 'no')
                        {
                            continue;
                        }

                        $intro = substr($value['content'], 0,80);

                        $modern_txt .= '<section class="col mx-auto my-2 col-xs-6 col-sm-6 col-md-6" style="max-width: 29rem;">';

                        $modern_txt .= '<div class="card testimonial-card shadow-lg p-3 mb-5 bg-body rounded blog_thumbnail" id="'.$value['blog_id'].'" style="transition: transform .2s;">';
                        
                        $modern_txt .= '<div class="card-up">';

                        $modern_txt .= '<img src="'.$value['image'].'" class="img-fluid" alt="no image">';

                        $modern_txt .= '</div>';

                        $modern_txt .= '<div class="card-body text-center">';
                        
                        $modern_txt .= '<h4 class="card-title font-weight-bold">'.$value['title'].'</h4><hr>';

                        $modern_txt .= '<p><i class="fas fa-quote-left"></i>'.$intro.'..</p>';

                        $modern_txt .= '<h6>~ '.$table2[0]['username'].'</h6>';

                        $modern_txt .= '</div></div>';
                        
                        $modern_txt .= '</section>';
                    }
                    echo $modern_txt;

                    ?>
                </div>
            </div>

            <div class="tab-pane" id="indie" role="tabpanel" aria-labelledby="messages-tab">
            <p class='main_text my-4' style="font-weight:bold; letter-spacing:1px; font-size:18px;">Independent music (also commonly known as indie music or simply indie) is music that is produced independently from commercial record labels or their subsidiaries, a process that may include an autonomous, do-it-yourself approach to recording and publishing.</p>


                <div class="row d-flex justify-content-center py-5 bg-dark" id="indie">

                    <?php
                    include 'connection.php';

                    $sql = "SELECT * FROM `blogs` WHERE `category` = 'indie' AND `approved_blog` = 'yes';";
                    
                    $result = $dsn->query($sql);

                    $table = $result->fetchAll(PDO::FETCH_ASSOC);
                    $modern_txt = '';
                    foreach($table as $key=>$value)
                    {
                        $u_id =  $value['user_id'];

                        $sql2 = "SELECT * FROM `users` WHERE `user_id` = '$u_id'";
                        
                        $result2 = $dsn->query($sql2);

                        $table2 = $result2->fetchAll(PDO::FETCH_ASSOC);
                        if($table2[0]['approved'] == 'no')
                        {
                            continue;
                        }

                        $intro = substr($value['content'], 0,80);

                        $modern_txt .= '<section class="col mx-auto my-2 col-xs-6 col-sm-6 col-md-6" style="max-width: 29rem;">';

                        $modern_txt .= '<div class="card testimonial-card shadow-lg p-3 mb-5 bg-body rounded blog_thumbnail" id="'.$value['blog_id'].'" style="transition: transform .2s;">';
                        
                        $modern_txt .= '<div class="card-up">';

                        $modern_txt .= '<img src="'.$value['image'].'" class="img-fluid" alt="no image">';

                        $modern_txt .= '</div>';

                        $modern_txt .= '<div class="card-body text-center">';
                        
                        $modern_txt .= '<h4 class="card-title font-weight-bold">'.$value['title'].'</h4><hr>';

                        $modern_txt .= '<p><i class="fas fa-quote-left"></i>'.$intro.'..</p>';

                        $modern_txt .= '<h6>~ '.$table2[0]['username'].'</h6>';

                        $modern_txt .= '</div></div>';
                        
                        $modern_txt .= '</section>';
                    }
                    echo $modern_txt;

                    ?>
                </div>
            </div>

            <div class="tab-pane" id="alt" role="tabpanel" aria-labelledby="settings-tab">
            <p class='main_text my-4' style="font-weight:bold; letter-spacing:1px; font-size:18px;">Music that is produced by performers who are outside the musical mainstream, that is typically regarded as more eclectic, original, or challenging than most popular music (such as conventional rock, pop, or country), and that is often distributed by independent record labels.</p>


                <div class="row d-flex justify-content-center py-5 bg-dark" id="alt">

                    <?php
                    include 'connection.php';

                    $sql = "SELECT * FROM `blogs` WHERE `category` = 'alt' AND `approved_blog` = 'yes';";
                    
                    $result = $dsn->query($sql);

                    $table = $result->fetchAll(PDO::FETCH_ASSOC);
                    $modern_txt = '';
                    foreach($table as $key=>$value)
                    {
                        $u_id =  $value['user_id'];

                        $sql2 = "SELECT * FROM `users` WHERE `user_id` = '$u_id'";
                        
                        $result2 = $dsn->query($sql2);

                        $table2 = $result2->fetchAll(PDO::FETCH_ASSOC);
                        if($table2[0]['approved'] == 'no')
                        {
                            continue;
                        }

                        $intro = substr($value['content'], 0,80);

                        $modern_txt .= '<section class="col mx-auto my-2 col-xs-6 col-sm-6 col-md-6" style="max-width: 29rem;">';

                        $modern_txt .= '<div class="card testimonial-card shadow-lg p-3 mb-5 bg-body rounded blog_thumbnail" id="'.$value['blog_id'].'" style="transition: transform .2s;">';
                        
                        $modern_txt .= '<div class="card-up">';

                        $modern_txt .= '<img src="'.$value['image'].'" class="img-fluid" alt="no image">';

                        $modern_txt .= '</div>';

                        $modern_txt .= '<div class="card-body text-center">';
                        
                        $modern_txt .= '<h4 class="card-title font-weight-bold">'.$value['title'].'</h4><hr>';

                        $modern_txt .= '<p><i class="fas fa-quote-left"></i>'.$intro.'..</p>';

                        $modern_txt .= '<h6>~ '.$table2[0]['username'].'</h6>';

                        $modern_txt .= '</div></div>';
                        
                        $modern_txt .= '</section>';
                    }
                    echo $modern_txt;

                    ?>
                </div>
            </div>

        </div>





        <!-- <div class="container-fluid"> -->
            <div class="row mt-5 p-5" style="background-color:black;" id="about_us_div">
                <div class="col col-xs-6 col-sm-6 col-md-6">
                    <div class="main_text" style="font-weight:bold;">
                        <h1 style="background-image: url(images/main_banner5.jpg); color: white; padding: 5% 0% 3% 5%; letter-spacing:2px;" class="headings">About Us</h1>
                        <p style='font-weight:lighter; color:white;' class="mt-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores autem soluta quo dolores minima cum impedit, consectetur quisquam quasi sapiente minus perferendis iure facere et at, ex nesciunt blanditiis sequi? Earum quos, consequatur recusandae facilis nemo modi rem error veniam laboriosam. Aspernatur, nulla. Nulla maxime atque asperiores sapiente, tempora eveniet in nostrum repellat dolores!</p>
                        <p style='font-weight:lighter; color:white;'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, ea eveniet! Placeat consequatur, vel quasi et quis doloremque aliquid nobis dolore dolorem sit, recusandae amet itaque accusamus laborum a numquam eos. In?</p>
                        
                    </div>
                </div>


                <div class="col col-xs-6 col-sm-6 col-md-6">
                    <img src="/images/about_us_img.webp" class="img-fluid" alt="no image">
                </div>
            </div>
        <!-- </div> -->



        <div class="row  p-5" style="background-image:url('/images/main_banner5.jpg'); color:white;">



            <!-- Carousel -->
            <div id="demo1" class="carousel slide col-6" data-bs-ride="carousel" >

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo1" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo1" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo1" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/carousel1.jpg" alt="Los Angeles" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/images/carousel3.jpg" alt="Chicago" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/images/carousel1.jpg" alt="New York" class="d-block w-100">
                </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo1" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </button>
            </div>


            <div class="col-6 main_text p-4" style="background-color:black; opacity:90%; border-radius : 20px;">
                <h2>Remembering - <b>'The Beatles'</b></h2>
                <p style="font-weight:bold;">
                    Over the 1960s as a whole, the Beatles were the dominant youth-centred pop act on the sales charts. They broke numerous sales and attendance records, many of which they have or had maintained for decades, and continue to enjoy a canonised status unprecedented for popular musicians.
                </p>
                <p style="font-weight:bold;">
                    There will never, ever be any group of fans as legendary and as sweetly original as the Beatles' most devoted admirers, the Apple Scruffs.
                </p>
            </div>

        </div>

    </div>

    



    <div class="modal fade" id="add_blog_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-light" id="add_blog_heading">Create a New Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id='add_blog_form'>

                    
                </div>
                <div class="modal-footer bg-dark">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary" id="add_blog_btn" data-bs-dismiss="modal">Add Blog</button> -->
                </div>
                </div>
            </div>
    </div>


    

    

    <footer class="bg-dark text-center text-lg-start text-white mt-5">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row mt-4">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">See other books</h5>

                <ul class="list-unstyled mb-0">
                <li>
                    <a href="#!" class="text-white"><i class="fas fa-book fa-fw fa-sm me-2"></i>Bestsellers</a>
                </li>
                <li>
                    <a href="#!" class="text-white"><i class="fas fa-book fa-fw fa-sm me-2"></i>All books</a>
                </li>
                <li>
                    <a href="#!" class="text-white"><i class="fas fa-user-edit fa-fw fa-sm me-2"></i>Our authors</a>
                </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Execution of the contract</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="#!" class="text-white"><i class="fas fa-shipping-fast fa-fw fa-sm me-2"></i>Supply</a>
                </li>
                <li>
                    <a href="#!" class="text-white"><i class="fas fa-backspace fa-fw fa-sm me-2"></i>Returns</a>
                </li>
                <li>
                    <a href="#!" class="text-white"><i class="far fa-file-alt fa-fw fa-sm me-2"></i>Regulations</a>
                </li>
                <li>
                    <a href="#!" class="text-white"><i class="far fa-file-alt fa-fw fa-sm me-2"></i>Privacy policy</a>
                </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Publishing house</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="#!" class="text-white">The BookStore</a>
                </li>
                <li>
                    <a href="#!" class="text-white">123 Street</a>
                </li>
                <li>
                    <a href="#!" class="text-white">05765 NY</a>
                </li>
                <li>
                    <a href="#!" class="text-white"><i class="fas fa-briefcase fa-fw fa-sm me-2"></i>Send us a book</a>
                </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Write to us</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="#!" class="text-white"><i class="fas fa-at fa-fw fa-sm me-2"></i>Help in purchasing</a>
                </li>
                <li>
                    <a href="#!" class="text-white"><i class="fas fa-shipping-fast fa-fw fa-sm me-2"></i>Check the order status</a>
                </li>
                <li>
                    <a href="#!" class="text-white"><i class="fas fa-envelope fa-fw fa-sm me-2"></i>Join the newsletter</a>
                </li>
                </ul>
            </div>
            <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- End of .container -->





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="handler.js"></script>

    <script>
        var firstTabEl = document.querySelector('#myTab li:last-child a')
        var firstTab = new bootstrap.Tab(firstTabEl)

        firstTab.show()
    </script>


</body>

</html>