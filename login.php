<?php
session_start();

        $conn=mysqli_connect('localhost','root','','assignment');
        if(!$conn){
            echo "Connection failed";
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="login">

    <div class="hero">
        <form action="#" method="post">
            <div class="container1">
                <div class="brand-logo"></div>
                <div class="brand-title">Login</div>
                <div class="inputs">
                    <label class="lablog">EMAIL</label>
                    <input type="email" name="email" placeholder="example@test.com" />
                    <label class="lablog">PASSWORD</label>
                    <input type="password" name="pass" placeholder="Min 6 charaters long" />
                    <button type="submit" name="submit" class="sublog">LOGIN</button>
                    <div class="account1">
                        <a href="signup.php">Don't have an account</a>
                    </div>
                </div>
            </div>
        </form>

    </div>

</body>

</html>



<?php 

        if(isset($_POST['submit']))
        {
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            

            $sql="SELECT * From signup where email='$email' and pass='$pass';";
            $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0)
            {$_SESSION['email'] = $_POST['email'];

                header("location:index.php");
            }else{
                echo "Invalid Details";
            }
           
}
?>

