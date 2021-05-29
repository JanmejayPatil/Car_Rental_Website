<?php 

include('dbConnection.php');

session_start();

if(!isset($_SESSION['is_login'])) {

if(isset($_REQUEST["submit"])) {
    if(($_REQUEST["email"]=="") || ($_REQUEST["password"] == "")) {
        echo "Fill All Fields";
    }
    else {
        $email = trim($_REQUEST["email"]);
        $password = trim($_REQUEST["password"]);
        $sql = "SELECT email,password FROM adminsignup WHERE email='".$email."' AND password='".$password."' limit 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($result);
        if($row == 1) {
            $_SESSION['is_login'] = true;
            $_SESSION['email'] = $email;
            echo "<script>location.href='admin.php'</script>"; 
        }
        else {
            $msg = '<div class="alert alert-danger mt-2" role="alert">
                     Login Failed !
                    </div>';
        }
    }
}
} else {
    echo "<script>location.href='admin.php'</script>"; 
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .parent {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .text-center {
            margin-top: 25px;
        }
       
    </style>
    <title>Sign In</title>
  </head>
  <body>
      
    <div class="parent">
        <div class="container">
            <h2 class="text-center">Admin Sign In</h2>
            <div class="row my-3 mt-5">
                <div class="col-md-6 offset-md-3">
                    <form action="" method="POST" class="shadow-lg p-4">
                        <div class="form-group">
                            <label for="email" class="font-weight-bold pl-2">Email</label>
                            <input type="text" class="form-control" placeholder="Enter Your Email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="font-weight-bold pl-2">Password</label>
                            <input type="password" class="form-control" placeholder="Enter Your password" name="password" required>
                        </div>
                        <button class="btn btn-block btn-danger" type="submit" name="submit">Sign In</button>
                        <?php if(isset($msg)) {echo $msg;} ?>
                    </form>
                    <div class="text-center"><a href="front.php" class="btn btn-danger shadow-sm">Back To HOME</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>