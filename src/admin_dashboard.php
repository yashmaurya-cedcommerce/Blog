<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <link rel="stylesheet" href="style.css">


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" crossorigin="anonymous">



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
            /* letter-spacing: 1px; */
        }

        .main_text
        {
            font-family: 'Roboto Condensed', sans-serif;
        }

        .canvasjs-chart-canvas
        {
            border: 4px solid black;
            width: inherit;
            /* height: 400px; */
        }

        .canvasjs-chart-toolbar
        {
            display:none;
        }

        @media screen and (max-width: 815px) 
        {
            #chartContainer2{
                display:none;
            }
        }

        .canvasjs-chart-container
        {
            width: 100%;
            height: 410px;
        }

        .blog_table_record:hover
        {
            cursor:pointer;
        }


        .top_user_thumnail
        {
            transition: transform .2s;
        }

        .top_user_thumnail:hover
        {
            transform: scale(1.3);
            cursor: pointer;
        }



        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

            :root {
                --header-height: 3rem;
                --nav-width: 68px;
                --first-color: black;
                --first-color-light: #AFA5D9;
                --white-color: #F7F6FB;
                --body-font: 'Nunito', sans-serif;
                --normal-font-size: 1rem;
                --z-fixed: 100
            }

            *,
            ::before,
            ::after {
                box-sizing: border-box
            }

            body {
                position: relative;
                margin: var(--header-height) 0 0 0;
                padding: 0 1rem;
                font-family: var(--body-font);
                font-size: var(--normal-font-size);
                transition: .5s
            }

            a {
                text-decoration: none
            }

            .header {
                width: 100%;
                height: var(--header-height);
                position: fixed;
                top: 0;
                left: 0;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 0 1rem;
                background-color: var(--white-color);
                z-index: var(--z-fixed);
                transition: .5s
            }

            .header_toggle {
                color: var(--first-color);
                font-size: 1.5rem;
                cursor: pointer
            }

            .header_img {
                width: 35px;
                height: 35px;
                display: flex;
                justify-content: center;
                border-radius: 50%;
                overflow: hidden
            }

            .header_img img {
                width: 40px
            }

            .l-navbar {
                position: fixed;
                top: 0;
                left: -30%;
                width: var(--nav-width);
                height: 100vh;
                background-color: var(--first-color);
                padding: .5rem 1rem 0 0;
                transition: .5s;
                z-index: var(--z-fixed)
            }

            .nav {
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                overflow: hidden
            }

            .nav_logo,
            .nav_link {
                display: grid;
                grid-template-columns: max-content max-content;
                align-items: center;
                column-gap: 1rem;
                padding: .5rem 0 .5rem 1.5rem
            }

            .nav_logo {
                margin-bottom: 2rem
            }

            .nav_logo-icon {
                font-size: 1.25rem;
                color: var(--white-color)
            }

            .nav_logo-name {
                color: var(--white-color);
                font-weight: 700
            }

            .nav_link {
                position: relative;
                color: var(--first-color-light);
                margin-bottom: 1.5rem;
                transition: .3s
            }

            .nav_link:hover {
                color: var(--white-color)
            }

            .nav_icon {
                font-size: 1.25rem
            }

            .show {
                left: 0
            }

            .body-pd {
                padding-left: calc(var(--nav-width) + 1rem)
            }

            .active {
                color: var(--white-color)
            }

            .active::before {
                content: '';
                position: absolute;
                left: 0;
                width: 2px;
                height: 32px;
                background-color: var(--white-color)
            }

            .height-100 {
                height: 100vh
            }

            @media screen and (min-width: 768px) {
                body {
                    margin: calc(var(--header-height) + 1rem) 0 0 0;
                    padding-left: calc(var(--nav-width) + 2rem)
                }

                .header {
                    height: calc(var(--header-height) + 1rem);
                    padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
                }

                .header_img {
                    width: 40px;
                    height: 40px
                }

                .header_img img {
                    width: 45px
                }

                .l-navbar {
                    left: 0;
                    padding: 1rem 1rem 0 0
                }

                .show {
                    width: calc(var(--nav-width) + 156px)
                }

                .body-pd {
                    padding-left: calc(var(--nav-width) + 188px)
                }
            }
    
    
    
    
    </style>

</head>

