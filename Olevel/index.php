<?php
    include('connect.php');


    $aname = $_POST['aname'];
    $eyear = $_POST['enrol_yr'];
    $gyear = $_POST['grad_year'];
    $henrol = $_POST['henrollment'];
    $hgrad = $_POST['hgraduation'];
    $teacher = $_POST['famous_teacher'];
    $result = $_POST['results'];
    $occpxn = $_POST['occupation'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $tel = $_POST['contacts'];
  

    $query = "INSERT INTO `tbl_alumni`(`enrol_year`,`grad_year`,`henrollment`,`hgraduation`,`famous_teacher`,`results`,`current_occupation`,`address`,`email`,`contacts`,`aname`) VALUES ('$eyear','$gyear','$henrol', '$hgrad','$teacher','$result','$occpxn','$address','$email','$tel','$aname')";
    $results = mysqli_query($connection,$query);

    if($results){
        // redirect to alumni page;
        header('location:http://localhost/olevel/almnus.php');
    }
?>