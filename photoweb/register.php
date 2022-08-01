<?php
    session_start();
    require('Inc/dbconfig.php');

    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword'])){

        if($_POST['password'] == $_POST['confirmPassword']){
        
        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $username = validate($_POST['username']);
        $email = validate($_POST['email']);
        $password = $_POST['password'];
 
        $exist_email = "SELECT * FROM user_queries WHERE email='$email'";
        $result = mysqli_query($conn, $exist_email);

        if (mysqli_num_rows($result) === 1){
            header("Location: index.php?error=Email already exists");
            exit();
        }else{

            $sql = "INSERT INTO user_queries (username, email, password) VALUES ('$username', '$email', '$password')";

            $add = mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            
            header('Location: index.php?success=record added');
            exit();
        }
        }else{
            header("Location: index.php?error=Passwords didn't match");
        }
    }

    else{
        header("Location: index.php?error=Password is not match");
        exit();
    }


?>