<body id="body-pd" style="background-color:#eee;">



    <header class="header" id="header">
         
        
        <!-- navbar  -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width:inherit; padding-top:0px; padding-bottom:0px;">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Navbar brand -->
                <div class="header_toggle mx-3"> <i class='bx bx-menu' id="header-toggle"></i> </div>  
                <a class="navbar-brand" href="home.php"><i class="fa-brands fa-napster fa-2x"></i></a>
                <!-- Search form -->
                

                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left links -->
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item dropdown">
                            
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-gear mt-2" style="color:black; font-size:20px;"></i>
                            </button>

                            <ul class="dropdown-menu" style="font-size:12px;" id="drop_down_ul">
                                <li><a class="dropdown-item" href="home.php">Home</a></li>
                                <?php
                                if (isset($_SESSION['user_name'])) {
                                ?>
                                    <!-- <li><a class="dropdown-item" href="my_blogs.php">My Blogs</a></li> -->
                                    <li><a class="dropdown-item sign_out_btn" href="">Sign Out</a></li>
                                <?php
                                } else {
                                ?>
                                    <li><a class="dropdown-item" href="login.php">Sign In</a></li>
                                <?php
                                }
                                ?>
                                <li>
                                    <!-- <hr class="dropdown-divider"> -->
                                </li>
                                <!-- <li><a class="dropdown-item" href="#about_us_div">About Us</a></li> -->
                            </ul>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link active d-flex flex-column text-center" aria-current="page" href="home.php"><i class="fas fa-home fa-lg mt-3 mx-1" style="color:black;"></i></a>
                        </li>

                        <li class="nav-item" id="profile_li"><a href="my_blogs.php">
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

    </header>


    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Resonance</span> </a>
                <div class="nav_list"> <a href="home.php" class="nav_link "> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Home</span> </a>
                

                </div> <a href="" class="nav_link sign_out_class"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>




    <!--Container Main start-->
    <div class="height-100">

        

        <div class='d-flex justify-content-center headings pt-3 pb-1 text-light' style="background-color:black;">

            <h3>Resonance</h3>

        </div>

        <div class="row justify-content-center mt-3" style="text-align:center;">




            <div class="col col-sm-0 col-md-4">

                <?php

                include 'connection.php';
                        
                        try
                        {
                            $sql = "SELECT COUNT(comment_id), blog_id FROM comments GROUP BY blog_id ORDER BY COUNT(comment_id) DESC LIMIT 5;";

                            $result = $dsn->query($sql);

                            $table = $result->fetchAll(PDO::FETCH_ASSOC);

                                                        
                        }

                        catch(PDOException $e)
                        {
                            echo $e->getMessage();
                        }

                ?>

                <div id="chartContainer2" class="mt-2"></div>
                    <?php
                        $order_dataPoints = array();
                        // var_dump($orders_table); die;
                        // var_dump($product_table); die;
                        $order_dataPoints = array(
                            array("x"=> $table[0]['blog_id'], "y"=>  $table[0]['COUNT(comment_id)']),
                            array("x"=> $table[1]['blog_id'], "y"=>  $table[1]['COUNT(comment_id)']),
                            array("x"=> $table[2]['blog_id'], "y"=>  $table[2]['COUNT(comment_id)']),
                            array("x"=> $table[3]['blog_id'], "y"=>  $table[3]['COUNT(comment_id)']),
                            array("x"=> $table[4]['blog_id'], "y"=>  $table[4]['COUNT(comment_id)']),
                            // var_dump($dataPoints);  die;
                        );
                        
                            
                    ?>
                    
                    <script>
                        window.onload = function () {

                        
                        var chart2 = new CanvasJS.Chart("chartContainer2", {
                            animationEnabled: true,
                            exportEnabled: true,
                            theme: "light1", // "light1", "light2", "dark1", "dark2"
                            title:{
                                text: "Trending Blogs"
                            },
                            axisY:{
                                includeZero: true
                            },
                            data: [{
                                type: "area", //change type to bar, line, area, pie, etc
                                indexLabel: "{y}", //Shows y value on all Data Points
                                indexLabelFontColor: "#5A5757",
                                indexLabelPlacement: "outside",   
                                dataPoints: <?php echo json_encode($order_dataPoints, JSON_NUMERIC_CHECK); ?>
                            }]
                        });
                        chart2.render();
                        
                        }
                    </script>

                </div>



           

            <div class="col col-xs-12 col-sm-12 col-md-8">

                <?php
                    include 'connection.php';
                    
                    try
                    {
                        $sql = "SELECT * FROM `blogs`";
 
                        $result = $dsn->query($sql);
 
                        $table = $result->fetchAll(PDO::FETCH_ASSOC);

                        $_SESSION['total_blogs'] = count($table);
                        
                        $sql = "SELECT * FROM `blogs` WHERE `approved_blog`  = 'yes'";

                        $result = $dsn->query($sql);

                        $table = $result->fetchAll(PDO::FETCH_ASSOC);

                        $_SESSION['total_approved_blogs'] = count($table);

                    }
                    catch(PDOException $e)
                    {
                        echo $e->getMessage();
                    }
                ?>
                <div>
                    <h3 class="headings mt-2">Total Blogs : <?php echo $_SESSION['total_blogs']; ?></h3>
                    
                </div>

                <div class="d-grid gap-2">

                <button class="btn main_text" id="view_blogs_btn" type="button" style="background-color:#4f81bc; color:white;">View All</button>

                </div>
                 
                <div>
                    <h5 class="headings mt-5" style="float:left;">Total Approved Blogs : <?php echo $_SESSION['total_approved_blogs']; ?></h5>

                    

                    <h5 class="headings mt-5" style="float:right;">Total Unapproved Blogs : <?php echo ($_SESSION['total_blogs']-$_SESSION['total_approved_blogs']); ?></h5>
                </div>


                <?php 
                
                    include 'connection.php';
                    
                    try
                    {
                        $sql = "SELECT COUNT(comments.comment_id), comments.blog_id, blogs.title FROM comments INNER JOIN blogs on comments.blog_id = blogs.blog_id GROUP BY comments.blog_id ORDER BY COUNT(comments.comment_id) DESC LIMIT 5";

                        $result = $dsn->query($sql);

                        $table = $result->fetchAll(PDO::FETCH_ASSOC);

                        // echo "<pre>";
                        // var_dump($table);
                        // echo "</pre>";


                    }
                    catch(PDOException $e)
                    {
                        echo $e->getMessage();
                    }

                ?>

                <div>
                    <h3 class="headings mt-4">Top Trending Blogs</h3>
                    
                </div>

                <table style="width: 100%;" class="table table-dark table-hover main_text"><tr><th>Blog Name</th><th>Blog ID</th><th>Comments</th></tr>
            
                <?php 

                    $blog_txt = '';

                    foreach($table as $key=>$value)
                    {
                        $blog_txt .= '<tr><td>'.$value['title'].'</td><td>'.$value['blog_id'].'</td><td>'.$value['COUNT(comments.comment_id)'].'</td></tr>';
                    }

                    $blog_txt .= '</table>';

                    echo $blog_txt;
                ?>
                
                

            </div>

        </div>

        <div id="all_blogs_div" class="my-5">

            

        </div>

        <div id="top_users_div" class="mt-5">
            
            <?php

                include 'connection.php';

                try
                {
                    $sql = "SELECT COUNT(blogs.blog_id), blogs.user_id, users.username FROM blogs INNER JOIN users on blogs.user_id = users.user_id GROUP BY blogs.user_id ORDER BY COUNT(blogs.blog_id) DESC LIMIT 5";
                
                    $result = $dsn->query($sql);

                    $table = $result->fetchAll(PDO::FETCH_ASSOC);

                    // echo "<pre>";
                    // var_dump($table);
                    // echo "</pre>";

                }
                catch(PDOException $e)
                {
                    echo $e->getMessage();
                }
            ?>


            <div style="text-align:center;">
            
                <h4 class="headings my-3">Most Active Users</h4>

            
            </div>

            <div class="d-grid gap-2 mb-5">

                <button class="btn main_text show_all_users" type="button" style="color:white; background-color: #4f81bc;">Show All Users</button>

            </div>

            <div class="d-flex flex-row bd-highlight mb-3">            
            
            <?php

                $user_txt = '';
                
                foreach($table as $key=>$value)
                {
                    $user_txt .= '<div class="bd-highlight mx-2 main_text" style="font-size:14px; font-weight:bold;" >';
                    $user_txt .= '<div class="card testimonial-card shadow-lg p-3 mb-5 bg-body rounded">';        
                    $user_txt .= '<div class="card-body text-center">';
                    $user_txt .= '<img src = "/images/user.png" class="img-fluid top_user_thumnail" style="opacity:95%;" id="'.$value['user_id'].'">';
                    $user_txt .= '<table class="mx-auto">';
                    $user_txt .= '<tr><td>'.$value['username'].'</td></tr>';
                    $user_txt .= '<tr><td>Total Blogs : '.$value['COUNT(blogs.blog_id)'].'</td></tr>';
                    $user_txt .= '<tr><td>User ID : '.$value['user_id'].'</td></tr></table>';
                    $user_txt .= '</div>';
                    $user_txt .= '</div>';
                    $user_txt .= '</div>';
                }
                // $user_txt .= '';
                echo $user_txt;
            ?>
                                

            </div>


        </div>

        

        </div>


        


    </div>



    


        

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="handler.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
   
        const showNavbar = (toggleId, navId, bodyId, headerId) =>{
        const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        bodypd = document.getElementById(bodyId),
        headerpd = document.getElementById(headerId)
        
        // Validate that all variables exist
        if(toggle && nav && bodypd && headerpd){
        toggle.addEventListener('click', ()=>{
        // show navbar
        nav.classList.toggle('show')
        // change icon
        toggle.classList.toggle('bx-x')
        // add padding to body
        bodypd.classList.toggle('body-pd')
        // add padding to header
        headerpd.classList.toggle('body-pd')
        })
        }
        }
        
        showNavbar('header-toggle','nav-bar','body-pd','header')
        
        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')
        
        function colorLink(){
        if(linkColor){
        linkColor.forEach(l=> l.classList.remove('active'))
        this.classList.add('active')
        }
        }
        linkColor.forEach(l=> l.addEventListener('click', colorLink))
        
            // Your code to run since DOM is loaded and ready
        });
    </script>

    <!-- <script>
        var firstTabEl = document.querySelector('#myTab li:last-child a')
        var firstTab = new bootstrap.Tab(firstTabEl)

        firstTab.show()
    </script> -->
</body>

</html>