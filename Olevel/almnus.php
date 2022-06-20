<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni</title>
    <link rel="stylesheet" href="alumni.css" />
    <link rel="stylesheet" href="index.css" />
  
   >

</head>
<body>
<?php 
    include('connect.php');

    session_start();
  // require user to login if logged out
    if(!isset($_SESSION['email'])){
        header('location:http://localhost/olevel/loging.html');
    }
    ?>




<h1>Alumni</h1>

<p>Join the  alumni here <button type="button" id="alumniBtn">Join Here</button></p>   

<div class="app__alumni_form" id="alumniForm">
  <form action="index.php" method="post">
  <table class="index" align="">
            <tr>
                <th>
                    Alumnus name:
                </th>
                <th><input type="text" id="name" required name="aname" ></th>
            </tr>
            <tr>
                <th>Year of enrollment:</th>
                <th><input type="number" id="enrollment" min="1997" name="enrol_yr">  </th>
            </tr>
            <tr>
                <th>Year of graduation:</th>
                <th><input type="number" id="ygraduation"  min="2000" name="grad_year"> </th>
            </tr>
            <tr>
                <th>Headmistress/master at enrollment:</th>
                <th><input type="text" id="henrollment" maxlength="30" required  name="henrollment" > </th>
            </tr>
            <tr>
                <th>Headmistress/master at graduation year:</th>
                <th><input type="text" id="hgraduation" maxlength="30" required  name="hgraduation"> </th>
            </tr>
            <tr>
                <th>Famous teacher at the time of graduation:</th>
                <th><input type="text" id="famous teacher" maxlength="30" required name="famous_teacher" > </th>
            </tr>
            <tr>
                <th>Results:</th>
                <th><select name="results" id="results" name="results" required>
                    <option value=""></option>
                    <option value="I">Div one</option>
                    <option value="II">Div two</option>
                    <option value="III">Div three</option>
                    <option value="IV">Div four</option>
                    <option value="0">Div zero</option>
                </select> </th>
            </tr>
            <tr>
                <th>Current occupation:</th>
                <th><input type="text" id="occupation" maxlength="20" name="occupation" required> </th>
            </tr>
            <tr>
                <th>Address:</th>
                <th><input type="text" id="address" name="address" required > </th>
            </tr>
            <tr>
                <th>Email:</th>
                <th><input type="email" id="email"  name="email" required> </th>
            </tr>
            <tr>
                <th>Mobile number:</th>
                <th><input type="tel" id="phone" name="contacts"  required><br>
                 </th>
            </tr>
            <br><br>
           
    </table>
    <br><br>
    <input type="submit" value="submit">
</table>
</form>
</div>
<br><br>

<div class="app__alumni_list">
      <table>
        <tr>
          <th>Alumnus Name</th>
          <th>Year of Enrollemnt</th>
          <th>Year of Graduation</th>
          <th>Headmistress/master at enrollment:</th>
          <th>Headmistress/master at graduation year:</th>
          <th>Famous Teacher</th>
          <th>Results</th>
          <th>Occupation</th>
          <th>Address</th>
          <th>Email</th>
          <th>Mobile Number</th>
          
        </tr>
        <?php
          $query = 'SELECT * FROM tbl_alumni';
          $results = mysqli_query($connection,$query);

          if($results){ 
            while($data = mysqli_fetch_assoc($results)){
        
       
              ?>
              <tr>
                <td><?php echo $data['aname'];?></td>
                <td><?php echo $data['enrol_year'];?></td>
                <td><?php echo $data['grad_year'];?></td>
                <td><?php echo $data['henrollment'];?></td>
                <td><?php echo $data['hgraduation'];?></td>
                <td><?php echo $data['famous_teacher'];?></td>
                <td><?php echo $data['results'];?></td>
                <td><?php echo $data['current_occupation'];?></td>
                <td><?php echo $data['address'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['contacts'];?></td>
              </tr>

            <?php 
          }
          }else{
            echo "No alumni";
          }
        ?>
      </table>
    </div>
    <script src="../js/index.js"></script>
    <script src="../js/alumni.js"></script>
  </body>
</html>
    
</body>
</html>