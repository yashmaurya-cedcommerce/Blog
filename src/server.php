<?php session_start();


// function display_blogs()
// {
//     $category = $_SESSION['blog_details'][0]['category'];
//     // echo $category;

//     $del_txt = '';
// }


    function display_all_users()
    {
        include 'connection.php';

        try
        {
            $sql = "SELECT * FROM `users` WHERE `role` != 'admin';";

            $result = $dsn->query($sql);

            $table = $result->fetchAll(PDO::FETCH_ASSOC);

            // echo "<pre>";
            //     var_dump($table);
            // echo "</pre>";
            // die;

            $user_txt = '';

            $user_txt .= '<div style="text-align:center;">';

            $user_txt .= '<h4 class="headings my-3">All Active Users</h4></div>';

            $user_txt .= '<div class="d-grid gap-2 mb-5">';

            $user_txt .= '<button class="btn main_text show_top_users" type="button" style="color:white; background-color: #4f81bc;">Show Top Users</button></div>';

            $user_txt .= '<div class="row d-flex mb-3">';

            foreach($table as $key=>$value)
            {

                $user_txt .= '<div class="col col-sm-3 col-md-3 main_text" style="font-size:14px; font-weight:bold;" >';
                $user_txt .= '<div class="card testimonial-card shadow-lg p-3 mb-5 bg-body rounded">';        
                $user_txt .= '<div class="card-body text-center">';
                $user_txt .= '<img src = "/images/user.png" class="img-fluid top_user_thumnail" style="opacity:95%;" id="'.$value['user_id'].'">';
                $user_txt .= '<table class="mx-auto">';
                $user_txt .= '<tr><td>'.$value['username'].'</td></tr>';
                $user_txt .= '<tr><td>Role : '.$value['role'].'</td></tr>';
                
                $user_txt .= '<tr><td>Approved : '.$value['approved'].'</td></tr>';
                $user_txt .= '<tr><td>User ID : '.$value['user_id'].'</td></tr></table>';
                $user_txt .= '<div class="d-grid gap-2">';
                $user_txt .= '<button class="btn main_text mt-3 delete_user" type="button" style="background-color : #4f81bc; color:white;" id="'.$value['user_id'].'">Delete User</button>';
                $user_txt .= '<button class="btn main_text mt-1 edit_user" type="button" style="background-color : #4f81bc; color:white;" id="'.$value['user_id'].'">Change Approval</button>';
                $user_txt .= '<div class="select_user_approval_div" id="'.$value['user_id'].'approval"></div>';
                $user_txt .= '</div>';
                $user_txt .= '</div>';
                $user_txt .= '</div>';
                $user_txt .= '</div>';
            }

            $user_txt .= '</div>';

            echo $user_txt;


        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }




    function display_all_blogs()
    {
        include 'connection.php';

        try
        {
            $sql = "SELECT * FROM `blogs` INNER JOIN `users` ON blogs.user_id = users.user_id";

            $result = $dsn->query($sql);

            $table = $result->fetchAll(PDO::FETCH_ASSOC);

            $blog_txt = '<table style="width: 100%; text-align:center;" class="table table-dark table-hover main_text"><tr><th>Blog Name</th><th>Blog ID</th><th>Writer</th><th>Category</th><th>Delete</th><th>Approval</th><th>Edit Blog</th></tr>';

            foreach($table as $key=>$value)
            {
                $blog_txt .= '<tr><td>'.$value['title'].'</td><td>'.$value['blog_id'].'</td><td>'.$value['username'].'</td><td>'.$value['category'].'</td><td class="delete_td" id="'.$value['blog_id'].'"><i class="fa-solid fa-trash-can text-primary"></i></td><td id="'.$value['blog_id'].'td">'.$value['approved_blog'].'<i class="fa-solid fa-pen-to-square text-primary mx-2 edit_blog_approval" id="'.$value['blog_id'].'"></i></td><td class="blog_table_record" id="'.$value['blog_id'].'"><i class="fa fa-cog fa-spin fa-fw text-primary"></i></td></tr>';
            }

            $blog_txt .= '</table>';

            echo $blog_txt;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }




    function display_all_comments()
    {
        include 'connection.php';

        $b_id = $_SESSION['blog_details'][0]['blog_id'];

        // echo "Blog id is ".$b_id; die;
        $sql2 = "SELECT comments.comment_id, comments.user_id, comments.blog_id, comments.comment, comments.approved, users.username, users.email, users.approved FROM comments INNER JOIN users ON comments.user_id=users.user_id WHERE comments.blog_id = '$b_id' AND comments.approved = 'yes';";

        $result = $dsn->query($sql2);

        $table = $result->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // var_dump($table);
        // echo "</pre>"; die;
        $comment_txt .= '<h3 class="headings">User Comments</h3>';

        $comment_txt .= '<table style="width:100%;">';

        foreach($table as $key=>$value)
        {
            if($value['comment'] == '')
            {
                continue;
            }

            $comment_txt .= '<tr><td style="width:20%;"><h5 class="main_text my-2" style="font-weight:bold;"><i class="fa-solid fa-user px-2"></i>'.$value['username'].'</h5></td>';

            $comment_txt .= '<td class="p-2" style="background-color: #f1f1f1; border: 20px solid #dbdbdb; text-align:left;"><span class="main_text my-2" style="font-size:18px;">'.$value['comment'].'</span></td></tr>';
        }

        $comment_txt.= '</table>';

        echo $comment_txt;   
    }


if(isset($_POST['login_pass']))
{
    $email = $_POST['login_email'];
    $pass = $_POST['login_pass'];

    include 'connection.php';

    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$pass' AND `role` != 'admin' ;";

    $result = $dsn->query($sql);

    $table = $result->fetchAll(PDO::FETCH_ASSOC);

    if(count($table) > 0)
    {
        $_SESSION['user_name'] = $table[0]['username'];
        $_SESSION['email'] = $table[0]['email'];
        $_SESSION['role'] = $table[0]['role'];
        $_SESSION['approved'] = $table[0]['approved'];
        $_SESSION['user_id'] = $table[0]['user_id'];
        echo 1;
    }
    else
    {
        echo 0;
    }
}


if(isset($_POST['user_pass']))
{
    $name = $_POST['user_name'];
    $mail = $_POST['user_mail'];
    $pass = $_POST['user_pass'];
    $role = $_POST['user_role'];

    include 'connection.php';
    try
    {
        $sql = "INSERT INTO users(`username`, `email`, `password`, `role`, `approved`) VALUES ('$name', '$mail', '$pass', '$role', 'yes');";

        $dsn->prepare($sql)->execute();
        echo "added";
    }

    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}


if(isset($_POST['add_blog_clicked']))
{
    // $target_dir = "images/";
    // echo $_SESSION['user_name']; die;
        $add_txt = '';
        $add_txt .= '<h4>Hello '.$_SESSION['user_name'].'!</h4>';
        $add_txt .= '<form action="server.php" method="post" enctype="multipart/form-data">';
        $add_txt .= '<table><tr><td class="labels">Title</td><td><input type="text" id="new_blog_name" class="td_medium" name="title_name"></td></tr>';
        $add_txt .= '<tr><td class="labels">Category</td>';
        $add_txt .= '<td><select id="new_blog_category" name="category_name"><option value="modern">Modern</option><option value="retro">Retro</option><option value="indie">Indie</option><option value="alt">Alt</option></select></td></tr>';
        $add_txt .= '<tr><td class="labels">Content</td>';
        $add_txt .= '<td><textarea id="new_blog_content" class="td_large" name="content_name"></textarea></td></tr>';
        $add_txt .= '<tr><td class="labels">Add Image</td>';
        $add_txt .= '<td>';
        $add_txt .= '<input type="file" name="fileToUpload" id="fileToUpload">';
        $add_txt .= '<input type="submit" value="Submit Blog" name="submit" class="btn btn-primary" style="float:right;"></td></tr>';
        $add_txt .= '</table></form>';

    echo $add_txt;
}

    // image upload code

    if(isset($_POST['submit']))
    {
        
        $title = $_POST['title_name'];
        $category = $_POST['category_name'];
        $content = $_POST['content_name'];
        $u_id = $_SESSION['user_id'];

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
        {    
            try
            {
                include 'connection.php';

                $sql = "INSERT INTO blogs(`user_id`, `title`, `content`, `category`, `approved_blog`, `image`) VALUES('$u_id', '$title', '$content', '$category', 'yes', '$target_file')";

                $dsn->query($sql);
            
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        } 
        else 
        {
            echo "Sorry, there was an error uploading your file.";
        }            
        header("Location: home.php");               
    }


    if(isset($_POST['sign_out_clicked']))
    {
        session_unset();
        session_destroy();
    }



    if(isset($_POST['blog_id']))
    {
        
        // var_dump($_POST);
        $id = $_POST['blog_id'];

        try
        {

            include 'connection.php';

            $sql = "SELECT blogs.blog_id, blogs.user_id, blogs.title, blogs.content, blogs.category, blogs.approved_blog, blogs.image, users.username, users.user_id, users.email, users.approved FROM blogs INNER JOIN users ON blogs.user_id=users.user_id WHERE blogs.blog_id = '$id';";

            $result = $dsn->query($sql);

            $table = $result->fetchAll(PDO::FETCH_ASSOC);            

            // echo "<pre>";
            //     var_dump($table);
            // echo "</pre>";

            $_SESSION['blog_details'] = $table;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }



    if(isset($_POST['delete_blog_id']))
    {
        $id = $_POST['delete_blog_id'];

        try
        {

            include 'connection.php';

            

            $sql = "DELETE FROM `blogs` WHERE `blog_id` = '$id'";
            // echo $sql;
            $dsn->query($sql);
            echo "deleted";
            // display_blogs();

        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }    

    if(isset($_POST['sign_out_class_clicked']))
    {
        session_unset();
        session_destroy();
    }


    if(isset($_POST['comment']))
    {
        $comment = $_POST['comment'];
        // echo $comment;
        $u_id = $_SESSION['user_id'];

        $b_id = $_SESSION['blog_details'][0]['blog_id'];


        include 'connection.php';

        try
        {

            $sql = "INSERT INTO comments(`user_id`, `blog_id`, `comment`, `approved`) VALUES('$u_id', '$b_id', '$comment', 'yes')";

            $dsn->query($sql);

            // echo $sql;

            display_all_comments();
        }

        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }


    if(isset($_POST['admin_pass']))
    {
        // echo "inside"; die;
        $admin_email = $_POST['admin_email'];
        $admin_pass = $_POST['admin_pass'];

        try
        {
            include 'connection.php';

            $sql = "SELECT * FROM `users` WHERE `email` = '$admin_email' AND `password` = '$admin_pass' AND `role`='admin';";

            $result = $dsn->query($sql);

            $table = $result->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($table); die;
            if(count($table) > 0)
            {
                $_SESSION['user_name'] = 'Admin';
                $_SESSION['role'] = 'admin';
                $_SESSION['approved'] = 'yes';
                echo 1;
            }
            else
            {
                echo 0;
            }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }

    }


    if(isset($_POST['view_blogs_clicked']))
    {
        
        display_all_blogs();
    }


    if(isset($_POST['admin_edit_blog_id']))
    {
        $blog_id = $_POST['admin_edit_blog_id'];

        $txt = '';

        $txt .= '<select id="approval_select"><option value="yes">Yes</option><option value="no">No</option></select>';

        $txt .= '<button type="button" class="btn btn-primary m-2 save_blog_edit" id="'.$blog_id.'"><i class="fa-solid fa-check" style="width:14px; height:14px;"></i></button>';

        echo $txt;
    }


    if(isset($_POST['selected_approval']))
    {

        $approval = $_POST['selected_approval'];

        $b_id = $_POST['blog_id'];

        include 'connection.php';

        try
        {
            $sql = "UPDATE `blogs` SET `approved_blog` = '$approval' WHERE `blog_id` = '$b_id'";

            $dsn->query($sql);

            display_all_blogs();
        }

        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }


    if(isset($_POST['admin_blog_delete_id']))
    {
        $b_id = $_POST['admin_blog_delete_id'];

        // echo $b_id; die;
        include 'connection.php';

        try
        {
            $sql = "DELETE FROM `blogs` WHERE `blog_id` = '$b_id'";

            $dsn->query($sql);

            display_all_blogs();
        }

        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }


    if(isset($_POST['blog_tr_id']))
    {
        $blog_id = $_POST['blog_tr_id'];
        // echo $blog_id; die;
        try
        {

            include 'connection.php';

            $sql = "SELECT blogs.blog_id, blogs.user_id, blogs.title, blogs.content, blogs.category, blogs.approved_blog, blogs.image, users.username, users.user_id, users.email, users.approved FROM blogs INNER JOIN users ON blogs.user_id=users.user_id WHERE blogs.blog_id = '$blog_id';";

            $result = $dsn->query($sql);

            $table = $result->fetchAll(PDO::FETCH_ASSOC);            

            // echo "<pre>";
            //     var_dump($table);
            // echo "</pre>";
            // die;

            $_SESSION['blog_details'] = $table;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }


    if(isset($_POST['user_thumbnail_id']))
    {
        $id = $_POST['user_thumbnail_id'];

        include 'connection.php';

        try
        {
            $sql = "SELECT COUNT(blogs.blog_id), users.user_id, users.username, users.email, users.approved FROM users INNER JOIN blogs on users.user_id = blogs.user_id WHERE users.user_id = '$id'";

            $result = $dsn->query($sql);

            $table = $result->fetchAll(PDO::FETCH_ASSOC);

            // echo "<pre>";
            //     var_dump($table);
            // echo "</pre>";
            // die;

            $_SESSION['user_thumbnail_details'] = $table;

        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }


    if(isset($_POST['show_all_users']))
    {
        display_all_users();
    }


    if(isset($_POST['show_top_users']))
    {
        include 'connection.php';

        try
        {
            $sql = "SELECT COUNT(blogs.blog_id), blogs.user_id, users.username FROM blogs INNER JOIN users on blogs.user_id = users.user_id GROUP BY blogs.user_id ORDER BY COUNT(blogs.blog_id) DESC LIMIT 5";

            $result = $dsn->query($sql);

            $table = $result->fetchAll(PDO::FETCH_ASSOC);

            // echo "<pre>";
            //     var_dump($table);
            // echo "</pre>";
            // die;

            $user_txt = '';

            $user_txt .= '<div style="text-align:center;">';

            $user_txt .= '<h4 class="headings my-3">Top Active Users</h4></div>';

            $user_txt .= '<div class="d-grid gap-2 mb-5">';

            $user_txt .= '<button class="btn main_text show_all_users" type="button" style="color:white; background-color: #4f81bc;">Show All Users</button></div>';

            $user_txt .= '<div class="d-flex flex-row bd-highlight mb-3">';

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

            $user_txt .= '</div>';

            echo $user_txt;


        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }


    if(isset($_POST['delete_user_id']))
    {
        $del_id = $_POST['delete_user_id'];

        include 'connection.php';

        try
        {
            $sql = "DELETE FROM `users` WHERE `user_id` = '$del_id'";

            $dsn->query($sql);

            display_all_users();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }


    if(isset($_POST['admin_edit_user_id']))
    {
        $edit_id = $_POST['admin_edit_user_id'];

        // include 'connection.php';
        $approval_markup = '';
        $approval_markup .= '<label for="select_approval" class="mt-3">Select Approval :</label>';
        $approval_markup .= '<select id="select_approval" class="mb-4">';
        $approval_markup .= '<option value="yes">Approved</option>';
        $approval_markup .= '<option value="no">Unapproved</option>';
        $approval_markup .= '</select>';
        $approval_markup .= '<button class="btn main_text save_approval" id="'.$edit_id.'" style="background-color: #4f81bc; color:white;">Save Changes</button>';

        echo $approval_markup;
    }


    if(isset($_POST['save_approval_id']))
    {
        $save_id = $_POST['save_approval_id'];

        $approval = $_POST['approval'];

        include 'connection.php';

        try
        {
            $sql = "UPDATE `users` SET `approved` = '$approval' WHERE `user_id` = '$save_id'";

            $dsn->query($sql);

            display_all_users();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }



   