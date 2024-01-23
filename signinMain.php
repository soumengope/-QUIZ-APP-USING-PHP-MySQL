<?php
    require('conn.php');
    session_start();

    if(!isset($_COOKIE['email'])){
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $pass = $_POST['pass'];
    
            $emptyError = false;
            $passError = false;
    
            if(empty($email) || empty($pass)){
                echo "empty field";
                $emptyError = true;
            }else{
                $sql = "SELECT * FROM `quiz_users` WHERE email='$email' && pass = '$pass'";
                $res = mysqli_query($conn,$sql);
                $result_check = mysqli_num_rows($res);
                if($result_check > 0){
                    setcookie('email',$email,time()+86400);
                    $_SESSION['email'] = $email;
                    echo "successfully logged in, wait a moment...";
                }else{
                    echo "username and password aren't match";
                    $passError = true;
                }
            }
        }
    }

?>
<script>
   var emptyError = "<?php echo $emptyError; ?>"
   var passError = "<?php echo $passError; ?>"

    if(emptyError==true || passError==true ){
        $('#msg').addClass('red').removeClass('green');
    }

    if(emptyError==false && passError==false ){
        $('#msg').addClass('green').removeClass('red');
        setTimeout(function () {
            window.location.href= 'http://localhost';
        },2000);
    }
    </script>