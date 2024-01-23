<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style type="text/css">
        body{margin:0;padding:0;background:rgb(216, 127, 216);text-align:center;}
        #user_control{border:2px solid white; margin:0 auto; width:40%;margin-top:4rem;height:20rem;}
        #user_header{font-size:20px;font-weight:800;width:100%;height:2rem;background:white;
            padding-top:1rem; padding-top:1rem;margin-bottom:3rem;}
        #signUp,#signIn{margin:0 auto;}
        a{text-decoration:none;}
        #signUp button,#signIn button{width:40%;height:3rem;background:white;margin-top:2rem;cursor:pointer;
            font-size:1rem;font-weight:600;}
        
        #welcome{padding:0.3rem;background:white;margin-bottom:0.5rem;}
        #main_scores{border:2px solid white;width:80%;padding:1rem;margin:0 auto;}
        .scores{display:flex;justify-content:center;gap:1rem;text-align:center;}
        .scores div{margin-top:0.5rem;padding-left:0.5rem;padding-right:0.5rem;}
        .name_wid{width:22%;}
        .mark_wid{width:12%;}
        .code_wid{width:6%;}
        #scrid div{border:1px solid white;background:rgb(235, 106, 235);color:black;padding:0.5rem;font-weight:600;}

        #qDiv{width:50%;margin:0 auto;pading-top:2rem;text-align:center;}
        #qDiv_header{font-size:22px;font-weight:800;padding:0.5rem;border-bottom:1px solid white;
        padding-top:4rem;}
        .qDiv_btn{margin-top:1rem;}
        .qDiv_btn a{text-decoration:none;}
        .qDiv_btn button{width:20%;height:2rem;background:white;border:1px solid white;cursor:pointer;
            font-size:1rem;}
        
        @media screen and (min-width:0px) and (max-width:760px){
            body{height:1dvh;width:100%;margin:0;padding:0;}
            #user_control{width:80%;}
            h2{width:90%;font-size:20px;}

            .scores{display:flex;justify-content:left;flex-direction:column;}
            .scores div{margin-top:2rem;text-align:center;}
            .name_wid{width:auto;}
            .mark_wid{width:auto;}
            .code_wid{width:auto;}
            #mob{position:absolute;top:150px;}
            #mob div{padding-top:1rem;}

            #main_scores{padding-bottom:2rem;}
            #nm_mob{position:relative;left:2rem;}
            #php_mob{position:relative;top:1rem;left:2rem;}
            #js_mob{position:relative;top:1rem;left:2rem;}
            #css_mob{position:relative;top:0.8rem;left:2rem;}
            #html_mob{position:relative;top:0.6rem;left:2rem;}
            #tmks_mob{position:relative;top:0.4rem;left:2rem;}
            #tsum_mob{position:relative;top:0.2rem;left:2rem;}

            .qDiv_btn button{width:60%;}
            #qDiv{padding-bottom:4rem;}
        }
    </style>
</head>
<body>
    <?php
        session_start();
        require('conn.php');
        if(!isset($_COOKIE['email']) && !isset($_SESSION['email'])){
            echo '<div id="user_control">
                <div id="user_header">Hello Dear User</div>
                <div id="signUp"><a href="signup.php"><button>SignUp</button></a></div>
                <div id="signIn"><a href="signin.php"><button>SignIn</button></button></div>
            </div>';
        }else{
            $email = $_COOKIE['email'];
            $sql = "SELECT * FROM quiz_users WHERE email='$email'";
            $res = mysqli_query($conn,$sql);
            $result_check = mysqli_num_rows($res);
            echo '<div id="welcome">
            <h2>welcome your email is : ';echo $_COOKIE['email']; echo'</h2>
            </div>
            <div id="main_scores">
                <div class="scores" id="scrid">
                <div class="name_wid">Full Name</div>
                <div class="mark_wid">Total Scores</div>
                <div class="mark_wid">Total Marks</div>
                <div class="code_wid">HTML</div>
                <div class="code_wid">CSS</div>
                <div class="code_wid">JS</div>
                <div class="code_wid">PHP</div>
            </div>';
            if($result_check > 0){
                $row = mysqli_fetch_assoc($res);
                $len = strlen($row['ans_keys']);
                
                $tScr_sum = 0;$val=$row['ans_keys'];for($i=0;$i<$len;$i++){$tScr_sum=$tScr_sum+$val[$i];}
                if($len > 0){
                    $html_sum = 0;$val=$row['ans_keys'];for($i=0;$i<10;$i++){$html_sum=$html_sum+$val[$i];}
                }
                if($len > 10){
                    $css_sum = 0;$val=$row['ans_keys'];for($i=10;$i<20;$i++){$css_sum=$css_sum+$val[$i];}
                }
                if($len > 20){
                    $js_sum = 0;$val=$row['ans_keys'];for($i=20;$i<30;$i++){$js_sum=$js_sum+$val[$i];}
                }
                if($len > 30 ){
                    $php_sum = 0;$val=$row['ans_keys'];for($i=30;$i<40;$i++){$php_sum=$php_sum+$val[$i];}
                }
                
                
                $asql = "UPDATE `quiz_users` SET `t_scr`='$tScr_sum',`f_scr`='$len' WHERE `email`='$email' ";
                $res2 = mysqli_query($conn,$asql);
                echo '<div class="scores" id="mob">';
                echo '<div class="name_wid" id="nm_mob">';echo $row['f_name']," ",$row['l_name'];  echo'</div>';
                echo '<div class="mark_wid" id="tsum_mob">';
                echo $tScr_sum; 
                echo'</div>';
                echo '<div class="mark_wid" id="tmks_mob">';
                echo $len;
                echo'</div>';
                echo '<div class="code_wid" id="html_mob">';
                if($row['html'] == 0 && $html_sum==0){echo 'Ab';}else{echo $html_sum;}
                echo'</div>';
                echo '<div class="code_wid" id="css_mob">'; 
                if($row['css'] == 0 && $css_sum==0){echo 'Ab';}else{echo $css_sum;}
                echo'</div>';
                echo '<div class="code_wid" id="js_mob">'; 
                if($row['js'] == 0 && $js_sum==0){echo 'Ab';}else{echo $js_sum;}
                echo'</div>';
                echo '<div class="code_wid" id="php_mob">';
                if($row['php'] == 0 && $php_sum==0){echo 'Ab';}else{echo $php_sum;}  
                echo'</div>';
                echo '</div>';
            }
               
        echo '</div>';

        echo '<div id="qDiv">
            <div id="qDiv_header">Test your knowledge</div>
            <div class="qDiv_btn"><a href="html.php"><button>HTML</button></a></div>
            <div class="qDiv_btn"><a href="css.php"><button>CSS</button></a></div>
            <div class="qDiv_btn"><a href="js.php"><button>JavaScript</button></a></div>
            <div class="qDiv_btn"><a href="php.php"><button>PHP</button></a></div>
        </div>';
            
        }
    ?>
    
</body>
</html>