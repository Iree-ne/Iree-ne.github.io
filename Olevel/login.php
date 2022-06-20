<?php
    include('connect.php');

    $email = $_POST['emails'];
    $pswd = $_POST['password'];
    // $creds = "SELECT email,password  FROM tbl_register WHERE email='$email' AND password='$pswd'";
    $creds = "SELECT email,password  FROM tbl_register";
    $results = mysqli_query($connection,$creds);
    
    if($results){       
        // echo mysqli_fetch_assoc($results);
        while($data = mysqli_fetch_assoc($results)){
            // echo $data['password'];
            if(($email == $data['email']) && ($pswd == $data['password'])){
                // echo "sucess";
                session_start();
                $_SESSION['email'] = $email;
                header("location:http://localhost/olevel/almnus.php");
            }else{
                echo "Wrong password or email";
                
            }
        }
    }else{
        echo "failure";
    }
    
?>