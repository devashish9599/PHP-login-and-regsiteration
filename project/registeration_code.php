 <?php
   if (isset($_POST['submit'])) {
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "reg2";
   
   $con = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$con) {
       die("Connection failed: " . mysqli_connect_error());
   }
   
    // receive all input values from the form
    $user = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
  $pass=mysqli_real_escape_string($con,$_POST['password']);
   $sql = "INSERT INTO details (name,email,password)
   VALUES ('$user', '$email','$pass')";
   
   if (mysqli_query($con, $sql)) {
       echo "hello ".$user;
echo '<br>';
       echo "your record created successfully";
   } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($con);
   }

   mysqli_close($con);
   }
?>