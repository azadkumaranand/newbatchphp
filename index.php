<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

    if(!empty($conn->connect_error)){
        echo "Connection Failed";
    }

    $conn = new mysqli('localhost', 'root', '', 'newphp');
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $phone = $_POST['user_phone'];
    $age = $_POST['user_age'];
    $desc = $_POST['user_desc'];
    $sql = "INSERT INTO users (name, email, phone, age, description) VALUES ('$name', '$email', '$phone', '$age', '$desc')";
    $result = $conn->query($sql);
    if ($result) {
        echo "<h3 class='text-success'>Data Stored Successfully!</h3>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Handling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-md shadow-lg p-md-5 p-2 rounded-4">
        <h4 class="mb-4 text-secondary">Registration Form</h4>
        <form action="" method="post">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="user_name" placeholder="Enter your name">
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="user_email" value="" placeholder="Enter your email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-12">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="phone" name="user_phone">
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" class="form-control" id="age" name="user_age">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Description</label>
                <textarea rows="6" cols="" class="form-control" name="user_desc">Hello Azad</textarea>
            </div>
            <div class="text-end">
                <button class="btn btn-outline-dark">Submit</button>
            </div>
        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>