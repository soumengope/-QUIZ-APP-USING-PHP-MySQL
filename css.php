<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML QUIZ</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <style type="text/css">
        body{margin:0;padding:0;background:rgb(216, 127, 216);text-align:center;}
        #mainSection{text-align:left;padding-top:2rem;padding-bottom:1rem;
            padding-left:5rem;}
        #html_header{font-size:2rem;font-weight:800;padding-top:2rem;padding-bottom:1rem;
            border-bottom:1px solid white;}
        button{width:auto;height:2rem;border:1px solid white;cursor:pointer;background:white;
            font-size:1rem;margin-left:1rem;font-size:1rem;}
        a{text-decoration:none;color:black;}
        #question{font-size:1rem;font-weight:600;background:white;padding:0.5rem;}
        #options{padding-top:1rem;padding-bottom:1rem;}
        #options div{padding-top:1rem;}
        span{color:green;background:white;padding:0.2rem;}

        @media screen and (min-width:0px) and (max-width:760px){
            #mainSection{padding-left:0.5rem;padding-bottom:3rem;height:300px;}
        }
    </style>
</head>
<body>
    <?php 
    
    session_start();
    require('conn.php'); 
    $emal = $_COOKIE['email'];
    $msql = "SELECT * FROM quiz_users WHERE email='$emal'";
    $mres = mysqli_query($conn,$msql);
    $result_check1 = mysqli_num_rows($mres);
    if($result_check1 > 0){
        $row = mysqli_fetch_assoc($mres);
        $ansKeys = $row['ans_keys'];
    }     
    $sql = "SELECT * FROM quiz_QAs LIMIT 20";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        if($_GET['id'] >= 11 && $_GET['id'] <= 21){
            $id = $_GET['id'];
        }else{
            $id=11;
        }
        $hpage = 0;
        if($id==20){
            $hpage = 1;
        }
        if($id==21){
            header("Location:http://localhost");
        }
        while($row=mysqli_fetch_assoc($result)){
               if($id==$row['id']){
                $sql = "SELECT * FROM quiz_QAs LIMIT 10";
                if(isset($_POST['submit'])){
                    @$radio = $_POST['css'];
                    if(!empty($radio)){
                        if($radio == $row['ans']){
                            $email = $_COOKIE['email'];
                            echo '<span>';echo 'Good, ',' Q',$id," answered , go to the next"; echo'</span>';
                            $chk=true;
                            $ansKeys[$id-1]=1;
                            $asql = "UPDATE `quiz_users` SET `ans_keys`='$ansKeys' WHERE `email`='$emal' ";
                            $res = mysqli_query($conn,$asql);
                        }else{
                            echo '<span>';echo 'Good, ',' Q',$id," answered, go to the next"; echo'</span>';
                            $chk=true;
                            $ansKeys[$id-1]=0;
                            $asql = "UPDATE `quiz_users` SET `ans_keys`='$ansKeys' WHERE `email`='$emal' ";
                            $res = mysqli_query($conn,$asql);
                        }
                    }
                }
                    echo '<div id="html_header">HTML QUESTIONS SERIES</div>';
                    echo '<form method="POST">';
                    echo '<div id="mainSection">';
                    echo '<div id="question">';echo "Q",$row['id']," ) ";echo $row['question'];echo'</div>';
                    echo '<div id="options">';
                        echo '<div><input type="radio" id="opt1" name="css" value="opt1"';
                        if($chk==true && $radio=='opt1'){echo'checked';}
                        echo'>';echo $row['opt1']; echo'</div>';
                        echo '<div><input type="radio" id="opt2" name="css" value="opt2"';
                        if($chk==true && $radio=='opt2'){echo'checked';}
                        echo'>';echo $row['opt2'];echo'</div>';
                        echo '<div><input type="radio" id="opt3" name="css" value="opt3"';
                        if($chk==true && $radio=='opt3'){echo'checked';}
                        echo'>';echo $row['opt3'];echo'</div>';
                        echo '<div><input type="radio" id="opt4" name="css" value="opt4"';
                        if($chk==true && $radio=='opt4'){echo'checked';}
                        echo'>';echo $row['opt4'];echo'</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<button type="submit" name="submit" value="submit" >Submit Answer</button>';
                    echo '<button  id="update"><a href="css.php?id=';echo $id+1;echo '">';
                    if($hpage==1){echo'Homepage';}else{echo'Next';}
                    echo'</a></button>';
                    echo '</form>'; 
               }                                  
        }
    }else{
        echo "no result";
    }        


    ?>
    
</body>
</html>