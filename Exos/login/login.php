<?php

        if(isset($_POST['username']) &&  isset($_POST['password']))  {
            echo "Username: " . $_POST['username'] . "<br>";
            echo "Password: " . $_POST['password'];
            if($_POST['username'] == "admin" && $_POST['password'] == "<PASSWORD>") {
                echo "Login Success";
            } else {
                echo "Login Failed";
            }
            echo "<br>";
            echo "<a href='login.php'>Login</a>";
            echo "<br>";
            echo "<a href='register.php'>Register</a>";
            echo "<br>";
            echo "<a href='logout.php'>Logout</a>";
            echo "<br>";
            echo "<a href='profile.php'>Profile</a>";
            echo "<br>";
            echo "<a href='change_password.php'>Change Password</a>";
        }


        //PHP Regular Expressions
        //https://regex101.com/
        //https://regexr.com/
        $motdepasse = "<PASSWORD>";
        //preg_match()
        //preg_replace()
        //preg_split()
        //preg_grep()

        
    ?>