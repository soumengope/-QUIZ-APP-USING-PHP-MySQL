<?php 
    require('conn.php');

    if(isset($_POST['submit'])){
        $fname = strtoupper($_POST['fname']);
        $lname = strtoupper($_POST['lname']);
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];

        $emptyError = false;
        $fnameError = false;
        $lnameError = false;
        $emailError = false;
        $passError = false;
        $cpassError = false;

        if(empty($fname) || empty($lname) || empty($email) || empty($pass) || empty($cpass)){
            echo "empty field";
            $emptyError = true;
        }else if(strlen($fname) > 20){
            echo "first name must be less than 20 character";
            $fnameError = true;
        }else if(strlen($lname) > 15){
            echo "last name must be less than 15 character";
            $lnameError = true;
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "enter a valid email";
            $emailError = true;
        }else if(strlen($pass) < 8){
            echo "password should be 8 character or more";
            $passError = true;
        }else if($pass != $cpass){
            echo "password and confirm password not matched";
            $cpassError = true;
        }else{
            $sql = "INSERT INTO `quiz_users`(`f_name`, `l_name`, `email`, `pass`, `t_scr`, `f_scr`, `html`, `css`, `js`, `php`, `ans_keys`)
            VALUES('$fname','$lname','$email','$pass',0,0,0,0,0,0,'0000000000000000000000000000000000000000'); ";
            $res = mysqli_query($conn,$sql);
            echo "successfully uploaded into database";
        }
    }

?>
<script>
   var emptyError = "<?php echo $emptyError; ?>"
   var fnameError = "<?php echo $fnameError; ?>"
   var lnameError = "<?php echo $lnameError; ?>"
   var emailError = "<?php echo $emailError; ?>"
   var passError = "<?php echo $passError; ?>"
   var cpassError = "<?php echo $cpassError; ?>"

    if(emptyError==true ||fnameError==true || lnameError==true || emailError==true || passError==true || cpassError==true){
        $('#msg').addClass('red').removeClass('green');
    }

    if(emptyError==false && fnameError==false && lnameError==false && emailError==false && passError==false && cpassError==false){
        $('#msg').addClass('green').removeClass('red');
        setTimeout(function () {
            window.location.href= 'http://localhost';
        },2000);
    }
    </script>