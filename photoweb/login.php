<?php
    session_start();
    require('Inc/dbconfig.php');

    if (isset($_POST['email']) && isset($_POST['password'])){

        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = validate($_POST['email']);
        $password = $_POST['password'];

        if (empty($email)){
            header("Location: index.php?error=User Name is required");
            exit();

        }else if(empty($password)){
            header("Location: index.php?error=Password is required");
            exit();

        }else{
            $user_details = "SELECT * FROM user_queries WHERE email='$email' AND password='$password'";
            $result = mysqli_query($conn, $user_details);

            if(mysqli_num_rows($result) == 1){ 
                $row = mysqli_fetch_assoc($result);

                if ($row['email'] === $email && $row['password'] === $password){
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['password'] = $row['password'];

                    header("Location: index.php?success=logged in");  
                    exit();
                    
                }else{
                    header("Location: index.php?error=Incorrect user name or password");
                    exit();
                }

            }else{
                header("Location: index.php?error=Incorrect user name or password");
                exit();
            }
        }

    }else{
        header("Location: index.php");
        exit();
    }   
?>