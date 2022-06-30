$(document).ready(function()
{ 
    
    // LOGIN PAGE VALIDATION 
    
    $("#sign_in_btn").click(function()
    {
        var email = $("#email_id").val();
        var pass = $("#password_id").val();

        var re = /\S+@\S+\.\S+/;
        var email_valid = re.test(email);

        if(email_valid == false && email!='')
        {
            $("#email_alert").html("<div  class='alert alert-danger' role='alert' id='email_format_alert'>*Please enter a valid e-mail</div>");

            $("#email_format_alert").show();

            if(pass!='')
            {
                $("#password_empty_alert").hide();
            }
            else
            {
                $("#password_empty_alert").show();
            }

        }
        else if(email == '')
        {
            $("#email_alert").html("<div  class='alert alert-danger' role='alert' id='email_empty_alert'>*Please enter e-mail</div>"); 

            $("#email_empty_alert").show();

            if(pass!='')
            {
                $("#password_empty_alert").hide();
            }
            else
            {
                $("#password_empty_alert").show();
            }
        }
        else if(pass == '')
        {
            $("#password_alert").html("<div class='alert alert-danger' role='alert' id='password_empty_alert'>*Please enter password</div>");

            $("#password_empty_alert").show();

            if($("#email_id").val() !='' && email_valid == true)
            {
                $("#email_format_alert").hide();
                $("#email_empty_alert").hide();
            }
        }
        else
        {
            $("#email_format_alert").hide();
        
            $("#password_empty_alert").hide();
            
            $("#email_empty_alert").hide();

            $.ajax(
                {
                    url : "server.php",
                    type : 'POST',
                    data : {login_email : email,
                            login_pass : pass},

                    success : function(result)
                    {
                        if(result == 1)
                        {
                            window.location = 'home.php';
                        }
                        else
                        {
                            $("#credential_error_div").html("<div class='alert alert-danger' role='alert'>*Please enter correct credentials</div>");
                        }
                    }
                }
            )
            
        }
    });

    // LOGIN COMPLETED 



    // REGISTER VALIDATION 

    $("#sign_up_btn").click(function()
    {
        var flag=0;
        var checked=0;
        var role;
        var fname = $("#first_name").val();
        var lname = $("#last_name").val();
        var name = fname+" "+lname;
        var email = $("#email").val();
        var pass1 = $("#pass1").val();
        var pass2 = $("#pass2").val();
        var re = /\S+@\S+\.\S+/;
        var email_valid = re.test(email);
        
        if($('#reader').is(':checked'))
        {   
            checked = 1;
            role = 'reader';  
        }
        else if($('#writer').is(':checked'))
        {
            checked = 1;
            role = 'writer';
        };

        if(checked==0)
        {
            $("#registration_error").html("*Please choose a role");
            $("#registration_error").show();
            flag=1;
        }

        else if(fname == '' || lname == '' || email == '' || pass1 == '' || pass2 == '' || role == '')
        {
            $("#registration_error").html("*Please fill all the fields");
            $("#registration_error").show();
            flag=1;
        }

        else if(email_valid == false)
        {
            flag=1;
            $("#registration_error").html("*Please enter a valid e-mail");
            $("#registration_error").show();
        }
        
        else if(pass1 != pass2)
        {
            $("#registration_error").html("*Passwords do not match");
            $("#registration_error").show();
            flag=1;
        }
        else
        {
            $("#registration_error").hide();
            
            $.ajax(
                {
                    url : "server.php",
                    type : 'POST',
                    data : {user_name : name,
                            user_mail : email,
                            user_pass : pass2,
                            user_role : role},
                    
                    success : function(result)
                    {
                        // console.log(result);
                        window.location = 'login.php';
                    }
                }
            )
        }

        
    });


    // REGISTRATION COMPLETED 


    // ADD A NEW BLOG FUNCTIONALITY 

    $("#add_new_blog_btn").click(function()
    {
        // alert("adding");
        var clicked = 'true';

        $.ajax(
            {
                url : "server.php",
                type : 'POST',
                data : {add_blog_clicked : clicked},
                
                success : function(result)
                {
                    // console.log(result);
                    // window.location = 'login.php';
                    $("#add_blog_form").html(result);
                }
            }
        )

    });

    $("#drop_down_ul").on("click", ".sign_out_btn", function()
    {
        clicked = 'true';

        $.ajax({
            url : "server.php",
            type : 'POST',
            data : {sign_out_clicked : clicked},

            success : function()
            {
                // console.log(result);
                window.location = 'login.php';
            }
        })

    });



    $(".blog_thumbnail").click(function()
    {
        // alert("opening");
        var id = $(this).attr("id");
        // alert(id);

        $.ajax({
            url : "server.php",
            type : 'POST',
            data : {blog_id : id},

            success : function()
            {
                // console.log(result);
                window.location = 'blog_page.php';
            }
        })
    });


    $(".edit_blog_user").click(function()
    {
        window.location = 'edit_blog.php';
    });

    $(".delete_blog_user").click(function()
    {
        var id = $(this).attr("id");

        if (confirm('Are you sure you want to delete this blog?')) 
        {
            // alert('Deleted!');
            $.ajax({
                url : "server.php",
                type : 'POST',
                data : {delete_blog_id : id},
    
                success : function(result)
                {
                    console.log(result);
                    window.location = 'home.php';
                }
            })
        } 
        else 
        {
            alert('Aborted');
        }

        
    });

    $(".sign_out_class").click(function()
    {
        // alert("signing out");
        clicked= 'true';

        $.ajax({
            url : "server.php",
            type : 'POST',
            data : {sign_out_class_clicked : clicked},

            success : function()
            {
                // console.log(result);
                window.location = 'login.php';
            }
        })

    });


    $(".post_comment").click(function()
    {
        var comm = $("#comment_id").val();
        // alert(comm);
        if(comm != '')
        {
            $.ajax({
                url : "server.php",
                type : 'POST',
                data : {comment : comm},

                success : function(result)
                {
                    console.log(result);
                    $("#comments_div").html(result);
                }
            })
        }
        else
        {
            alert("*Please write a comment");   
        }
    });


    $("#admin_sign_in").click(function()
    {
        // alert("signing");
        var mail = $("#admin_email_id").val();
        var pass = $("#admin_password_id").val();

        // alert(mail+" "+pass);
        var re = /\S+@\S+\.\S+/;
        var email_valid = re.test(mail);
        // var flag = 0;
        if(mail == '')
        {
            $("#admin_login_alert").html("Please Enter E-mail");
            $("#admin_login_alert").show();
        }
        else if(pass == '')
        {
            $("#admin_login_alert").html("Please Enter Password");
            $("#admin_login_alert").show();
        }
        else if(mail == '' && pass == '')
        {
            $("#admin_login_alert").html("Please enter your E-mail and Password");
            $("#admin_login_alert").show();
        } 
        else if(email_valid == false)
        {
            $("#admin_login_alert").html("Please enter a valid E-mail");
            $("#admin_login_alert").show();
        }

        else 
        {
            $.ajax({
                url : "server.php",
                type : 'POST',
                data : {admin_email : mail,
                        admin_pass : pass},

                success : function(result)
                {
                    console.log(result);
                    if(result == 1)
                    {
                        // console.log(result);
                        window.location = 'admin_dashboard.php';
                    }
                    else if(result == 0)
                    {
                        $("#admin_login_alert").html("Please Enter Correct Credentials");
                        $("#admin_login_alert").show();
                    }
                }
            })
        }
    });


    $("#view_blogs_btn").click(function()
    {

        // alert("viewing");
        var clicked = "true";

        $.ajax({
            url : "server.php",
            type : 'POST',
            data : {view_blogs_clicked : clicked},

            success : function(result)
            {
                // console.log(result);
                $("#all_blogs_div").html(result);
            }

        })

    });


    $("#all_blogs_div").on("click", ".edit_blog_approval", function()
    {
        // alert("editing");
        var id = $(this).attr("id");
        // alert(id);

        $.ajax({
            url : "server.php",
            type : 'POST',

            data : {admin_edit_blog_id : id},

            success : function(result)
            {
                // console.log(result);
                var edit_td = "#"+id+"td";
                $(edit_td).html(result);

            }
        });
    });


    $("#all_blogs_div").on("click", ".save_blog_edit", function()
    {

        var id = $(this).attr("id");
        // alert(id);

        var approval = $("#approval_select").val();

        // alert(approval);

        $.ajax({
            url : "server.php",
            type : 'POST',

            data : {selected_approval : approval,
                    blog_id : id},

            success : function(result)
            {
                // console.log(result);
                $("#all_blogs_div").html(result);
            }
        });

    });

    
    $("#all_blogs_div").on("click", ".delete_td", function()
    {

        var id = $(this).attr("id");
        // alert(id);

        $.ajax({
            url : "server.php",
            type : 'POST',

            data : {admin_blog_delete_id : id},

            success : function(result)
            {
                // console.log(result);
                $("#all_blogs_div").html(result);
            }
        });
    });


    $("#all_blogs_div").on("click", ".blog_table_record", function()
    {
        var id = $(this).attr("id");
        // alert(id);

        $.ajax({
            url : "server.php",
            type : 'POST',

            data : {blog_tr_id : id},

            success : function(result)
            {
                console.log(result);
                // $("#all_blogs_div").html(result);
                window.location = 'blog_page.php';
            }
        });
    });

    $("#top_users_div").on("click", ".top_user_thumnail", function()
    {
        // alert("user");
        var id = $(this).attr("id");
        // alert(id);

        $.ajax({
            url : "server.php",
            type : 'POST',

            data : {user_thumbnail_id : id},

            success : function(result)
            {

                window.location = 'user_thumbnail_page.php';
            }
        });
    });


    $("#top_users_div").on("click", ".show_all_users", function()
    {
        // alert("showing all users");

        var clicked = 'true';

        $.ajax({
            url : "server.php",
            type : 'POST',

            data : {show_all_users : clicked},

            success : function(result)
            {
                // console.log(result);
                $("#top_users_div").html(result);
            }
        });


    });


    $("#top_users_div").on("click", ".show_top_users", function()
    {
        // alert("showing top users");

        var clicked = 'true';

        $.ajax({
            url : "server.php",
            type : 'POST',

            data : {show_top_users : clicked},

            success : function(result)
            {
                // console.log(result);
                $("#top_users_div").html(result);
            }
        });
    });


    // $(".delete_user").click(function()
    $("#top_users_div").on("click", ".delete_user", function()
    {
        // alert("deleting");

        var id = $(this).attr("id");
        // alert(id);

        $.ajax({
            url : "server.php",
            type : 'POST',

            data : {delete_user_id : id},

            success : function(result)
            {
                // console.log(result);
                $("#top_users_div").html(result);
            }
        });        
    });

    $("#top_users_div").on("click", ".edit_user", function()
    {
        // alert("editing");
        var id = $(this).attr("id");
        // alert(id);
        var id_markup = "#"+id+"approval";
        $.ajax({
            url : "server.php",
            type : 'POST',

            data : {admin_edit_user_id : id},

            success : function(result)
            {
                console.log(result);
                $(id_markup).html(result);
            }
        }); 

    });

    $("#top_users_div").on("click", ".save_approval", function()
    {
        // alert("working");
        var id = $(this).attr("id");
        // alert(id);
        var selected = $("#select_approval").val();

        $.ajax({
            url : "server.php",
            type : 'POST',

            data : {save_approval_id : id,
                    approval : selected},

            success : function(result)
            {
                console.log(result);
                // $(id_markup).html(result);
                $("#top_users_div").html(result);
            }
        }); 

        
    });
    

});