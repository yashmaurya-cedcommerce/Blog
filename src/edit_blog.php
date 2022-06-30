<?php session_start() ?>

<?php
// echo "<pre>";
// var_dump($_SESSION['blog_details']);
// echo "</pre>";
?>

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


    <!-- ajax cdn link  -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        .headings {
            font-family: 'Bebas Neue', cursive;
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

<body id="body-pd">



    <header class="header" id="header">
           

        <!-- navbar  -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width:inherit; padding-top:0px; padding-bottom:0px;">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Navbar brand -->
                <div class="header_toggle mx-3"> <i class='bx bx-menu' id="header-toggle"></i> </div>
                <!-- <div class="header_toggle mx-3"> <i class='bx bx-menu' id="header-toggle"></i> </div>   -->
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
                            <!-- <a class="nav-link d-flex flex-column text-center" aria-current="page" href="#"><i class="fas fa-user-friends fa-lg"></i></a> -->
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-gear mt-2" style="color:black; font-size:20px;"></i>
                            </button>

                            <ul class="dropdown-menu" style="font-size:12px;" id="drop_down_ul">
                                <li><a class="dropdown-item" href="home.php">Home</a></li>
                                <?php
                                if (isset($_SESSION['user_name'])) {
                                ?>
                                    <li><a class="dropdown-item" href="my_blogs.php">My Blogs</a></li>
                                    <li><a class="dropdown-item sign_out_btn" href="">Sign Out</a></li>
                                <?php
                                } else {
                                ?>
                                    <li><a class="dropdown-item" href="login.php">Sign In</a></li>
                                <?php
                                }
                                ?>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#about_us_div">About Us</a></li>
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
                

            <?php if(isset($_SESSION['user_name']))
            {
            ?>
            <a href="my_blogs.php" class="nav_link profile"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">My Blogs</span> </a> </div>
            
            </div> <a href="" class="nav_link sign_out_class"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            <?php 
            }
            else if(!(isset($_SESSION['user_name'])))
            {
            ?>
            </div> <a href="login.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign In</span> </a>
            <?php
            }
            else if($_SESSION['role'] == 'reader' || $_SESSION['approved'] == 'no')
            {
            ?>
                </div> <a href="" class="nav_link sign_out_class"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            <?php
            }
            ?>
        </nav>
    </div>




    <!--Container Main start-->
    <div class="height-100 bg-light">

        

        <div class='d-flex justify-content-center headings pt-3 pb-1 text-light' style="background-color:black;">

            <h3>Resonance</h3>
            
        </div>
        
        <div class="d-flex justify-content-center headings mt-3">
            <h3>Edit Your Blog</h3>
            
        </div>


        <?php 
        // echo "<pre>";
        // var_dump($_SESSION['blog_details']); 
        // echo "</pre>"; 
        ?>

        <div class="d-flex justify-content-center mt-3">
            
        <form action = "edit_server.php" method="post" enctype="multipart/form-data" style="width:100%;">
            <table style="width:100%;">
                <tr>
                    <td>
                        <label for="edited_title" class="headings">
                            <h3>Title</h3>
                        </label>
                    </td>
                    <td>
                        <input type="text" id="edited_title" name="edited_title" value="<?php echo $_SESSION['blog_details'][0]['title'];?>" style="width:100%;" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="edited_content" class="headings">
                            <h3>Content</h3>
                        </label>
                    </td>
                    <td>
                        <textarea type="text" id="edited_content" name="edited_content" style="width:100%; height:400px;"><?php echo $_SESSION['blog_details'][0]['content']?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="edited_category" class="headings">
                            <h3>Category</h3>
                        </label>
                    </td>
                    <td>
                        <select id="edited_category" name="edited_category">
                            <option value="modern">Modern</option>
                            <option value="retro">Retro</option>
                            <option value="indie">Indie</option>
                            <option value="alt">Alt</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="edited_image" class="headings">
                            <h3>Image</h3>
                        </label>
                    </td>
                    <td>
                        <input type="file" name="edited_image" id="edited_image">
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <input type="submit" value="Save Changes" name="submit" class="btn btn-primary headings">
                    </td>
                </tr>
            </table>
        </form>    

        </div>
        
        
    </div>

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

