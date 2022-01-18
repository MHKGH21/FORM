<?php
$insert = false;
if(!empty($_POST['name'])){

$server = "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($server, $username, $password,);

if (!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
// echo "Success Connection to the DB";

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO `record`.`visitor` (`name`, `age`, `gender`, `phone`, `email`, `message`, `dt`) VALUES ('$name', '$age', '$gender', '$phone', '$email', '$message', current_timestamp());";

// echo $sql;
if($con->query($sql) == true){
    // echo "Successfully Submitted";
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Submission</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    
<div class="container">
    <form action="index.php" method="post">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input class="form-control" type="text" name="name" id="name" placeholder="Enter Your Name">
</div>

    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Age</label>
  <input type="number" class="form-control" name="age" id="age" placeholder="Enter Your Age">
</div>


    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Gender</label>
  <input type="text" class="form-control" name="gender" id="gender" placeholder="Write Your Gender">
</div>


    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Phone</label>
  <input type="number" class="form-control" name="phone" id="phone" placeholder="03001234567">
</div>


    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
</div>


<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Write Your Message</label>
  <textarea class="form-control" name="message" id="message" rows="3"></textarea>
</div>

<button type="button submit" class="btn btn-dark">Submit</button>

<?php
if($insert == true){
echo '<div class="alert alert-danger" role="alert">
  Your Form has been submitted successfully
</div>';
}
?>


</form>
</div>


<!-- INSERT INTO `visitor` (`S.no`, `Name`, `Age`, `Gender`, `Phone`, `Email`, `Message`, `dt`) VALUES ('1', 'testname', '20', 'female', '03331234567', 'ajdhfkja@kahgkha.com', 'message', current_timestamp()); -->
  </body>
</html>