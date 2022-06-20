<?php
    include('connect.php');
    // names resembling the html name attributes

    $firstname = $_POST['fname'];
    $middlename = $_POST['mname'];
    $surname = $_POST['sname'];
    $emailaddress = $_POST['email'];
    $password = $_POST['pswd'];
    $username = $_POST['username'];
    $dateofbirth = $_POST['dob'];
    $cv = $_POST['cv'];
    $contacts = $_POST['contacts'];
    $insta = $_POST['insta'];
    $facebook = $_POST['fb'];
    $twitter = $_POST['twitter'];

    
    $existingCredsQuery = 'SELECT username,email FROM tbl_register';
    $results = mysqli_query($connection,$existingCredsQuery);


    if($results){
        while($data = mysqli_fetch_assoc($results)){
            if($data['email'] == $emailaddress){
                die('Email already exists');
            }
            if($data['username'] == $username){
                die('Username already exists');
            }
        }

        $query = "INSERT INTO `tbl_register`(`first name`,`middle name`,`surname`,`username`,`date of birth`,`password`,`cv`,`email`,`contacts`,`facebook`,`twitter`,`instagram`) VALUES ('$firstname','$middlename','$surname','$username','$dateofbirth','$password','$cv','$emailaddress','$contacts','$facebook','$twitter','$insta')";

        if(mysqli_query($connection,$query)){
            session_start();
            $_SESSION['email'] = $emailaddress;
            header('location:http://localhost/olevel/almnus.php');
        }else{
            echo "Failed!! ".mysqli_error($connection);
        }
    }
?>