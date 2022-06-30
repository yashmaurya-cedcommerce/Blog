<?php session_start();

if(isset($_POST['submit']))
{
    $title = $_POST['edited_title'];
    $category = $_POST['edited_category'];
    $content = $_POST['edited_content'];
    $valid_content = htmlentities($content, ENT_QUOTES);
    // echo $valid_content; die;
    $u_id = $_SESSION['user_id'];
    $b_id = $_SESSION['blog_details'][0]['blog_id'];

    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["edited_image"]["name"]);
    // echo $title." ".$category." ".$content." ".$u_id." ".$b_id." ".$target_file;
    if (move_uploaded_file($_FILES["edited_image"]["tmp_name"], $target_file)) 
        {    
            try
            {
                include 'connection.php';

                $sql = "UPDATE `blogs` SET `title` = '$title', `category`= '$category', `content` = '$valid_content', `image` = '$target_file' WHERE `blog_id` = '$b_id';";
                // $sql = "UPDATE `blogs` SET `title` = 'uuDuuusk Till Dawnn', `image` ='$target_file' WHERE `blogs`.`blog_id` = 7";
                // var_dump($sql);
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
        
        if($_SESSION['user_name'] == 'Admin')
        {
            header("Location: admin_dashboard.php");
        }
        else
        {
            header("Location: home.php");
        }
}




?>