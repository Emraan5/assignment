<?php

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
        <title>Sign Up</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body class="login">

        <div class="hero">
            <form action="#" method="post">
                <div class="container1" style="height: 490px;">
                    <div class="brand-logo"></div>
                    <div class="brand-title">Sign Up</div>
                    <div class="inputs">
                        <label class="lablog">NAME</label>
                        <input type="text" name="name" placeholder="Emraan Khaan" />
                        <label class="lablog">EMAIL</label>
                        <input type="email" name="email" placeholder="example@test.com" />
                        <label class="lablog">PASSWORD</label>
                        <input type="password" name="pass" placeholder="Min 6 charaters long" />
                        <button type="submit" name="submit" class="sublog">SIGN UP</button>
                        <div class="account1">
                        <a href="login.php">LOGIN</a>
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
            $name=$_POST['name'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            

            $sql="INSERT into signup (name,email,pass)VALUES('$name','$email','$pass');";
            $result=mysqli_query($conn,$sql);
            // echo $sql;
            if($result)
            {
                // echo '<script>alert("your form has been successfully submitted.")</script>';
                header("location:login.php");
    }else{
        echo '<script>alert("Data not Inserted")</script>';
    }
}
?>