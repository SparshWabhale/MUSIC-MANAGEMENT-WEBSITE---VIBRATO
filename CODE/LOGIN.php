<?php require 'CONNECT.php'; ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VIBRATO</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./style2.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://rawcdn.githack.com/albburtsev/jquery.typist/f4f429fad5bab374b1cf01da52ce4e469758afe6/dist/jquery.typist.min.js"></script>
    <script src="./script.js"></script>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="">VIBRATO</a>
    </nav>
    </section>
    <img src="PICTURES/1.png" alt="logo" style="width: 150px; height: 150px;">
    <img src="PICTURES/2.png" alt="vibrato" style="width: 330px; height: 100px;">
    <div align="center">
        <div class="container-fluid">
          <div class="col-4">
          <form action="" method="POST">
            <div class="form-group">
              <input type="text" name="USER_NAME" placeholder="Enter your Username" class="form-control" />
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <input type="password" name="U_PASSWORD" placeholder="Password" class="form-control" />
            </div>
          </div>
            <button type="submit" class="btn btn-success" name="LOGIN">LOGIN</button>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>

<?php

if(isset( $_POST['LOGIN']))
{
    $USER_NAME = $_POST['USER_NAME'];
    $U_PASSWORD = $_POST['U_PASSWORD'];

    $query = "SELECT * FROM account WHERE USER_NAME = '$USER_NAME' ";
    $output = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($output) > 0)
    {
        while($USER = mysqli_fetch_assoc($output))
        {
            if ($USER_NAME == $USER['USER_NAME'] && $U_PASSWORD === $USER['U_PASSWORD']) 
            {
               header('Location: MAIN PAGE.php'); 
            }
            else 
            { echo '<script>alert("INCORRECT USERNAME OR PASSSWORD !! ");</script>'; }
        }
    }
    else
    {
      echo '<script>alert("ENTER CREDENTIALS PLEASE !! ");</script>';;
    }
}
?>