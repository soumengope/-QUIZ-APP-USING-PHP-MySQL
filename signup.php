<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <style type="text/css">
        body{margin:0;padding:0;background:rgb(216, 127, 216);text-align:center;}
        #main_div{padding-top:1rem;}
        #signup_header{font-size:2rem;font-weight:800;padding-top:2rem;padding-bottom:1rem;
            border-bottom:1px solid white;}
        #main_div input{margin-top:0.8rem;}
        #other_div input{width:30%;height:2rem;}
        #submit{width:10%;height:2rem;border:1px solid white;cursor:pointer;background:white;
        font-size:1rem;}
        #pDiv{height:2rem;}
        .green{color:green;}
        .red{color:red;}
        #homepage{padding-top:1rem;}
        #homepage button{width:10%;height:2rem;border:1px solid white;cursor:pointer;background:white;
        font-size:1rem;}

        @media screen and (min-width:0px) and (max-width:760px){
            #other_div input{width:80%;}
            #other_div{padding-bottom:3rem;}
            #submit{width:70%;}
            #homepage button{width:70%;}

        }
    </style>
</head>
<body>

    <script>
        $(document).ready(function(){
            $('form').submit(function(event){
                event.preventDefault();
                var fname = $('#firstName').val();
                var lname = $('#lastName').val();
                var email = $('#email').val();
                var pass = $('#pass').val();
                var cpass = $('#cpass').val();
                var submit = $('#submit').val();
                $('#msg').load('signupMain.php',{
                    fname : fname,
                    lname : lname,
                    email : email,
                    pass : pass,
                    cpass : cpass,
                    submit : submit
                });
            });
        });
    </script>
    <div id="signup_header">QUIZ TEST SIGN UP </div>
    <div id="pDiv"><p id="msg"></p></div>
    <div id="main_div">
    <form action="signupMain.php" method="POST">
        <div id="other_div">
        <input type="text" id="firstName" name="firstName" placeholder="firstname"><br>
        <input type="text" id="lastName" name="lastName" placeholder="lastname"><br>
        <input type="text" id="email" name="email" placeholder="email"><br>
        <input type="password" id="pass" name="pass" placeholder="password"><br>
        <input type="password" id="cpass" name="cpass" placeholder="conirm password"><br>
        </div>
        <input type="submit" id="submit" name="submit" value="Submit">
    </form>
    </div>
    <div id="homepage"><a href="http://localhost"><button>Homepage</button></a></div>
</body>
</html>