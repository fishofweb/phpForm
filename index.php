<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  
  <form action="index.php" method="post">

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
  </div>
  
  
  <div class="form-group">
    <label for="desc">Your Message:</label>
    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary mb-2">Enter</button>
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];
        echo "Entries are recieved";

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = "contacts";

        $conn = mysqli_connect($servername, $username, $password,$database);
        if(!$conn){
            die("could not connect". mysqli_connect_error());
        }
        // $sql= "CREATE TABLE `contactus` ( `id` INT(6) NOT NULL AUTO_INCREMENT, `name` VARCHAR(20) NOT NULL ,`email` VARCHAR(20) NOT NULL , `concern` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`))";
        $sql = "INSERT INTO `contactus` (`name`,`email`,`concern`) VALUES ('$name','$email','$desc')";
        $result= mysqli_query($conn, $sql);
    
if($result){
    echo "success";
}
else{
    echo "not successfull";
}

// $sql = "CREATE DATABASE computers";
// $sql= "CREATE TABLE `item` ( `id` INT(6) NOT NULL AUTO_INCREMENT, `name` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`))";
    }
     ?>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>